<?php

namespace App\Http\Controllers\Request;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class PostRequest extends FormRequest
{
    
    
    public function rules()
    {
        return [
       'post.title' =>'required|string',
       'post.body' =>'required|string',
        ];
    }
}
