<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
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
            'user_id'=>'required',
            'group_id'=>'required',
            'name'=>'required|string|max:15',
            'password'=>'required|min:6',
            'mobile'=>'required|numeric|unique:users',
            'email'=>'nullable|email|unique:users'
        ];
    }
}
