@extends('layouts.loginBackground')

@section('content')
 <div class="login-background">
        <br>
        <br>
        <div class="card card-container">
        <h2 class='login_title text-center'>Login</h2>
        <hr>
            <form class="form-signin" action="/dashboard">
                <span id="reauth-email" class="reauth-email"></span>
                <p class="input_title">Email</p>
                <input type="text" id="inputEmail" class="login_box" placeholder="user01@IceCode.com" required autofocus>
                <p class="input_title">Password</p>
                <input type="password" id="inputPassword" class="login_box" placeholder="******" required>
                <div id="remember" class="checkbox">
                    <label>
                        
                    </label>
                </div>
                <button class="btn btn-lg btn-primary" type="submit">Login</button>
            </form><!-- /form -->
        </div><!-- /card-container -->
    </div><!-- /container -->
@endsection
