@extends('layout.index')

@section('title', 'Register page')

@section('content_header')
    <div class="container">
        <h1>Registration on platform</h1>
    </div>
@stop

@section('content')
    <div class="container">
        <form action="/auth/register" method="post">
            {{csrf_field()}}
            <div class="row">
                <x-adminlte-input name="name" placeholder="User name"
                                  fgroup-class="col-md-6" disable-feedback/>
            </div>

            <div class="row">
                <x-adminlte-input name="email" placeholder="Email"
                                  fgroup-class="col-md-6" disable-feedback/>
            </div>

            <div class="row">
                <x-adminlte-input name="password" placeholder="Password"
                                  fgroup-class="col-md-6" disable-feedback/>
            </div>

            <x-adminlte-button class="btn-flat" type="submit" label="Submit" theme="success"
                               icon="fas fa-lg fa-save"/>
        </form>
        <br>
        <a href="/auth/login">I have an account</a>
    </div>
@stop
