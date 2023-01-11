<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveProjectRequest extends FormRequest
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
            'title' => 'required',
            'url' => 'required',
            'image' => [
                $this->route('project') ? 'nullable' : 'required',
            'image',//jpeg, png, mbp, gif, svg o webp
           // 'dimensions:width=600,height=400',
        ],
            'description' => 'required', 
        ];
    }
    public function messages()
    {
      return[
          'title.required' => 'El proyecto necesita un titulo'

      ];
    }
}
