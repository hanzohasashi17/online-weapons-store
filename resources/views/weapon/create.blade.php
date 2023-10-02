@extends('adminlte::page')

@section('title', 'Admin panel for seller')

@section('content_header')
    <h1 align="center">Add new weapon for sale</h1>
@stop

@section('content')
    <form action="/store" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="row">
            <x-adminlte-input name="name" label="Weapon name" placeholder="AK-74M"
                              fgroup-class="col-md-6" disable-feedback/>
        </div>

        <x-adminlte-textarea name="description" label="Description" rows=5 label-class="text-dark"
                             igroup-size="sm" placeholder="Insert description...">
            <x-slot name="prependSlot">
                <div class="input-group-text bg-dark">
                    <i class="fas fa-lg fa-file-alt text-warning"></i>
                </div>
            </x-slot>
        </x-adminlte-textarea>

        <div class="row">
            <x-adminlte-input name="price" label="Price" placeholder="1000"
                              fgroup-class="col-md-6" disable-feedback/>
        </div>

        <x-adminlte-input-file name="image" label="Upload image" placeholder="Choose a file..."/>

        <x-adminlte-button class="btn-flat" type="submit" label="Submit" theme="success" icon="fas fa-lg fa-save"/>
    </form>
@stop
