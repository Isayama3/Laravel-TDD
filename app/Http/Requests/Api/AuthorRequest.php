<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;

class AuthorRequest extends FormRequest
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
        switch ($this->method()) {
            case 'GET':
            case 'DELETE':{
                    return [];
                }
            case 'POST':{
                    return [
						'name' => 'required',
						'age' => 'required',
						'email' => 'email',
						'phone' => 'required|max:255',
						'password' => 'required|max:255|password',
                    ];
                }
            case 'PUT':{
                    return [
						'name' => 'required',
						'age' => 'required',
						'email' => 'email',
						'phone' => 'required|max:255',
						'password' => 'required|max:255|password',
                    ];
                }
        }
    }

    public function messages()
    {
        return [
            
        ];
    }
}
