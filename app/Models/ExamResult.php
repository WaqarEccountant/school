<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamResult extends Model
{

    use HasFactory;

    protected $fillable = ['exam_id', 'subject_id', 'user_id', 'total', 'marks', 'wrong', 'missed'];

    protected $casts = [
        'total'  => 'float',
        'marks'  => 'float',
        'wrong'  => 'float',
        'missed' => 'float',
    ];

    public function user () {
        return $this->belongsTo(User::class);
    }

    public function subject () {
        return $this->belongsTo(Subject::class);
    }


}
