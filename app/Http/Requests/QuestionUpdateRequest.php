<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuestionUpdateRequest extends FormRequest
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
            'questions'=>'required|min:3',
            'image'=>'image|nullable|max:1024|mimes:jpg,jpeg,png',
            'answer1'=>'required|min:1',
            'answer2'=>'required|min:1',
            'answer3'=>'required|min:1',
            'answer4'=>'required|min:1',
            'correct_answer'=>'required|min:1'


        ];
    }

     public function attributes()
    {
        return [
            'questions'=>'soru',
            'image'=>'soru fotoğrafı',
            'answer1'=>'1.Soru',
            'answer2'=>'2.Soru',
            'answer3'=>'3.Soru',
            'answer4'=>'4.Soru',
            'correct_answer'=>'Cevap'


        ];
    }
}
