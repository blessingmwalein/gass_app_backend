<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
           
            // 'email' => 'required|email',
             'phone' => 'required|regex:/[0-9]{10}/|digits:10',
            'password' => 'required|min:8',
        ];
    }
    public function login(){

        $data= [
            'phone'=>$this->phone,
            'password'=>$this->password
        ];

        if(auth()->attempt($data)){
            $token = auth()->user()->createToken('GasApplication')->accessToken;

            return response()->json(['token' =>$token, 'user'=>auth()->user()], 200);
        }else{
            return response()->json(['error'=>'Unauthorised'], 401);
        }
    }
}
                                                  