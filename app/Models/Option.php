<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Option extends Model
{

    use HasFactory;

    protected $primaryKey = 'id';
    protected $fillable = ['body', 'question_id'];


    public static function addUpdate ($data, $q_id, $id = null) {
        if ($id) {
            return self::where('id', $id)->update([
                'body' => $data['body'],
            ]);
        }
        return self::create([
            'body'        => $data['body'],
            'question_id' => $q_id
        ]);
    }


}
