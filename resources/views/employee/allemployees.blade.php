@extends('layouts.app')

@section('content')
	<header>
		<nav>
			<h1> All company Employees for all regions</h1>
      <a href="/company/employees/create"><h4>Create Employee</h4></a>
		</nav>
	</header>
	<div>
		<div>
			 <div class="panel-body">
                <table class="table table-bordered">
                 
                     <thead>
                        <tr class="bg-success">
                       {{-- First name (required), last name (required), Company (foreign key to Companies), email, phone- DONE                          <th scope="col">Employee Name</th> --}}
                          <th scope="col">Employee Name</th>
                          <th scope="col">Employee Email</th>
                          <th scope="col">Employee Phone_No</th>
                          {{-- <th colspan="2">Company</th> --}}
                          
                          <th colspan="2">Modify</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($employees as $employee)
                       <tr>
                        {{-- <td>{{$tean->id}}</td> --}}
                        <td>{{$employee->first_name}}  {{$employee->last_name}}</td>
                        <td>{{$employee->email}}</td>
                        <td>{{$employee->phone}}</td>
                        {{-- <td>{{$employee->company}}</td> --}}
                        {{-- <td><a href="employee/{{$employee->id}}"><button>View Details</button></a></td> --}}
                         <td><a href="/company/{{$employee->company_id}}/employees/{{$employee->id}}/editview"><button>Edit Details</button></a></td>
                        <td><a href="/company/{{$employee->company_id}}/employees/{{$employee->id}}/delete"><button>Delete</button></a></td>
                       
                        

                       </tr>
                       @endforeach
                       <tr>
                      <td colspan="4">{{$employees->links()}}</td>
                      
                    </tr>
                        </tbody>
                        </table>
                        

              </div>
		</div>

	</div>
@endsection>
