@extends('layouts.frontend')

{{-- Page Title --}}
@section('page-title', 'Login')

{{-- Page Subtitle --}}
@section('page-subtitle', 'Sign in to start your session')

{{-- Breadcrumbs --}}
@section('breadcrumbs')
    {!! Breadcrumbs::render('login') !!}
@endsection

@section('content')

    <div class="login-logo">
        <b>Lacen</b>
    </div>
    <!-- /.login-logo -->
    <center>
    <div class="login-box-body"  style="width: 50%">
        <p class="login-box-msg">Entre para iniciar sua sessão</p>

        <form class="form-horizontal" method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}
            <div class="form-group has-feedback">

                <input id="email" type="email" style="width: 95%" placeholder="Email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">

                <input id="password" type="password" class="form-control" name="password" style="width: 95%"  placeholder="Senha" required>
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                @if ($errors->has('password'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                @endif

            </div>
            <div class="row">

                <!-- /.col -->
                <div class="col-xs-12">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">  Entrar      <span class="glyphicon glyphicon-log-in"></span></button>
                </div>
                <!-- /.col -->
            </div>
        </form>

        <div class="social-auth-links text-center">
            <p> </p>
            <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Entrar pelo Facebook</a>
            <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Entrar pelo Google</a>
        </div>
        <!-- /.social-auth-links -->

        <a class="btn btn-link  pull-left" href="{{ route('password.request') }}">
            Esqueceu a senha?
        </a><br>


    </div>
    <!-- /.login-box-body -->

    </center>



@endsection
