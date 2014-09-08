<?php

class PostController extends \BaseController {

	// list all posts
	public function listing() {
		return View::make('post.listing');
	}

	// view single post
	public function single($id) {
		return View::make('post.single')->with('id', $id);
	}

	

}
