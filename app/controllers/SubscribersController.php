<?php

class SubscribersController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		if (Session::has('user_id')){
			$subscribers = Subscribers::paginate(PAGINATION_LIMIT);
         	return View::make('secureadmin.subscribers.index', array('subscribers'=>$subscribers));
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
		return View::make('secureadmin.subscribers.create');
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
        	$validation = Validator::make($input, Subscribers::$rules);
        	if ($validation->passes())
        	{
            	Subscribers::create($input);
            	return Redirect::route('secureadmin.subscribers.index');
        	}

        	return Redirect::route('secureadmin.subscribers.create')
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
		$subscriber = Subscribers::find($id);
        	if (is_null($subscriber))
        	{
            	return Redirect::route('secureadmin.subscribers.index');
        	}
        	return View::make('secureadmin.subscribers.edit', compact('subscriber'));
    
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
        $validation = Validator::make($input, Subscribers::$rules);
        if ($validation->passes())
        {
            $user = Subscribers::find($id);
            $user->update($input);
            return Redirect::route('secureadmin.subscribers.index');
        }
return Redirect::route('secureadmin.subscribers.edit', $id)
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
		
		Subscribers::find($id)->delete();
       	return Redirect::route('secureadmin.subscribers.index');
	}



}
