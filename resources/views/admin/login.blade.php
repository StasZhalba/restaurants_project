@extends('admin.layout')
@section('content')

<div class="container">

    <form class="login-form" role="form" method="post" action="{{ route('admin.login.submit') }}">
        {{ csrf_field() }}
        <div class="login-wrap">
            <p class="login-img"><i class="icon_lock_alt"></i></p>
            <div class="input-group">
                <span class="input-group-addon"><i class="icon_profile"></i></span>
                <input id="email" name="email" type="email" class="form-control" placeholder="Email" autofocus>
            </div>
            <div class="input-group">
                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                <input id="password" name="password" type="password" class="form-control" placeholder="Password">
            </div>
            <label class="checkbox">
                <input type="checkbox" value="remember-me" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember me
                <span class="pull-right"> <a href="{{ route('password.request') }}"> Forgot Password?</a></span>
            </label>
            <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
            {{--<button class="btn btn-info btn-lg btn-block" type="submit">Signup</button>--}}
        </div>
    </form>
    <div class="text-right">
        <div class="credits">
            <!--
                All the links in the footer should remain intact.
                You can delete the links only if you purchased the pro version.
                Licensing information: https://bootstrapmade.com/license/
                Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
            -->
            <a href="https://bootstrapmade.com/free-business-bootstrap-themes-website-templates/">Business Bootstrap Themes</a> by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </div>
</div>
@endsection
