@extends('layouts.app')

@section('content')
<div style="position: center; width: 75%;margin-left: 12.5%;margin-top: 50px;">
<div class="card">
  <div class="card-header">
    Create Employee
  </div>
  <div class="card-body">

<form method="POST" action="/company/employees/save">
	@csrf
  <div class="form-group row">
    <label for="inputEmail3" class="col-md-6 col-form-label">First Name</label>
    <div class="col-sm-10">
      <input type="text" name="first_name" class="form-control"value="{{$oneemployee->first_name}}"  id="inputEmail3" placeholder="First Name">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail3" class="col-md-6 col-form-label">Last Name</label>
    <div class="col-sm-10">
      <input type="text" name="last_name" class="form-control"value="{{$oneemployee->last_name}}"  id="inputEmail3" placeholder="Last Name">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputPassword3" class="col-md-6 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email"name="email" class="form-control" value="{{$oneemployee->email}}"  id="inputPassword3" placeholder=" Email">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-md-6 col-form-label">Phone</label>
    <div class="col-sm-10">
      <input type="text" name="phone" class="form-control" value="{{$oneemployee->phone}}"  id="inputPassword3" placeholder="Phone_No">
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


	