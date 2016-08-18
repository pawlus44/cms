@extends('layouts.admin.auth.admin')

@section('content')

    <div class="login-box" ng-controller="LoginController">
      <div class="login-logo">
        <span><b>stork</b>CMS</span>
      </div>
      <!-- /.login-logo -->
      <div class="login-box-body">
          <p class="login-box-msg">Logowanie do panelu administracyjnego</p>

          <form method="post">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <div class="form-group has-feedback">
                  <input type="text" class="form-control" placeholder="Email" ng-model='email'>
                  <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
              </div>
              <div class="form-group has-feedback">
                  <input type="password" class="form-control" placeholder="Password" ng-model='password'>
                  <span class="glyphicon glyphicon-lock form-control-feedback"></span>
              </div>
              <div class="row">
                  <!-- /.col -->
                  <div class="col-xs-12" style="">
                    <button ng-click="loginAdmin()" type="submit" angular-ripple="" class="btn btn-primary btn-block btn-sm"><i class="fa fa-lock"></i><span> Zaloguj</span></button>
                  </div>
                  <div class="col-xs-12" style="margin-top:10px;">
                    <button ng-click="registration()" class="btn btn-info btn-block btn-sm"><i class="fa fa-user-plus"></i><span> Zarejestruj się</span></button>
                  </div>
                  <!-- /.col -->
              </div>
          </form>
        </div>
      <!-- /.login-box-body -->
    </div>

@endsection