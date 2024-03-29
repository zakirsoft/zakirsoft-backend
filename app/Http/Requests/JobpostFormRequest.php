<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JobpostFormRequest extends FormRequest
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
        if ($this->method() == "POST") {
            return [
                'title' => 'required|unique:jobposts,title',
                'type' => 'required',
                'short_description' => 'required',
                'long_description' => 'required',
                'link' => 'required',
                'deadline' => 'required',
            ];
        }else{
            return [
                'title' => "required|unique:jobposts,title,{$this->post->id}",
                'type' => 'required',
                'short_description' => 'required',
                'long_description' => 'required',
                'link' => 'required',
                'deadline' => 'required',
            ];
        }
    }
}
