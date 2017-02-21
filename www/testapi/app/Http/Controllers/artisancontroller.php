<?php
 
namespace App\Http\Controllers;
 
use App\Artisan;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
 
class ArtisanController extends Controller{

	public function createArtisan(Request $request){
 
    	$artisan = Artisan::create($request->all());
 
    	return response()->json($artisan);

    }

}