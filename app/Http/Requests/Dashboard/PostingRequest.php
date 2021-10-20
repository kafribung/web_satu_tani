<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;

class PostingRequest extends FormRequest
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
            'img_1' => [ (isset($this->product) ? '' :'required') ,'image', 'max:2048'],
            'img_2' => [ (isset($this->product) ? '' :'required') ,'image', 'max:2048'],
            'img_3' => [ (isset($this->product) ? '' :'required') ,'image', 'max:2048'],
            'img_4' => [ (isset($this->product) ? '' :'required') ,'image', 'max:2048'],
            'img_5' => [ (isset($this->product) ? '' :'required') ,'image', 'max:2048'],

            'name'          => ['required', 'string', 'min:5', 'max:30'],
            'description'   => ['required'],
            'harvest_time'  => ['required','date'],
            'price'         => ['required','numeric'],
            'stock'         => ['required','integer', 'between:1,20'],
            'discount'      => ['numeric'],
        ];
    }
}
