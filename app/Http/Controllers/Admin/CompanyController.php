<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Company;
use DB;
use Hash;
use DataTables;
use Validator;


class CompanyController extends Controller
{
    //********listin********//

     public function index(Request $request)
    {

        if ($request->ajax()) {
            $data = Company::latest()->get();
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
                        
                        $btn = '<a href="'.route("admin.company-edit", $row->id).'" class="edit btn btn-primary btn-sm">Edit</a>
                        <button type="button" id="deleteButton" data-url="'.route('admin.company-delete', $row->id).'" class="edit btn btn-primary btn-sm deleteButton" data-loading-text="Deleted...." data-rest-text="Delete">Delete</button>';
                                           
                        return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
      
        return view('admin.company.company-index');
    }
    //***************listing End*************//



    //***************create Function*********//

     public function create()
    {
        
        return view('admin.company.company-creat');
    }
    //**************End**************//




    //*****************Store Function***********//

    public function store(Request $request)
    {
       
        $validator = Validator::make($request->all(), [
            'name' => 'required',   
            'email' => 'required',
            'logo' => 'logo|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
       

        $company = new Company();
        $company->name = $request->name;
        $company->website_url = $request->website_url;
        $company->logo = $request->logo;
        $company->email = $request->email;
        if($request->hasFile('logo'))
        {
            $companies = 'Company_'.time().'.'.$request->logo->extension();   
            $request->logo->move(public_path('uploads/company'), $companies);
            $logourl = "uploads/company/".$companies;
            $company->logo = $logourl;
        }
        $company->save();
        return response()->json([
            'status' => true,
            'msg' => 'Company created successfully'

            ]);

    }

    //******************End**********************//


    //**********Edit Function******************//

     public function edit($id)
    {
        $company = Company::find($id);
        return view('admin.company.company-edit',compact('company'));
    }
    
    //************End***************************//

    //***************Update Function***********//

     public function update(Request $request, $id)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'logo' => 'mimes:jpg,png,jpeg',
        ]);

        if ($validator->fails()) {
           return response()->json([
            'status' => false,
            'errors' => $validator->errors()
            ]);
        }
        
        if($id) {
            $updatecompany=Company::find($id);
            $updatecompany->name = $request->name;
            $updatecompany->email = $request->email;
            $updatecompany->website_url = $request->website_url;
            if($request->hasFile('logo'))
        {
            $companies = 'company_'.time().'.'.$request->logo->extension();   
            $request->logo->move(public_path('uploads/company'), $companies);
            $logourl = "uploads/company/".$companies;
            $updatecompany->logo = $logourl;
        }
            $updatecompany->save();
            return response()->json([
                'status' => true,
                'msg' => 'Company updated successfully'
                ]);
        }
        

    }

    //***************End******************//


    //****************Delete Function*****************//

    public function destroy($id)
    {
        Company::find($id)->delete();
        return response()->json([
            'status' => true,
            'msg' => 'Company deleted successfully'
            ]);
    }
}
