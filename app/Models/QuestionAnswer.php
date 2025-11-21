<?php

namespace App\Models;

use App\Traits\HasLocalization;
use Database\Factories\QuestionAnswerFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property string $question
 * @property string $answer
 */
class QuestionAnswer extends Model
{
    /** @use HasFactory<QuestionAnswerFactory> */
    use HasFactory, HasLocalization;

    protected $fillable = [
        'question_uz',
        'question_ru',
        'question_en',
        'answer_uz',
        'answer_ru',
        'answer_en',
    ];

    protected array $localized = ['question', 'answer'];
}
