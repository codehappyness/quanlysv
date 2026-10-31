<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SinhVien extends Model
{
    //
    protected $table = "SinhVien";
    public $timestamps = false;

    public function nganh(){
        return $this->belongsTo(Nganh::class, "ID_NGANH", "ID");
    }
}
