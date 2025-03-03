<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return response()->json(Post::all());
    }

    public function store(Request $request)
    {
        $post = Post::create($request->all());
        return response()->json($post, 201);
    }

    public function show(Post $post)
    {
        return response()->json($post);
    }

    public function update(Request $request, Post $post)
    {
        $post->update($request->all());
        return response()->json($post);
    }

    public function destroy(Post $post)
    {
        // $post->delete();
        // return response()->json(null, 204);
        $deletedPost = $post; // Store the deleted post data
        $post->delete(); // Delete the post

        return response()->json([
            'message' => 'Post deleted successfully',
            'deleted_post' => $deletedPost
        ], 200);
    }
}
