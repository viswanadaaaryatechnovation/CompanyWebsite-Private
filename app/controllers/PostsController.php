<?php

class PostsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		if (Session::has('user_id')){
			$posts = Posts::paginate(PAGINATION_LIMIT);
         	return View::make('secureadmin.posts.index', array('posts'=>$posts));
		}else{
			return View::make('secureadmin.login');
		}
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('secureadmin.posts.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$input['ip_address'] = Request::getClientIp();
		$validation = Validator::make($input, Posts::$rules);
		if ($validation->passes())
		{
			Posts::create($input);
			return Redirect::route('secureadmin.posts.index');
		}

		return Redirect::route('secureadmin.posts.create')
		->withInput()
		->withErrors($validation)
		->with('message', 'There were validation errors.');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$post = Posts::find($id);
		if (is_null($post))
		{
			return Redirect::route('secureadmin.posts.index');
		}
		return View::make('secureadmin.posts.edit', compact('post'));
    
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$input = Input::all();
		$input['ip_address'] = Request::getClientIp();
        $validation = Validator::make($input, Posts::$rules);
        if ($validation->passes())
        {
            $post = Posts::find($id);
            $post->update($input);
            return Redirect::route('secureadmin.posts.index');
        }
		return Redirect::route('secureadmin.posts.edit', $id)
            ->withInput()
            ->withErrors($validation)
            ->with('message', 'There were validation errors.');
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Posts::find($id)->delete();
       	return Redirect::route('secureadmin.posts.index');
	}


}
