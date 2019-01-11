<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Simpanan extends Model
{
    use SoftDeletes;

    protected $table='simpanans';

    public $timestamps=true;

    protected $dates=['deleted'];

    const CREATED_AT='created_at';

    const UPDATED_AT='updated_at';

    protected $fillable=['kd_simpanan','jenis_simpanan','tgl_simpanan','jml_simpanan'];

    public function anggotas(){
        return $this->hasMany('App\Anggota');
    }

     public function anggotas_has_simpanans(){
        return $this->hasOne('App\AnggotaHasSimpanan');
    }

    public function admins(){
        return $this->belongsTo('App\Admin');
    }

    public function transaksis(){
        return $this->belongsTo('App\Transaksi');
    }
}
