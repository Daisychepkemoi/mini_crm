@extends('layouts.app')

@section('content')
	<header>
		<nav>
			<h1> AllEmployees on all Regions Company</h1>
		</nav>
	</header>
	<div>
		<div>
			<div>
			<h3><button style="float: left;">Lisut Of Employees</button> <a href="" style="float: right"><button >Add Employees</button></a></h3>
			</div>
			 <div class="panel-body">
                <table class="table table-bordered">
                 
                     <thead>
                        <tr class="bg-success">
                       {{-- First name (required), last name (required), Company (foreign key to Companies), email, phone- DONE                          <th scope="col">Employee Name</th> --}}
                          <th scope="col">Employee Name</th>
                          <th scope="col">Employee Email</th>
                          <th scope="col">Employee Phone_No</th>
                          
                          <th scope="col-3">Modify</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($employees as $employee)
                       <tr>
                        {{-- <td>{{$tean->id}}</td> --}}
                        <td>{{$employee->name}}</td>
                        <td>{{$employee->email}}</td>
                        <td>{{$employee->website}}</td>
                        <td>{{$employee->logo}}</td>
                        {{-- <td><a href="employee/{{$employee->id}}"><button>View Details</button></a></td> --}}
                        <td><a href="company/{{$company->id}}/edit"><button>Edit Details</button></a></td>
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
