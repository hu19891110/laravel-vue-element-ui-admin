<?php
namespace App\Facades;
use Illuminate\Support\Facades\Facade;

class AdminUserFacade extends Facade
{
    /**
     * @return string
     */
	protected static function getFacadeAccessor(){
		return 'AdminUser';
	}
}