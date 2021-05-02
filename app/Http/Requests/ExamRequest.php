<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ExamRequest extends FormRequest
{

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize () {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules () {
        return [
            'title'      => "required|string|min:2",
            'topic'      => "required|string|min:2",
            'time'       => "required|numeric|min:1",
            'subject_id' => "required|numeric",
            'type_id'    => "required|numeric",
        ];
    }


}
