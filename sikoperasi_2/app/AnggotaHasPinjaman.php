<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AnggotaHasPinjaman extends Model
{
	use SoftDeletes;

    protected $table='anggotas_has_pinjamans';

    public $timestamps=true;

    protected $dates=['deleted'];

    const CREATED_AT='created_at';

    const UPDATED_AT='updated_at';

    protected $fillable=['anggotas_id','pinjamans_id'];

    public function anggotas(){
        return $this->belongsTo('App\Anggota');
    }

    public function pinjamans(){
        return $this->belongsTo('App\Pinjaman');
    }
}
