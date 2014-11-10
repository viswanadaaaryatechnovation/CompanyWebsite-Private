<?php

class contactUsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		if (Session::has('user_id')){
			$contacts = ContactUs::paginate(PAGINATION_LIMIT);
         	return View::make('secureadmin.contactus.index', array('contacts'=>$contacts));
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
		return View::make('secureadmin.contactus.create');
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
        	$validation = Validator::make($input, ContactUs::$rules);
        	if ($validation->passes())
        	{
            	ContactUs::create($input);
            	return Redirect::route('secureadmin.contactus.index');
        	}

        	return Redirect::route('secureadmin.contactus.create')
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
		$contact = ContactUs::find($id);
        	if (is_null($contact))
        	{
            	return Redirect::route('secureadmin.contactus.index');
        	}
        	return View::make('secureadmin.contactus.edit', compact('contact'));
    
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
        $validation = Validator::make($input, ContactUs::$rules);
        if ($validation->passes())
        {
            $user = ContactUs::find($id);
            $user->update($input);
            return Redirect::route('secureadmin.contactus.index');
        }
return Redirect::route('secureadmin.contactus.edit', $id)
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
		
		ContactUs::find($id)->delete();
       	return Redirect::route('secureadmin.contactus.index');
	}


}
