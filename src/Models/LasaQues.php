<?php
namespace Edgewizz\Lasa\Models;

use Illuminate\Database\Eloquent\Model;

class LasaQues extends Model{
    public function answers(){
        return $this->hasMany('Edgewizz\Lasa\Models\LasaAns', 'question_id');
    }
    protected $table = 'fmt_lasa_ques';
}