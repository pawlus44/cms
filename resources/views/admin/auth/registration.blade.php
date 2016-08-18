@extends('layouts.admin.auth.admin')

@section('content')

    <div class="login-box" ng-controller="RegistrationController">
      <div class="login-logo">
        <span><b>stork</b>CMS</span>
      </div>
      <!-- /.login-logo -->
      <div class="login-box-body">
          <p class="login-box-msg">Rejestracja do panelu administracyjnego</p>

          <form method="post" class="form-app">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <div class="form-group form-group-container-firstname has-feedback">
                  <input type="text" class="form-control" placeholder="Imię" ng-model='firstname'>
                  <span class="fa fa-user form-control-feedback"></span>
                  <div class='form-control-error'></div>
              </div>
              <div class="form-group form-group-container-lastname has-feedback">
                  <input type="text" class="form-control" placeholder="Nazwisko" ng-model='lastname'>
                  <span class="fa fa-user form-control-feedback"></span>
                  <div class='form-control-error'></div>
              </div>              
              <div class="form-group form-group-container-email has-feedback">
                  <input type="text" class="form-control" placeholder="Email" ng-model='email'>
                  <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                  <div class='form-control-error'></div>
              </div>
              <div class="form-group form-group-container-password has-feedback">
                  <input type="password" class="form-control" placeholder="Hasło" ng-model='password' name="password">
                  <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                  <div class='form-control-error'></div>
              </div>
              <div class="form-group form-group-container-password_confirmation has-feedback">
                  <input type="password" class="form-control" placeholder="Powtórz hasło" ng-model='password_confirmation'>
                  <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                  <div class='form-control-error'></div>
              </div>

              <div class="row">
                  <!-- /.col -->
                  <div class="col-xs-12" style="">
                    <button ng-click="registrationAdmin()" type="submit" class="btn btn-primary btn-block btn-sm"><i class="fa fa-user-plus"></i><span> Zarejestruj </span></button>
                  </div>
                  <!-- /.col -->
              </div>
          </form>
        </div>
      <!-- /.login-box-body -->
    </div>

@endsection