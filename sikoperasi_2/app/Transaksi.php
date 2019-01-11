<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaksi extends Model
{
    use SoftDeletes;

    protected $table='transaksis';

    public $timestamps=true;

    protected $dates=['deleted'];

    const CREATED_AT='created_at';

    const UPDATED_AT='updated_at';

    protected $fillable=['kd_transaksi','jenis_pembayaran','tgl_pembayaran','jml_pembayaran_dan_bunga_pinjaman','id_anggota','nama_anggota','id_ket_koperasi','nama_ket_koperasi','kd_simpanan','jenis_simpanan','tgl_simpanan','jml_simpanan','kd_pinjaman','jangka_waktu_pinjaman','tgl_pinjaman','jml_pinjaman_dan_bunga_pinjaman','simpanans_id','pinjamans_id'];

    public function anggotas(){
        return $this->hasMany('App\Anggota');
    }

     public function anggotas_has_transaksis(){
        return $this->hasOne('App\AnggotaHasTransaksi');
    }

    public function admins(){
        return $this->belongsTo('App\Admin');
    }

    public function simpanans(){
        return $this->hasMany('App\Simpanan');
    }

    public function pinjamans(){
        return $this->hasMany('App\Pinjaman');
    }
}
