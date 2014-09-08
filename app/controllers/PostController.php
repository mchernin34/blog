<?php

class PostController extends \BaseController {

	// list all posts
	public function listing() {
		return View::make('post.listing');
	}

	// view single post
	public function single() {
		return View::make('post.single');
	}

}
