<!DOCTYPE html>
<html>
<head>
	<title>Create Company</title>
</head>
<body>
	<header>
		<nav>
      <h2><a href="/home">Home</a></h2>
			<h1>Create Company website</h1>
		</nav>
	</header>
	<div>
		<div>
			 <div class="panel-body">
        <div>
          <a href="createcompany">Add  company</a>
        </div>
                <table class="table table-bordered">
                 
                     <thead>
                        <tr class="bg-success">
                         {{-- Name (required), email, logo - DONE --}}
{{-- (minimum 100×100), website- Done --}}
                          <th scope="col">Company Name</th>
                          <th scope="col">Company Email</th>
                          <th scope="col">Company Website</th>
                          <th scope="col"> Company Logo</th>
                          <th scope="col-2">Modify</th>
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
</body>
</html>
