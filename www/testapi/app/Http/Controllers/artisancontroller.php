<?php
 
namespace App\Http\Controllers;
 
use App\Artisan;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
 
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

    public function doArtisanLogin(Request $request) {

       $this->validate($request, [
                'email' => 'required|email',
                'password' => 'required',
            ]);
            
        try {
            if (! $token = $this->jwt->attempt($request->only('email', 'password'))) {
                return response()->json(['user_not_found'], 404);
            }
        } catch (TokenExpiredException $e) {
            return response()->json(['token_expired'], $e->getStatusCode());
        } catch (TokenInvalidException $e) {
            return response()->json(['token_invalid'], $e->getStatusCode());
        } catch (JWTException $e) {
            return response()->json(['token_absent' => $e->getMessage()], $e->getStatusCode());
        }

        return response()->json(compact('token'));
    }

    public function showAllArtisan(){
 
    	$artisan  = Artisan::all();
 
    	return response()->json($artisan);
 
	}

	public function showArtisanById($id){
        $artisan = Artisan::find($id);

        return response()->json($artisan);
    }

    public function getArtisanByCategoryId($id) {
  		$artisan = Artisan::where("category_id", '=', $id)->get();

  		return response()->json($artisan);
    }


}