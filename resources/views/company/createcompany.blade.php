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
				<input type="text" name="name" placeholder="Company Name">
			</div>
			<div>
				<label>Email</label>
				<input type="email" name="email" placeholder="Company Email">
				
			</div>
			<div>
				<label>Logo</label>
				<input type="file" name="logo" placeholder="Logo">
				
			</div>
			<div>
				<label>Website</label>
				<input type="text" name="website" placeholder="website">
{{-- 				//use javascript to automatically create email if possible --}}
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
