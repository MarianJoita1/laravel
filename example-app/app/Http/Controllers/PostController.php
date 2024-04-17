<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class PostController extends Controller
{
    //show all posts
    public function index() {
        return view('posts.index', [
            'heading' => 'Latest posts',
            'posts' => Posts::latest()->filter(request(['tag', 'search']))->paginate(6)
        ]);
    }

    //show single post
    public function show(Posts $post) {
        return view('posts.show', [
            'post' => $post 
         ]);
    }

    public function create() {
        return view('posts.create');
    }

    public function store(Request $request) {
        $formFields = $request->validate([
            'title' => 'required',
            'company' => ['required', Rule::unique('posts', 'company')],
            'location' => 'required',
            'website' => 'required',
            'email' => ['email', 'required'],
            'tags' => 'required',
            'description' => 'required'
        ]);
        if($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        $formFields['user_id'] = auth()->id();
        
        Posts::create($formFields);

        return redirect('/')->with('message', 'Post Created!');
    }

    public function edit(Posts $post) {
        return view('posts.edit', ['post' => $post]);
    }

    public function update(Request $request, Posts $post) {

        //check if it's owner
        if($post->user_id != auth()->id()) {
            abort(403, 'Unauthorized action');
        }

        $formFields = $request->validate([
            'title' => 'required',
            'company' => 'required',
            'location' => 'required',
            'website' => 'required',
            'email' => ['email', 'required'],
            'tags' => 'required',
            'description' => 'required'
        ]);

        if($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        $post->update($formFields);

        return back()->with('message', 'Post updated!');
    }

    public function delete(Posts $post) {
        if($post->user_id != auth()->id()) {
            abort(403, 'Unauthorized action');
        }
        $post->delete();
        return redirect('/')->with('message', 'Post deleted!');
    }

    public function manage() {
        return view('posts.manage', ['posts' => auth()->user()->posts()->get()]);
    }
}
