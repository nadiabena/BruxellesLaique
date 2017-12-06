<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UploadRequest extends FormRequest{
    /**
     * Determine if the user is authorized to make this request.
     * true ==>  otherwise we would get “unauthorized action” on submit!
     * @return bool
     */

    //public $id;
    
    public function authorize(){
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     * 2000 ==> says that may not be greater than 2000 kilobytes. required|image|mimes:jpeg,bmp,png,pdf|size:2000
     * @return array
     */
    public function rules(){
        return [
            'intitule' => 'required',
            'documents' => 'required'
        ];
    }
}
