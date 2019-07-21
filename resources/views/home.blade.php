@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
                <div>
                    <a href="/companies"><button>View All  Companies</button></a> <br>
                    <a href="/companies/employees"><button>View All Company Employees for all regions</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
