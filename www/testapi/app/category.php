<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model 
{
  # eloquent needs u to define ur preferred table name and primary key for overide
  protected $table = 'categories';
  protected $primaryKey = 'category_id';
  protected $fillable = ['category_name'];

}