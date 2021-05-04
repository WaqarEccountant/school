<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{

    use HasFactory;

    protected $primaryKey = 'id';
    protected $fillable = ['body', 'type', 'answer', 'option_id', 'exam_id', 'q_image', 'a_image'];

    public function options () {
        return $this->hasMany(Option::class);
    }

    public static function addUpdate ($data, $exam_id, $id = null) {
        if ($id) {
            return self::where('id', $id)->update([
                'exam_id' => $exam_id,
                'body'    => $data['body'],
                'type'    => $data['type'],
                'answer'  => $data['answer'],
            ]);
        }
        return self::create([
            'exam_id'   => $exam_id,
            'body'      => $data['body'],
            'type'      => $data['type'],
            'answer'    => $data['answer'],
            'option_id' => 0,
        ]);
    }


}
