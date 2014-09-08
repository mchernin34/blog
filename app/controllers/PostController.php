<?php

class PostController extends \BaseController {

	public function show() {
		$post = new StdClass();
		$post->title = 'My post title';

		return View::make('post.show')->with('post', $post);
	}

}
