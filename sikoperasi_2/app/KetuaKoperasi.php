<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class KetuaKoperasi extends Model
{
	use SoftDeletes;

    protected $table='ketua_koperasis';

    public $timestamps=true;

    protected $dates=['deleted'];

    const CREATED_AT='created_at';

    const UPDATED_AT='updated_at';

    protected $fillable=['id_ket_koperasi','nama_ket_koperasi','alamat_ket_koperasi','no_hp_ket_koperasi','admins_id','transaksis_id'];

    public function admins(){
        return $this->hasOne('App\Admin');
    }

     public function transaksis(){
        return $this->hasMany('App\Transaksi');
    }
}
