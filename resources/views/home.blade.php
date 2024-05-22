@extends('layouts.app')
@section('title') Home @endsection
@section('content')

    @foreach ($posts as $post)
        
        <div class="mt-3">
            <div class="card">
                <div class="card-header">
                {{$post->title}}
                </div>
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                        <p>{{$post->description}}</p>
                        <footer class="blockquote-footer">Creator: <cite title="Source Title">{{$post->user->name}}</cite></footer>
                        <a href="{{route('posts.show' , $post->id)}}" class="btn btn-info">View</a>
                    </blockquote>
                </div>
            </div>
        </div>

    @endforeach

@endsection
