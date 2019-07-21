<?php

namespace App\Http\Controllers;

use App\Company;
use App\Employee;
use App\User;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Pagination\Paginator;

class EmployeeController extends Controller
{
    /**
     * Display dd listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $employees = Employee::latest()->paginate(10);
        $companies = Company::latest()->get();
        // dd($employees);
        return view("employee.allemployees",compact('employees','companies'));
    }
    public function onecompanyemployees($id)
    {

        $employees = Employee::where('company_id',$id)->latest()->paginate(10);
      
        $company = Company::where('id',$id)->first();
        return view("employee.onecompanyemployees",compact('employees','company'));
    }
     public function editview( $id, $employee)
    {
        $oneemployee = Employee::find($employee);
        return view('employee.editemployee',compact('oneemployee')); 
    }
    public function saveedit($id,$employee)
    {
            $employee = Employee::find($employee);
        $employee->first_name = request('first_name');
        $employee->last_name = request('last_name');
        $employee->email = request('email');
        $employee->phone = request('phone');
        $employee->save();
        return redirect('/company/'.$id.'/employees')->with('success', 'Employee details editred successfully');
        
    }
    public function backreturn()
    {

        
        return redirect()->back();
    }

    
    public function create()
    {
        $company = Company::latest()->paginate(10);

        return view("employee.createemployee",compact('company'));
    }

    public function store(Request $request)
    {
         
        $user= auth()->user();
       $validator = Validator::make($request->all(), [
            'first_name' => 'required|max:120',
            'last_name' => 'required|max:120',
            // 'logo' => 'required',
            'email' => 'required|email|unique:employees',
          'phone' => 'required|string|unique:employees',

           ]);
        if ($validator->fails()) {
            return redirect('/company/employees/create')
                        ->withErrors($validator)
                        ->withInput();
         }
         else{
       $companyid = Company::where('name',$request->company)->pluck('id');
       // dd($companyid);
        $Employee = new Employee;
            $Employee->first_name = $request->first_name;
            $Employee->last_name = $request->last_name;
            $Employee->email = $request->email;
            $Employee->phone = $request->phone;
            $Employee->company_id = $companyid;
            $Employee->save();
        // dd($Employee);

        
        return redirect('/companies/employees')->with('success, company added successfully');
    
    }

}   
    public function destroy($id, $employee)
    {
           DB::table('employees')->where('id', $employee)->delete(); 
        return redirect('/company/'.$id.'/employees')->with('danger', 'Company details editred successfully');
    }
}
