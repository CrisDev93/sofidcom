<?php namespace App\Services;

use App\User;
use Validator;
use Illuminate\Contracts\Auth\Registrar as RegistrarContract;

class Registrar implements RegistrarContract {

	/**
	 * Get a validator for an incoming registration request.
	 *
	 * @param  array  $data
	 * @return \Illuminate\Contracts\Validation\Validator
	 */
	public function validator(array $data)
	{
		return Validator::make($data, [
			
			'nombre' => 'required|max:255',
			'apellidos' => 'required|max:255',
			'edad' => 'required|max:3',
			'profesion' => 'required|max:255',
			'pais' => 'required|max:255',
			'email' => 'required|email|max:255|unique:usuarios',
			'password' => 'required|confirmed|min:6',
		]);
	}

	/**
	 * Create a new user instance after a valid registration.
	 *
	 * @param  array  $data
	 * @return User
	 */
	public function create(array $data)
	{
		return User::create([
			'nombre' => $data['nombre'],
			'apellidos' => $data['apellidos'],
			'edad' => $data['edad'],
			'profesion' => $data['profesion'],
			'pais' => $data['pais'],
			'email' => $data['email'],
			'password' => bcrypt($data['password']),
		]);
	}

}
