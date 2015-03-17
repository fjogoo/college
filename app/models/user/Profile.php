<?php
/**
 * Created by PhpStorm.
 * User: john
 * Date: 8/14/14
 * Time: 10:53 PM
 */
use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Profile extends Eloquent implements UserInterface, RemindableInterface {

    use UserTrait, RemindableTrait;
    protected $table='profile';
    public $timestamps = false;

    public function slogin()
    {
        return  $this->hasMany('Slogin','u_id');
    }


}
