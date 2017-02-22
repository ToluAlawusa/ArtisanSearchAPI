<?php
 
namespace App\Http\Controllers;
 
use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
 
class CategoryController extends Controller{

	public function showAllCategory(){
 
    	$category  = Category::all();
 
    	return response()->json($category);
 
	}

	public function showCategoryById($id){
        $category = Category::find($id);

        return response()->json($category);
    }

}