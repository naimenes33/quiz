<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $guarded=[];
    protected $appends = ['true_percent'];
    

    public function getTruePercentAttribute(){
           $answers_count = $this->answers()->count();
           $true_answer = $this->answers()->where('answer',$this->correct_answer)->count();

          return round((100/$answers_count)*$true_answer);
    }

    public function answers(){
        return $this->hasMany('App\Models\Answer');
    }

    public function my_answer(){
        return $this->hasOne('App\Models\Answer')->where('user_id',auth()->user()->id);
    }
}
