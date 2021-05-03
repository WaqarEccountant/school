<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{

    use HasFactory;

    protected $primaryKey = 'id';
    protected $fillable = ['name', 'type_id', 'created_by'];

    public function exams () {
        return $this->hasMany(Exam::class);
    }

    public function isOwner ($user_id) {
        return $this->created_by == $user_id;
    }

    public static function getAll () {
        return self::selectRaw('subjects.*, exam_types.name as type_name')->leftJoin('exam_types','exam_types.id','subjects.type_id')->get();
    }

    public static function addUpdate ($data, $user_id, $id = null) {
        if ($id) {
            return self::where('id', $id)->update([
                'name'    => $data['name'],
                'type_id' => $data['type_id']
            ]);
        }
        return self::create([
            'name'       => $data['name'],
            'type_id'    => $data['type_id'],
            'created_by' => $user_id,
        ]);
    }


}
