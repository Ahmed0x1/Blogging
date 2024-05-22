@extends('layouts.app')
@section('title') Show @endsection
@section('content')
    <div class="card mt-4">
        <div class="card-header">
            Post Info
        </div>
        <div class="card-body">
            <h5 class="card-title">Title: {{$posts->title}}</h5>
            <p class="card-text">Description: {{$posts->description}}</p>
        </div>
    </div>
    <div class="card mt-4">
        <div class="card-header">
            Post Creator Info
        </div>
        <div class="card-body">
            <h5 class="card-title">Name: {{$posts->user->name}}</h5>
            <p class="card-text">Email: {{$posts->user->email}}</p>
            <p class="card-text">Created At: {{$posts->user->created_at}}</p>
        </div>
    </div>
@endsection