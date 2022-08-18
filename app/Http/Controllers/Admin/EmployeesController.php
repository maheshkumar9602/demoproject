<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Employees;
use App\Models\Company;
use DB;
use Hash;
use DataTables;
use Validator;

class EmployeesController extends Controller
{
    //*************listing*************//

     public function index(Request $request)
    {

        if ($request->ajax()) {
            $data = Employees::leftjoin('companies','companies.id','=','employees.company_id')->select('employees.*','companies.name as company_id')->get();
            //echo "<pre>";print_r($data);die;
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
                        
                        $btn = '<a href="'.route("admin.employees-edit", $row->id).'" class="edit btn btn-primary btn-sm">Edit</a>
                        <button type="button" id="deleteButton" data-url="'.route('admin.employees-delete', $row->id).'" class="edit btn btn-primary btn-sm deleteButton" data-loading-text="Deleted...." data-rest-text="Delete">Delete</button>';
                                           
                        return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
      
        return view('admin.employees.employees-index');
    }

    //*********************End***********************//

    //*********************Create Function***********************//

     public function create()
    {
        $company = DB::table('companies')->get();
        return view('admin.employees.employees-creat',compact('company'));
    }

    //*********************Create Function End***********************//


    //*********************Store Function***********************//

     public function store(Request $request)
    {
       
        $validator = Validator::make($request->all(), [
            'first_name' => 'required',   
            'last_name' => 'required',   
            'company_id' => 'required',   
            'email' => 'required',
            'phone' => 'required',
        ]);
       


        $employees = new Employees();
        $employees->first_name = $request->first_name;
        $employees->last_name = $request->last_name;
        $employees->company_id = $request->company_id;
        $employees->email = $request->email;
        $employees->phone = $request->phone;
       
        $employees->save();
        return response()->json([
            'status' => true,
            'msg' => 'Employer created successfully'

            ]);

    }


    //*********************Store Function End***********************//

    //*********************Edit Function***********************//

     public function edit($id)
    {
        $employees = Employees::find($id);
        $company = Company::get();
        return view('admin.employees.employees-edit',compact('employees','company'));
    }
    

    //*********************Edit Function End***********************//


    //*********************Update Function***********************//

    public function update(Request $request, $id)
    {
        //echo "<pre>";print_r($request->all());die;
        $validator = Validator::make($request->all(), [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
        ]);

        if ($validator->fails()) {
           return response()->json([
            'status' => false,
            'errors' => $validator->errors()
            ]);
        }
        
        if($id) {
            $updateemployees= Employees::find($id);
            $updateemployees->first_name = $request->first_name;
            $updateemployees->last_name = $request->last_name;
            $updateemployees->company_id = $request->company_id;
            $updateemployees->email = $request->email;
            $updateemployees->phone = $request->phone;
           
            $updateemployees->save();
            return response()->json([
                'status' => true,
                'msg' => 'employer updated successfully'
                ]);
        }
        

    }


    //*********************Update Function End***********************//

    //*********************Delete Function***********************//

    public function destroy($id)
    {
        Employees::find($id)->delete();
        return response()->json([
            'status' => true,
            'msg' => 'Employer deleted successfully'
            ]);
    }

    //*********************Delete Function End***********************//
}
