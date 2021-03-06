@extends('master')
@section("content")
<div class="container custom-login">
    <div class="row">
        <div class="col-sm-4 offset-sm-4">
            <form action="/login" method="POST">
                <h1 class="h3 mb-3 fw-normal">Please Login</h1>
                @csrf
                <label for="inputEmail" class="visually-hidden">Email address</label>
                <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address"
                    required="" autofocus="">
                <br>
                <label for="inputPassword" class="visually-hidden">Password</label>
                <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password"
                    required="">
                <!-- <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
            </div> -->
                <br>
                <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>

            </form>
        </div>
    </div>
</div>
@endsection
