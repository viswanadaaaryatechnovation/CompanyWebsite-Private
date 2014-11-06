<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Metafields extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'metafields';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');
protected $guarded = array('id');
protected $fillable = array('page_id', 'name', 'content','ip_address');

  public static $rules = array(
  	'page_id'	=>	'required',
    'name' => 'required|min:2',
    'content' => 'required|min:2'
  );
  
  public function pages()
  {
    return $this->hasMany('Pages');
  }
  

}
