<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class OperatorRequest extends Request
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
                'title' => 'required|unique_with:operators,country_id',
                'operator_image' => 'required|mimes:jpeg,jpg,png',
                'operator_code' => 'required|numeric|digits_between:1,6|unique_with:operators,country_id',
                'country_id' => 'required'
                ];
            }
            case 'PUT':
            case 'PATCH':
            {
                return [
                'title' => 'required',
                'operator_code' => 'required|numeric|digits_between:1,6|unique_with:operators,country_id',
                ];
            }
        }
    }
}
