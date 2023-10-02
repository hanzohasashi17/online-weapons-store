@extends('layout.index')

@section('title', 'Admin panel for seller')

@section('content_header')
    <h1 align="center">Show your and other users weapon for sale</h1>
@stop

@section('content')
    <div class="container">
        <div class="row">
            @foreach($weapons as $weapon)
                <div class="col-md-3 weapon-item">
                    <img src="/{{$weapon->image}}" class="img-thumbnail" alt="weapon image">
                    <p align="center"><b>Name:</b> {{$weapon->name}}</p>
                    <p align="center"><b>Description:</b> {{$weapon->description}}</p>
                    <p align="center"><b>Price:</b> {{$weapon->price}}$</p>
                    <a href="/show/{{$weapon->id}}" class="btn btn-info my-button">View</a>
                    <a href="/edit/{{$weapon->id}}" class="btn btn-warning my-button">Edit</a>
                    <a href="/delete/{{$weapon->id}}" onclick="return confirm('Вы уверены?')" class="btn btn-danger my-button">Delete</a>
                </div>
            @endforeach
        </div>
    </div>
@stop
