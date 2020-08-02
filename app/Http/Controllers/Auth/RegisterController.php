<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
	   // dd($data);
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255','min:3'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
			'mobine_no' => ['required','min:10'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
			'image' => 'required|image|mimes:jpg,jpeg',
        ],
		[ 'name.required' => 'The :attribute field can not be blank value.']
		
		);
		//echo "ok".dd($data);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
	//echo base_path() . '/public/upload/', $imageName;exit;
		$imageName = time() . '.' . $data['image']->getClientOriginalExtension();

				$data['image']->move(
				base_path() . '/public/upload/', $imageName
			);
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
			'mobine_no'=>$data['mobine_no'],
			'image' => $imageName,
            'password' => Hash::make($data['password']),
        ]);
    }
}
