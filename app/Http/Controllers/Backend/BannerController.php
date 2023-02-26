<?php

namespace App\Http\Controllers\Backend;

use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;

class BannerController extends Controller
{

    public function aboutSlider(Request $request)
    {
       return view('backend.about.banner.index');
    }

    public function staticData(){
        return view('backend.about.static');
    }

    public function create(Request $request){
        return view('backend.about.banner.create');
    }

    public function store(Request $request){
        try {
            if ($request->has('banner')) {
                $file = $request->file('banner');
                $file->storeAs('public/images', $file->getClientOriginalName());
                Banner::create([
                    'page' =>  'about',
                    'banner' => $file->getClientOriginalName()
                ]);
            }
           
            return response()->json([
                'status' => 200,
                'message' => 'Banner Added Successfully',
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
            $banner = Banner::where('id', $id)->firstOrFail();
            $banner->delete();
            return response()->json([
                'status' => JsonResponse::HTTP_OK,
                'message' => 'Banner deleted successfully.',
            ], JsonResponse::HTTP_OK);
        } catch (\Exception$e) {
            return response()->json([
                'status' => JsonResponse::HTTP_INTERNAL_SERVER_ERROR,
                'message' => $e->getMessage(),
            ], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function edit($id){
        $banner = Banner::where('id', $id)->firstOrFail();
        return view('backend.about.banner.edit', compact('banner'));
    }

    public function update(Request $request, $id){
        try {
            if ($request->has('banner')) {
                $file = $request->file('banner');
                $file->storeAs('public/images', $file->getClientOriginalName());
                Banner::WHERE('id', $id)->update([
                    'banner' => $file->getClientOriginalName()
                ]);
            }
           
            return response()->json([
                'status' => 200,
                'message' => 'Banner Updated Successfully',
            ], JsonResponse::HTTP_OK);
        } catch (Exception$e) {
            return response()->json([
                'status' => JsonResponse::HTTP_INTERNAL_SERVER_ERROR,
                'message' => $e->getMessage(),
            ], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
    
    public function bannerDatatable(Request $request){
        if ($request->ajax()) {
            $banner = Banner::where('page', 'about')->get();
            return DataTables::of($banner)
                ->addColumn('banner', function ($row) {
                    $banner = '
                        <img class="rounded sq" src="' .  asset('storage/images/'.$row->banner) . '" alt=""> ';
                    return $banner;
                })
           ->addColumn('action', function ($row) {
                $action = '  <td class="nk-tb-col nk-tb-col-tools">
                        <ul class="nk-tb-actions gx-1">
                            <li>
                                <div class="drodown">
                                    <a href="#" class="dropdown-toggle btn btn-sm btn-icon" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <ul class="link-list-opt no-bdr">
                                            <li><a data-toggle="modal" href="" data-act="ajax-modal" data-complete-location="true" data-method="get" data-action-url=" ' . route('admin.about.banner.edit', $row->id) . ' "><em class="icon ni ni-edit"></em><span >Edit Banner</span></a></li>
                                            <li><a href="javascript:void(0)" data-table="banner-table" class="delete"  data-url=" ' . route('admin.about.banner.delete', $row->id) . ' "><em class="icon ni ni-trash"></em><span>Delete Banner</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </td>';
                return $action;

            })->rawColumns(['action','banner'])->make(true);
        }
    }
}
