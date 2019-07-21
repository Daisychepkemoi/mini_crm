<!DOCTYPE html>
<html>
<head>
	<title>Create Company</title>
</head>
<body>
	<header>
		<nav>
			<h1>Create Company website</h1>
			<p>jhgfds</p>
		</nav>
	</header>
	<div>
		<div>

			<form method='POST' action="/company/{{$company->id}}/edit">
				@csrf
			<div>
				<label>Company Name</label>
				<input type="text" name="company_name" value="{{$company->name}}">
			</div>
			<div>
				<label>Email</label>
				<input type="email" name="company_email" value="{{$company->email}}">
				
			</div>
			<div>
				<label>Logo</label>
				<input type="file" name="logo" placeholder="Logo" value="{{$company->logo}}">
				
			</div>
			<div>
				<label>Website</label>
				<input type="text" name="company_website" placeholder="website" value="{{$company->website}}">
<!-- {{-- 				//use javascript to automatically create email if possible --}} -->
			</div>
			<div>
				<button>Update</button>
			</div>
			</form>
		</div>

	</div>
</body>
</html>
