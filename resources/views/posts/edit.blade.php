@extends('layouts.app')
@section('title') Edit @endsection
@section('content')
<form method="POST" action="{{route('posts.update' , $post->id)}}">
    @csrf
    @method('PUT') 
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Title</label>
        <input type="text" name=Title class="form-control" value="{{$post->title}}" id="exampleFormControlInput1" placeholder="EX: Bloge name">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Description</label>
        <textarea name=Descrip class="form-control" id="exampleFormControlTextarea1" rows="3">{{$post->description}}</textarea>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Post Creator</label>
        <select name=PostCreator class="form-control">
            @foreach ($users as $user)
                {{--<option @if($user->id == $post->user_id) selected @endif value="{{$user->id}}">{{$user->name}}</option>--}}
                <option @selected($user->id == $post->user_id) value="{{$user->id}}">{{$user->name}}</option>
            @endforeach
        </select>
    </div>
    
    <input type="submit" class="btn btn-outline-primary" value="Update"></input>
</form>
@endsection