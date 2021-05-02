<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{

    use HasFactory;

    protected $primaryKey = 'id';
    protected $fillable = ['topic', 'time', 'title', 'fee', 'subject_id', 'type_id', 'created_by'];

    protected $casts = [
        'time' => 'float',
        'fee'  => 'float',
    ];

    public function subject () {
        return $this->belongsTo(Subject::class);
    }

    public function type () {
        return $this->belongsTo(ExamType::class);
    }

    public function questions () {
        return $this->hasMany(Question::class);
    }

    public function isOwner ($user_id) {
        return $this->created_by == $user_id;
    }

    public static function getAll ($user_id = null) {
        if ($user_id) {
            return self::select('exams.*', 'subjects.name as subject_name', 'exam_types.name as type_name')
                       ->leftJoin('subjects', 'subjects.id', 'exams.subject_id')
                       ->leftJoin('exam_types', 'exam_types.id', 'exams.type_id')
                       ->where('exams.created_by', $user_id)->get();
        }
        return self::get();
    }

    public static function addUpdate ($data, $user_id, $id = null) {
        if ($id) {
            return self::where('id', $id)->update([
                'title'      => $data['title'],
                'topic'      => $data['topic'],
                'time'       => $data['time'],
                'subject_id' => $data['subject_id'],
                'type_id'    => $data['type_id'],
                'fee'        => $data['fee'],
            ]);
        }
        return self::create([
            'title'      => $data['title'],
            'topic'      => $data['topic'],
            'time'       => $data['time'],
            'subject_id' => $data['subject_id'],
            'type_id'    => $data['type_id'],
            'fee'        => $data['fee'],
            'created_by' => $user_id,
        ]);
    }

    public static function getWith ($id) {
        return self::with(['subject', 'type'])->findOrFail($id);
    }


}
