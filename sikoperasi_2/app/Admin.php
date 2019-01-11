<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Admin extends Model
{
    use SoftDeletes;

    protected $table='admins';

    public $timestamps=true;

    protected $dates=['deleted'];

    const CREATED_AT='created_at';

    const UPDATED_AT='updated_at';

    protected $fillable=['id_admin','username','password','level_user','anggotas_id','simpanans_id','pinjamans_id','transaksis_id'];

    public function anggotas(){
        return $this->hasMany('App\Anggota');
    }

    public function ketua_koperasis(){
        return $this->hasOne('App\KetuaKoperasi');
    }

    public function simpanans(){
        return $this->hasMany('App\Simpanan');
    }

    public function pinjamans(){
        return $this->hasMany('App\Pinjaman');
    }

    public function transaksis(){
        return $this->hasMany('App\Transaksi');
    }
}
