<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
	/**
	 * Display a listing of the resource.
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 */
	public function store(Request $request)
	{
		try {


			$credentials = $request->only('post','comment');
			$user = Auth::user();
			$user = $user['id'];
			$post = $credentials['post'];
			$msg = $credentials['comment'];
			dump($post,$user,$msg);


			$comment = new Comment([
				'comment' => $msg,
				'user_id' => $user,
				'post_id' => $post,
			]);
			$comment->save();

			return redirect('/aviso');


		} catch (\Throwable $th) {
			echo throw $th;
		}
	}

	/**
	 * Display the specified resource.
	 */
	public function show(comment $comment)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 */
	public function edit(comment $comment)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 */
	public function update(Request $request, comment $comment)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 */
	public function destroy(comment $comment)
	{
		//
	}
}
