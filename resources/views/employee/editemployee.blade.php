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
 
			<form method='POST' action="/company/{{$oneemployee->company_id}}/employees/{{$oneemployee->id}}/edit">
				@csrf
			<div>
				<label>First Name</label>
				<input type="text" name="first_name" placeholder=" first_name" value="{{$oneemployee->first_name}}">
			</div>
			<div>
				<label>Last Name</label>
				<input type="text" name="last_name" placeholder=" Email" value="{{$oneemployee->last_name}}">
				
			</div>
			<div>
				<label>Email</label>
				<input type="email" name="email" placeholder=" Email" value="{{$oneemployee->email}}">
				
			</div>
			<div>
				<label>Phone_No</label>
				<input type="Text" name="phone" placeholder="phone" value="{{$oneemployee->phone}}">
				
			</div>
			
			<div>
				<button>Submit</button>
			</div>
			</form>
		</div>

	</div>
</body>
</html>
