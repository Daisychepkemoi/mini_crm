@extends('layouts.app')

@section('content')
	<div>
		<div>
			 <div class="panel-body">
        <div style="margin-left: 12.5%;">
      <a href="/createcompany" style="margin-top: 15px;"><h4>Create Company</h4></a>
        </div>
                <table class="table table-bordered" style="width:75%;margin-left: 12.5%;margin-top: 20px;">
                 
                     <thead>
                        <tr class="bg-success">
                         {{-- Name (required), email, logo - DONE --}}
{{-- (minimum 100×100), website- Done --}}
                          <th scope="col">Company Name</th>
                          <th scope="col">Company Email</th>
                          <th scope="col">Company Website</th>
                          <th scope="col"> Company Logo</th>
                          <th colspan="3">Modify</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($companies as $company)
                       <tr>
                        {{-- <td>{{$tean->id}}</td> --}}
                        <td>{{$company->name}}</td>
                        <td>{{$company->email}}</td>
                        <td>{{$company->website}}</td>
                        <td>{{$company->logo}}</td>
                        {{-- <td><a href="company/{{$company->id}}"><button>View Details</button></a></td> --}}
                        <td><a href="company/{{$company->id}}"><button>Edit Details</button></a></td>
                        <td><a href="company/{{$company->id}}/delete"><button>Delete</button></a></td>
                        <td><a href="company/{{$company->id}}/employees"><button>View Employees </button></a></td>
                       
                        

                       </tr>
                       @endforeach
                       <tr>
                      <td colspan="4">{{$companies->links()}}</td>
                      
                    </tr>
                        </tbody>
                        </table>
                        

              </div>
		</div>

	</div>

@endsection
