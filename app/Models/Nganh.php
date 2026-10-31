<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nganh extends Model
{
    //
    protected $table = 'Nganh';
    public $timestamps = false;

    public function sinhvien(){
        return $this->hasMany(SinhVien::class, "ID_NGANH", "ID");
    }
}
