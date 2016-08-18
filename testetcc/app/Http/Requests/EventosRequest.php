<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class EventosRequest extends Request
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
            'nomeeventos' => 'required',
            'valoreventos' => 'required',
            'arquivoeventos' => '',
            'datainicioeventos' => 'required',
            'dataterminoeventos' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',


        ];
    }
}
