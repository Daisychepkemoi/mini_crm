<!DOCTYPE html>
<html>
<head>
	<title>Create Company</title>
</head>
<body>
	<header>
		<nav>
			<h1>Create Company website</h1>
		</nav>
	</header>
	<div>
		<div>
 
			<form method='POST' action="/company/employees/save">
				@csrf
			<div>
				<label>First Name</label>
				<input type="text" name="first_name" placeholder=" first_name" >
			</div>
			<div>
				<label>Last Name</label>
				<input type="text" name="last_name" placeholder=" Email" >
				
			</div>
			<div>
				<label>Email</label>
				<input type="email" name="email" placeholder=" Email" >
				
			</div>
			<div>
				<label>Phone_No</label>
				<input type="Text" name="phone" placeholder="phone" >
				
			</div>
			<div>
				<label>Company</label>
				<select name = "company">
					@foreach($company as $co)
					<option>{{$co->name}}</option>
					@endforeach
				</select>
			</div>
			<div>
				<button>Submit</button>
			</div>
			@if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                               @endif
			</form>
		</div>

	</div>
</body>
</html>
