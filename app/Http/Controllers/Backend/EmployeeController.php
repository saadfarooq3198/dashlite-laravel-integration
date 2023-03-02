<?php

namespace App\Http\Controllers\Backend;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.about.employee.index');
    }

    public function create(Request $request){
        return view('backend.about.employee.create');
    }

    public function store(Request $request){
        try {
            Employee::create([
                'name' => $request->name,
                'post' => $request->designation,
                'description' => $request->description
            ]);
            return response()->json([
                'status' => 200,
                'message' => 'Employee Added Successfully',
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
            $employee = Employee::where('id', $id)->firstOrFail();
            $employee->delete();
            return response()->json([
                'status' => JsonResponse::HTTP_OK,
                'message' => 'Employee deleted successfully.',
            ], JsonResponse::HTTP_OK);
        } catch (\Exception$e) {
            return response()->json([
                'status' => JsonResponse::HTTP_INTERNAL_SERVER_ERROR,
                'message' => $e->getMessage(),
            ], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function edit($id){
        $employee = Employee::where('id', $id)->firstOrFail();
        return view('backend.about.employee.edit', compact('employee'));
    }

    public function update(Request $request, $id){
        try {
            Employee::where('id', $id)->update([
                'name' => $request->name,
                'post' => $request->designation,
                'description' => $request->description
            ]);
           
            return response()->json([
                'status' => 200,
                'message' => 'Employee Updated Successfully',
            ], JsonResponse::HTTP_OK);
        } catch (Exception$e) {
            return response()->json([
                'status' => JsonResponse::HTTP_INTERNAL_SERVER_ERROR,
                'message' => $e->getMessage(),
            ], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
    
    public function employeeDatatable(Request $request){
        if ($request->ajax()) {
            $employee = Employee::all();
            return DataTables::of($employee)->addColumn('description', function ($row) {
                return addEllipsis($row->description, $max = 50);
            })
           ->addColumn('action', function ($row) {
                $action = '  <td class="nk-tb-col nk-tb-col-tools">
                        <ul class="nk-tb-actions gx-1">
                            <li>
                                <div class="drodown">
                                    <a href="#" class="dropdown-toggle btn btn-sm btn-icon" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <ul class="link-list-opt no-bdr">
                                            <li><a href="javascript:void(0)" data-table="employee-table" data-act="ajax-modal" data-complete-location="true" data-method="get" data-action-url=" ' . route('admin.employees.edit', $row->id) . ' "><em class="icon ni ni-edit"></em><span >Edit Employee</span></a></li>
                                            <li><a href="javascript:void(0)" data-table="employee-table" class="delete"  data-url=" ' . route('admin.employees.destroy', $row->id) . ' "><em class="icon ni ni-trash"></em><span>Delete Employee</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </td>';
                return $action;

            })->rawColumns(['action'])->make(true);
        }
    }
}
