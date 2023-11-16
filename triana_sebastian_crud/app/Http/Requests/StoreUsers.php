<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUsers extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "doc_type" => "required",
            "doc_num" => "required|min:7",
            "name" => "required|min:3|max:255",
            "last_name" => "required|min:3|max:255",
            "phone" => "required|min:10",
            "user_name" => "required|unique:users,user_name",
            "email" => "required|unique:users,email|min:8|email",
            "password" => "required",
            "role_id" => "required"
        ];
    }
}
