<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AnggotaHasTransaksi extends Model
{
	use SoftDeletes;

    protected $table='anggotas_has_transaksis';

    public $timestamps=true;

    protected $dates=['deleted'];

    const CREATED_AT='created_at';

    const UPDATED_AT='updated_at';

    protected $fillable=['anggotas_id','transaksis_id','transaksis_simpanans_id','transaksis_pinjamans_id'];

    public function anggotas(){
        return $this->belongsTo('App\Anggota');
    }

    public function transaksis(){
        return $this->belongsTo('App\Transaksi');
    }
}
