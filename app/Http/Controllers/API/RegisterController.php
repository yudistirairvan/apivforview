<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\API\BaseController as BaseController;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class RegisterController extends BaseController
{
   /**
     * Register Api
     *
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request){
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'c_password' => 'required|same:password',
        ]);
        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors());
        }
        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $input['hak_akses'] = 'user_basic';
        $user = User::create($input);
        $success['token'] = $user->createToken('MyApp')->accessToken;
        $success['name'] = $user->name;
        return $this->sendResponse($success, 'User register successfully.');
    }
    /**
     * Login Api
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request){
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user   = Auth::user();
            $success['token'] = $user->createToken('MyApp')-> accessToken;
            $success['name'] = $user->name;

            return $this->sendResponse($success, 'User Login successfully');

        }
        else{
            return $this->sendError('Unautorised.', ['error'=>'Unautorised']);
        }

    }

}
