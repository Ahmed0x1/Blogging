@extends('layouts.app')
@section('title') Create @endsection
@section('content')
    <form method="POST" action="{{route('posts.store')}}">
        @csrf 
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Title</label>
            <input type="text" name=Title class="form-control" id="exampleFormControlInput1" placeholder="EX: Bloge name">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Description</label>
            <textarea name=Descrip class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Post Creator</label>
            <select name=PostCreator class="form-control">
                @foreach ($users as $user)                    
                    <option value="{{$user->id}}">{{$user->name}}</option>
                @endforeach
            </select>
        </div>
        
        <input type="submit" class="btn btn-outline-success" value="Create"></input>
    </form>
@endsection