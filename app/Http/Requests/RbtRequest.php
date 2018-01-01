<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class RbtRequest extends Request
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
        switch ($this->method())
        {
            case 'GET':
            case 'DELETE':
            {
                return [] ;
            }
            case 'POST':
            {
                
                return [
                'category_id' => 'required',
                'rbt_code' => 'required|numeric|digits_between:1,10',
                'operator_id' => 'required',
                'published' => 'required',
                'free' => 'required'
                ];
            }
            case 'PUT':
            case 'PATCH':
            {
                return [
                'rbt_code' => 'required|numeric|digits_between:1,10',
                ];
            }
        }
    }
}
