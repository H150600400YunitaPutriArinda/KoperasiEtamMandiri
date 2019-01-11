<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pinjaman extends Model
{
    use SoftDeletes;

    protected $table='pinjamans';

    public $timestamps=true;

    protected $dates=['deleted'];

    const CREATED_AT='created_at';

    const UPDATED_AT='updated_at';

    protected $fillable=['kd_pinjaman','jangka_waktu_pinjaman','tgl_pinjaman','jml_pinjaman_dan_bunga_pinjaman'];

    public function anggotas(){
        return $this->hasMany('App\Anggota');
    }

     public function anggotas_has_pinjamans(){
        return $this->hasOne('App\AnggotaHasPinjaman');
    }

    public function admins(){
        return $this->belongsTo('App\Admin');
    }

    public function transaksis(){
        return $this->belongsTo('App\Transaksi');
    }
}
