<?php

namespace App\Models;

use Database\Factories\QuestionAnswerFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionAnswer extends Model
{
    /** @use HasFactory<QuestionAnswerFactory> */
    use HasFactory;

//    protected $table = 'question_answers';

    protected $fillable = [
        'question_uz',
        'question_ru',
        'question_en',
        'answer_uz',
        'answer_ru',
        'answer_en',
    ];
}
