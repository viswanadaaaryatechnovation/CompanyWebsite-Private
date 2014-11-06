<?php

class admincontroller extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		if (Session::has('user_id')){
			$users = User::paginate(4);
        	return View::make('secureadmin.index', array('users'=>$users));
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
		return View::make('secureadmin.create');
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
        	$validation = Validator::make($input, User::$rules);
        	if ($validation->passes())
        	{
            	User::create($input);
            	return Redirect::route('secureadmin.index');
        	}

        	return Redirect::route('secureadmin.create')
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
		$user = User::find($id);
        	if (is_null($user))
        	{
            	return Redirect::route('secureadmin.index');
        	}
        	return View::make('secureadmin.edit', compact('user'));
    
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
        $validation = Validator::make($input, User::$rules);
        if ($validation->passes())
        {
            $user = User::find($id);
            $user->update($input);
            return Redirect::route('secureadmin.index');
        }
return Redirect::route('secureadmin.edit', $id)
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
		User::find($id)->delete();
        	return Redirect::route('secureadmin.index');
		
	}
	public function login()
	{
			$input = Input::all();
			$validation = Validator::make($input, User::$loginRules);
			$user = User::whereRaw('username LIKE ? AND password LIKE ?',array($input['username'],$input['password']))->get();
			if ($validation->passes() && count($user) > 0)
        	{
					Session::put('user_id', $user[0]['id']);
					return Redirect::route('secureadmin.index');
			}else{
				return Redirect::route('secureadmin.index')
            	->withInput()
				->withErrors($validation)
            	->with('message', 'There were validation errors.');
			}
			
		
	}
	public function logout(){
		Session::flush();
		return Redirect::route('secureadmin.index');
	}

}
