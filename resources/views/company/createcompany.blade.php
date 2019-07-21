@extends('layouts.app')

@section('content')
<div style="position: center; width: 75%;margin-left: 12.5%;margin-top: 50px;">
<div class="card">
  <div class="card-header">
    Create Company
  </div>
  <div class="card-body">

<form method="POST" action="/createcompany" enctype="multipart/form-data">
	@csrf
  <div class="form-group row">
    <label for="inputEmail3" class="col-md-6 col-form-label">Company Name</label>
    <div class="col-sm-10">
      <input type="text" name="name" class="form-control"value="{{ old('name') }}"  id="inputEmail3" placeholder="Company Name">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-md-6 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email"name="email" class="form-control" value="{{ old('email') }}"  id="inputPassword3" placeholder="Company Email">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-md-6 col-form-label">Logo</label>
    <div class="col-sm-10">
      <input type="file" name="logo" class="form-control"  value="{{ old('website') }}"  id="inputPassword3" placeholder="Company Logo">
    </div>
  </div>
<div class="form-group row">
    <label for="inputPassword3" class="col-md-6 col-form-label">Website</label>
    <div class="col-sm-10">
      <input type="website" name="website" class="form-control" id="inputPassword3" placeholder="Website">
    </div>
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


  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Save</button>
    </div>
  </div>
</form>
</div>
</div>

	

			
			
		</div>

@endsection