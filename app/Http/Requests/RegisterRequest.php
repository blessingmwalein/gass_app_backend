<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\User;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|min:4',
            'email' => 'required|email',
             'phone' => 'required|regex:/[0-9]{10}/|digits:10',
            'password' => 'required|min:8',
        ];
    }

    public function register(){

        $user = User::create([
            'name'=>$this->name,
            'email'=>$this->email,
            'phone'=>$this->phone,
            'password'=>bcrypt($this->password)
        ]);

        $token  = $user->createToken('GasApplication')->accessToken;

      
          return response()->json(['token'=>$token], 200);
       

    }
 
}