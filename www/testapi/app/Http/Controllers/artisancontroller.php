<?php
 
namespace App\Http\Controllers;
 
use App\Artisan;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
 
class ArtisanController extends Controller{

	public function createArtisan(Request $request){
 
    	// $artisan = Artisan::create($request->all());
 
    	// return response()->json($artisan);

    	$artisan  = Artisan::create();
    	$artisan->category_id = $request->input('category_id');
    	$artisan->firstname = $request->input('firstname');
    	$artisan->lastname = $request->input('lastname');
    	$artisan->phone = $request->input('phone');
    	$artisan->email = $request->input('email');
    	$artisan->username = $request->input('username');
    	$artisan->password = encrypt($request->input('password'));
    	$artisan->address = $request->input('address');
    	$artisan->summary = $request->input('summary');
    	$artisan->save();
 
    	return response()->json($artisan);

    }

    public function updateArtisan(Request $request, $id){

    	$artisan  = Artisan::find($id);
    	$artisan->category_id = $request->input('category_id');
    	$artisan->firstname = $request->input('firstname');
    	$artisan->lastname = $request->input('lastname');
    	$artisan->phone = $request->input('phone');
    	$artisan->email = $request->input('email');
    	$artisan->username = $request->input('username');
    	$artisan->password = encrypt($request->input('password'));
    	$artisan->address = $request->input('address');
    	$artisan->summary = $request->input('summary');
    	$artisan->save();
 
    	return response()->json($artisan);

    }

}