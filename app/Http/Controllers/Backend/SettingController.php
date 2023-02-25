<?php

namespace App\Http\Controllers\Backend;

use Exception;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;

class SettingController extends Controller
{
    public function index(Request $request){
        try {
            foreach ($request->except(['page', '_token']) as $key => $value) {
                $setting = Setting::updateOrCreate(
                    [
                        'page' => $request->page,
                        'key' => $key,
                    ],
                    [
                        'value' => $value,
                    ]);
            }
            if ($request->has('banner')) {
                $file = $request->file('banner');
                $file->storeAs('public/images', $file->getClientOriginalName());
                Setting::where(['key' => 'banner', 'page' => $request->page])->update(['key' => 'banner', 'value' => $file->getClientOriginalName()]);
            }
            if ($request->has('section_one_image')) {
                $file = $request->file('section_one_image');
                $file->storeAs('public/images', $file->getClientOriginalName());
                Setting::where(['key' => 'section_one_image', 'page' => $request->page])->update(['key' => 'section_one_image', 'value' => $file->getClientOriginalName()]);
            }
            if ($request->has('section_two_image')) {
                $file = $request->file('section_two_image');
                $file->storeAs('public/images', $file->getClientOriginalName());
                Setting::where(['key' => 'section_two_image', 'page' => $request->page])->update(['key' => 'section_two_image', 'value' => $file->getClientOriginalName()]);
            }
            if ($request->has('section_three_image')) {
                $file = $request->file('section_three_image');
                $file->storeAs('public/images', $file->getClientOriginalName());
                Setting::where(['key' => 'section_three_image', 'page' => $request->page])->update(['key' => 'section_three_image', 'value' => $file->getClientOriginalName()]);
            }
            if ($request->has('section_four_image')) {
                $file = $request->file('section_four_image');
                $file->storeAs('public/images', $file->getClientOriginalName());
                Setting::where(['key' => 'section_four_image', 'page' => $request->page])->update(['key' => 'section_four_image', 'value' => $file->getClientOriginalName()]);
            }
           
            return response()->json([
                'status' => 200,
                'message' => 'Home Page Updated Successfully',
            ], JsonResponse::HTTP_OK);
        } catch (Exception$e) {
            return response()->json([
                'status' => JsonResponse::HTTP_INTERNAL_SERVER_ERROR,
                'message' => $e->getMessage(),
            ], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }

    }
}
