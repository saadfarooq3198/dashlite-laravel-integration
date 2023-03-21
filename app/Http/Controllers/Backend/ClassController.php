<?php

namespace App\Http\Controllers\backend;

use App\Models\OurClass;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;

class ClassController extends Controller
{
    public function index()
    {
        return view('backend.ourclass.class.index');
    }

    public function static()
    {
        return view('backend.ourclass.static');
    }

    public function create(Request $request){
        return view('backend.ourclass.class.create');
    }

    public function store(Request $request){
        try {

            if ($request->has('image')) {
                $file = $request->file('image');
                $file->storeAs('public/images', $file->getClientOriginalName());
            }
            $class = OurClass::create([
                'title' => $request->title,
                'description' => $request->description,
                'image' => $file->getClientOriginalName()
            ]);
           
            return response()->json([
                'status' => 200,
                'message' => 'Class Added Successfully',
            ], JsonResponse::HTTP_OK);
        } catch (Exception$e) {
            return response()->json([
                'status' => JsonResponse::HTTP_INTERNAL_SERVER_ERROR,
                'message' => $e->getMessage(),
            ], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function edit($id){
        $class = OurClass::where('id', $id)->firstOrFail();
        return view('backend.ourclass.class.edit', compact('class'));
    }

    public function update(Request $request, $id){
        try {
            
            OurClass::where('id', $id)->update([
                'title' => $request->title,
                'description' => $request->description,
            ]);

            if ($request->has('image')) {
                $file = $request->file('image');
                $file->storeAs('public/images', $file->getClientOriginalName());
                OurClass::WHERE('id', $id)->update([
                    'image' => $file->getClientOriginalName()
                ]);
            }
           
            return response()->json([
                'status' => 200,
                'message' => 'Class Updated Successfully',
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
            $class = OurClass::where('id', $id)->firstOrFail();
            $class->delete();
            return response()->json([
                'status' => JsonResponse::HTTP_OK,
                'message' => 'Class deleted successfully.',
            ], JsonResponse::HTTP_OK);
        } catch (\Exception$e) {
            return response()->json([
                'status' => JsonResponse::HTTP_INTERNAL_SERVER_ERROR,
                'message' => $e->getMessage(),
            ], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function classDatatable(Request $request){
        if ($request->ajax()) {
            $class = OurClass::all();
            return DataTables::of($class)->addColumn('description', function ($row) {
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
                                            <li><a href="javascript:void(0)" data-table="class-table" data-act="ajax-modal" data-complete-location="true" data-method="get" data-action-url=" ' . route('admin.classes.edit', $row->id) . ' "><em class="icon ni ni-edit"></em><span >Edit Class</span></a></li>
                                            <li><a href="javascript:void(0)" data-table="class-table" class="delete"  data-url=" ' . route('admin.classes.destroy', $row->id) . ' "><em class="icon ni ni-trash"></em><span>Delete Class</span></a></li>
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
