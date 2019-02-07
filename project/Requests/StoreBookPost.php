<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StoreBookPost extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if(Auth::guest()){
            return false;
        }else{
            return true;
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'          => 'required|string|max:256',
            'pages'         => 'required|numeric|min:0',
            'ISBN'          => 'required|string|size:10',
            'price'         => 'required|integer',
            'published_at'         => 'required|date',
            ];
    }
}
