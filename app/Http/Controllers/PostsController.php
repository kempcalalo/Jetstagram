<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class PostsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $users = auth()->user()->following()->pluck('profiles.user_id');

        $posts = Post::whereIn('user_id', $users)->with('user')->latest()->paginate(5);

        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        $data = request()->validate([
            'caption' => 'required',
            'image' => ['required', 'image'],
        ]);

        $image = request('image');
        $extension = $image->getClientOriginalExtension();
        $filename = md5(time()).'_'.$image->getClientOriginalName();
        $imageStream = Image::make($image)->fit(1000, 1000)->encode($extension);

        Storage::disk('s3')->put('/posts/'.$filename, (string)$imageStream, 'public');

        auth()->user()->posts()->create([
            'caption' => $data['caption'],
            'image' => $filename,
        ]);

        return redirect('/profile/' . auth()->user()->id);
    }

    public function show(\App\Post $post)
    {
        return view('posts.show', compact('post'));
    }
}
