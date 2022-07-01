<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    function showPost($id) {
        if (!is_numeric($id)) {
            return redirect()->route('notfound');
        }
        $post = Post::find(intval($id));
        if (!$post) {
            return redirect()->route('notfound');
        }
        return view('view_post', compact('post'));
    }
    function showCreate() {
        return view('create_post');
    }
    function createPost(Request $request) {
        // Name, description, post, body, image, topic
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'post' => 'required',
        ]);
        $post = new Post;
        $post->title = $request->name;
        $post->description = $request->description;
        $post->body = $request->post;
        $post->main_image = "testing";
        $post->topic_id = 1;
        $post->user_id = 1;
        $post->save();

        return $request;
    }

}
