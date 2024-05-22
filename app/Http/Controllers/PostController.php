<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function Laravel\Prompts\confirm;

use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    public function home() 
    {
        $userFromDB = User::all();
        $postFromDB = Post::all();
        
        return view('home', ['users' => $userFromDB, 'posts' => $postFromDB]);
    }
    public function index()
    {

        $postsFromDB = Post::all();// collection object
        return view('posts.index' , ['posts' => $postsFromDB]);
    }
    public function show(Post $post)//it like : $singlePostFromDB = Post::find($post);
    {
        //First Syntax: $singlePostFromDB = Post::find($postId);//                                                    (Recommended)
        //Second Syntax: $singlePostFromDB = Post::where('id', $postId)->first(); // model object with one item limit (Recommended)
        //Third Syntax: $singlePostFromDB = Post::where('id', $postId)->get();// collection object with one item
        return view('posts.show', ['posts' => $post]);
    }
    public function create()
    {
        $users = User::all();
        return view('posts.create', ['users'=>$users]);
    }
    public function store()
    {
        #$data = request()->all();// save data from create.blade.php at form in this variable, its like = $_POST
        $title = request()->Title;// like $title = $_POST['Title'];
        $description = request()->Descrip;
        $post_creator = request()->PostCreator;
        /* 
        First syntax for insert into database
            $post = new Post;

            $post->title = $title;
            $post->description = $description;
            
            $post->save();
            
        */
        Post::create([
            'title' => $title,
            'description' => $description,
            'user_id' => $post_creator,
        ]);

        return to_route('posts.index');
    }
    public function edit(Post $post)// = postId at table in database
    {
        $users = User::all();
        return view('posts.edit' , ['users' => $users, 'post' => $post]);
    }
    public function update($postId)
    {
        $title = request()->Title;
        $description = request()->Descrip;
        $post_creator = request()->PostCreator;
        #dd($title, $description, $post_creator);

        $singlePostFromDB = Post::find($postId);
        $singlePostFromDB->update([
            'title' => $title,
            'description' => $description,
            'user_id' => $post_creator,
        ]);

        return to_route('posts.show' , $postId);
    }
    public function destroy($postId)
    {
        #$title = request()->Title;
        #$description = request()->Descrip;
        #$post_creator = request()->PostCreator;
        #dd($title, $description, $post_creator);

        $singlePostFromDB = Post::find($postId);
        $singlePostFromDB->delete();


        return to_route('posts.index');
    }
}
