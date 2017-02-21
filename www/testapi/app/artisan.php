<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;

class Artisan extends Model implements \Illuminate\Contracts\Auth\Authenticatable
{
	use Authenticatable;

	protected $table = 'artisans';
	protected $primaryKey = "artisan_id";
 	protected $fillable = ['category_id', 'firstname', 'lastname', 'phone', 'email', 'username', 'password', 'address', 'summary'];

}