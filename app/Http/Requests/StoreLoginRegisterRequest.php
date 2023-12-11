<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Http\FormRequest;

class StoreLoginRegisterRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        $route = Route::current();
        if($route->getName() == 'auth.customer.login-register-store')
        {
            return [
                'id' => 'required|min:11|max:128|regex:/^[a-zA-Z0-9_.@\+]*$/',
            ];
        }elseif($route->getName() == 'auth.customer.login-confirm-store')
        {
            return [
                'otp' => 'required|min:6|max:6',
            ];
        }
    }

    public function attributes()
    {
        return [
            'id' => 'ایمیل یا شماره موبایل',
            'otp' => 'کد تایید',
        ];
    }
}
