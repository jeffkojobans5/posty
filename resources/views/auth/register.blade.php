@extends('layout.welcome')

@section('content')
    <div class="container mt-2">
        <div class="col-md-4 login-form">
        <h3> Register </h3>
        <form action="{{ route('register' ) }}" method="post">
            @csrf
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Username" value="{{ old('username') }}" name="username">
                @error('username')
                    <small> {{ $message }} </small>            
                @enderror
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Name" name="name" >
                @error('name')
                    <small>  This field is required </small>              
                @enderror            
            </div>
            <div class="form-group">
                <input type="email" class="form-control" placeholder="Email Address" name="email" >
                @error('email')
                    <small>  This field is required </small>              
                @enderror            
            </div>
            <div class="form-group">
                <input type="password" class="form-control" placeholder="Password" name="password" >
                @error('password')
                    <small>  This field is required </small>              
                @enderror            
            </div>
            <div class="form-group">
                <input type="password" class="form-control" placeholder="Confirm Password" name="confirm_password" >
                @error('password')
                    <small>  This field is required </small>              
                @enderror            
            </div>
            <div class="form-group">
                <br />
                <button type="submit" class="btn btn-primary btn-block">Log in</button>
            </div>
            <br/>
            <div class="clearfix">
                <label class="float-left form-check-label"><input type="checkbox"> Remember me</label>
                <a href="#" class="float-right">Forgot Password?</a>
            </div>  
        </form>
        </div>        
    </div>
@endsection