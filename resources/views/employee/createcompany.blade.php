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
			<form method='POST' action="/createcompany">
				@csrf
			<div>
				<label>Company Name</label>
				<input type="text" name="company_name" placeholder="Company Name">
			</div>
			<div>
				<label>Email</label>
				<input type="email" name="company_email" placeholder="Company Email">
				
			</div>
			<div>
				<label>Logo</label>
				<input type="file" name="logo" placeholder="Logo">
				
			</div>
			<div>
				<label>Website</label>
				<input type="text" name="company_website" placeholder="website">
{{-- 				//use javascript to automatically create email if possible --}}
			</div>
			<div>
				<button>Submit</button>
			</div>
			</form>
		</div>

	</div>
</body>
</html>
