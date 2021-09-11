<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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


            
'product_id'=>'required',
'category_id'=>'required',
'title'=>'string|required',
'description'=>'text|required',
'cost_price'=>'required',
'price'=>'required'



        ];
    }
}
