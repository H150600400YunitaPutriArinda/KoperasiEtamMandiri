<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Anggota extends Model
{
    use SoftDeletes;

    protected $table='anggotas';

    public $timestamps=true;

    protected $dates=['deleted'];

    const CREATED_AT='created_at';

    const UPDATED_AT='updated_at';

    protected $fillable=['id_anggota','nama_anggota','alamat_anggota','no_hp_anggota'];

    public function admins(){
        return $this->belongsTo('App\Admin');
    }

    public function anggotas_has_simpanans(){
        return $this->hasOne('App\AnggotaHasSimpanan');
    }

    public function simpanans(){
        return $this->hasMany('App\Simpanan');
    }

    public function anggotas_has_pinjamans(){
        return $this->hasOne('App\AnggotaHasPinjaman');
    }

    public function pinjamans(){
        return $this->hasMany('App\Pinjaman');
    }

    public function anggotas_has_transaksis(){
        return $this->hasOne('App\AnggotaHasTransaksi');
    }

    public function transaksis(){
        return $this->hasMany('App\Transaksi');
    }
}
