<?php

namespace App\Http\Controllers;

use App\Company;
use App\Employee;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Pagination\Paginator;
use DB;
use App\Mail\NewCompany;
use App\Mail\RegisterReply;
use Illuminate\Support\Facades\Mail;


class CompanyController extends Controller
{
    
    public function index()
    {
        return view("company.createcompany");
    }

    
    public function create()
    {
        //
    }
    public function store(Request $request)
    {
        $user= auth()->user();
        $users =$user->id;
        $logo = $request->file('logo');
        //get file extension. I.e png or jpeg etc
        // $extension = $logo->getClientOriginalExtension();
        //store the image in public folder then get the file name and extension of the logo
        // Storage::disk('public')->put($logo->getFilename().'.'.$extension, File::get($logo));

        // $admin = User::where('id',20)->first();
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:companies|max:120',
            // 'logo' => 'required',
            'email' => 'required|email|unique:companies',
          'website' => 'required|string|unique:companies',

           ]);
         if ($validator->fails()) {
            return redirect('/createcompany')
                        ->withErrors($validator)
                        ->withInput();
         }
         else{
        $company = new Company;
            $company->name = $request->name;
            $company->email = $request->email;
            // $company->logo = $logo->getFilename().'.'.$extension;
            $company->website = $request->website;
            $company->save();
        // Mail::send(new NewCompany($company));

        // dd($company);

        
        return redirect('/companies')->with('success, company added successfully');
    }
}
        public function show($id) //this should be company
    {
        // $company = Company::where('id',$id)->get();
        $company= Company::find($id);
        // dd($event);
        return view("company.viewonecompany", compact('company'));
    }

        public function editcompany($id, Request $request)
    {
         $company = Company::find($id);
         // dd($company);
         // $company/->name = $request->get('company_name');
        $company->name = request('company_name');
        $company->email = request('company_email');
        $company->website = request('company_website');
        $company->logo = request('logo');
        $company->save();
        // dd($company->name); //find out eloquent way of editing
        return redirect('/companies')->with('success', 'Company details editred successfully');
    }
     public function viewcompanies(Request $request)
    {
        $companies = Company::paginate();
        // dd($companies);
        return view('company.viewcompanies',compact('companies'));
    }

    public function update(Request $request, Company $company)
    {
        //
    }

    
    public function destroy($id)
    {
        DB::table('companies')->where('id', $id)->delete();
        DB::table('employees')->where('company_id', $id)->delete();
        return redirect('/companies')->with('danger', 'Company details editred successfully');
           }
}
