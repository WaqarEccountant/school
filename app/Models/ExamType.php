<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamType extends Model
{

    use HasFactory;

    protected $primaryKey = 'id';
    protected $fillable = ['name', 'created_by'];

    public function isOwner ($user_id) {
        return $this->created_by == $user_id;
    }

    public static function getAll () {
        return self::get();
    }

    public static function addUpdate ($data, $user_id, $id = null) {
        if ($id) {
            return self::where('id', $id)->update([
                'name' => $data['name']
            ]);
        }
        return self::create([
            'name'       => $data['name'],
            'created_by' => $user_id,
        ]);
    }


}
