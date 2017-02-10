@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}

                        <input id="name" type="text" class="form-control" name="dni" value="{{ old('name') }}" required autofocus>
                        <input id="name" type="text" class="form-control" name="tipo" value="{{ old('name') }}" required autofocus>
                                <input id="email" type="text" class="form-control" name="estado" value="{{ old('email') }}" required>
                                <input id="password" type="password" class="form-control" name="password" required>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
