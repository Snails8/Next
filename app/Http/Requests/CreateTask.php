<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateTask extends FormRequest
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
            'title' => 'required|max:20',
            'status' => 'required',
            'message' => 'required|max:1000',
        ];
    }
    public function attributes()
    {
        return [
            'title' => 'タイトル',
            'status' => '状態',
            'message' => '詳細',
        ];
    }
    public function messages()
    {
        return [

        ];
    }


}
