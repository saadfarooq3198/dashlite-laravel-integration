<?php

namespace App\Http\Controllers\Backend;

use App\Models\Event;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;

class EventController extends Controller
{
    public function index()
    {
        return view('backend.about.event.index');
    }

    public function create(Request $request){
        return view('backend.about.event.create');
    }

    public function store(Request $request){
        try {
            if($request->is_special){
                $isSpecial = 'special';
            }
            else{
                $isSpecial = 'normal';
            }

            if ($request->has('image')) {
                $file = $request->file('image');
                $file->storeAs('public/images', $file->getClientOriginalName());
            }

            $event = Event::create([
                'title' => $request->title,
                'description' => $request->description,
                'is_special' => $isSpecial,
                'image' => $file->getClientOriginalName()
            ]);
           
            return response()->json([
                'status' => 200,
                'message' => 'Event Added Successfully',
            ], JsonResponse::HTTP_OK);
        } catch (Exception$e) {
            return response()->json([
                'status' => JsonResponse::HTTP_INTERNAL_SERVER_ERROR,
                'message' => $e->getMessage(),
            ], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function destroy($id)
    {
        try {
            $event = Event::where('id', $id)->firstOrFail();
            $event->delete();
            return response()->json([
                'status' => JsonResponse::HTTP_OK,
                'message' => 'Event deleted successfully.',
            ], JsonResponse::HTTP_OK);
        } catch (\Exception$e) {
            return response()->json([
                'status' => JsonResponse::HTTP_INTERNAL_SERVER_ERROR,
                'message' => $e->getMessage(),
            ], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function edit($id){
        $event = Event::where('id', $id)->firstOrFail();
        return view('backend.about.event.edit', compact('event'));
    }

    public function update(Request $request, $id){
        try {
            if($request->is_special){
                $isSpecial = 'special';
            }
            else{
                $isSpecial = 'normal';
            }
            Event::where('id', $id)->update([
                'title' => $request->title,
                'description' => $request->description,
                'is_special' => $isSpecial,
            ]);

            if ($request->has('image')) {
                $file = $request->file('image');
                $file->storeAs('public/images', $file->getClientOriginalName());
                Event::WHERE('id', $id)->update([
                    'image' => $file->getClientOriginalName()
                ]);
            }
           
            return response()->json([
                'status' => 200,
                'message' => 'Event Updated Successfully',
            ], JsonResponse::HTTP_OK);
        } catch (Exception$e) {
            return response()->json([
                'status' => JsonResponse::HTTP_INTERNAL_SERVER_ERROR,
                'message' => $e->getMessage(),
            ], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
    
    public function eventDatatable(Request $request){
        if ($request->ajax()) {
            $event = Event::all();
            return DataTables::of($event)->addColumn('description', function ($row) {
                return addEllipsis($row->description, $max = 50);
            }) ->addColumn('image', function ($row) {
                $image = '
                    <img class="rounded sq" src="' .  asset('storage/images/'.$row->image) . '" alt=""> ';
                return $image;
            })
           ->addColumn('action', function ($row) {
                $action = '  <td class="nk-tb-col nk-tb-col-tools">
                        <ul class="nk-tb-actions gx-1">
                            <li>
                                <div class="drodown">
                                    <a href="#" class="dropdown-toggle btn btn-sm btn-icon" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <ul class="link-list-opt no-bdr">
                                            <li><a href="javascript:void(0)" data-table="event-table" data-act="ajax-modal" data-complete-location="true" data-method="get" data-action-url=" ' . route('admin.events.edit', $row->id) . ' "><em class="icon ni ni-edit"></em><span >Edit Event</span></a></li>
                                            <li><a href="javascript:void(0)" data-table="event-table" class="delete"  data-url=" ' . route('admin.events.destroy', $row->id) . ' "><em class="icon ni ni-trash"></em><span>Delete Event</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </td>';
                return $action;

            })->rawColumns(['image', 'action'])->make(true);
        }
    }
}
