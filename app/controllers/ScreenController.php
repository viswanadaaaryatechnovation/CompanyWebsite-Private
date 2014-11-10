<?php

class ScreenController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		if (Session::has('user_id')){
			$contacts = Screens::paginate(PAGINATION_LIMIT);
         	return View::make('secureadmin.screens.index', array('contacts'=>$contacts));
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
		return View::make('secureadmin.screens.create');
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
        	$validation = Validator::make($input, Screens::$rules);
        	if ($validation->passes())
        	{
				//$file = Input::file('file');
				$destinationPath = public_path().'/uploads/screens';
				$input['screen_image'] = date('ymdhis').'_'.Input::file('screen_image')->getClientOriginalName();
				$upload_success = Input::file('screen_image')->move($destinationPath, $input['screen_image']);
				$input['screen_icon'] = date('ymdhis').'_'.Input::file('screen_icon')->getClientOriginalName();
				$upload_success = date('ymdhis').'_'.Input::file('screen_icon')->move($destinationPath, $input['screen_icon']);
				
            	Screens::create($input);
            	return Redirect::route('secureadmin.screens.index');
        	}

        	return Redirect::route('secureadmin.screens.create')
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
		$screen = Screens::find($id);
        	if (is_null($screen))
        	{
            	return Redirect::route('secureadmin.screens.index');
        	}
        	return View::make('secureadmin.screens.edit', compact('screen'));
    
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
        $validation = Validator::make($input, Screens::$rules);
        if ($validation->passes())
        {
            $user = Screens::find($id);
            $user->update($input);
            return Redirect::route('secureadmin.screens.index');
        }
return Redirect::route('secureadmin.screens.edit', $id)
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
		
		Screens::find($id)->delete();
       	return Redirect::route('secureadmin.screens.index');
	}


}
