<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AnggotaHasSimpanan extends Model
{
	use SoftDeletes;

    protected $table='anggotas_has_simpanans';

    public $timestamps=true;

    protected $dates=['deleted'];

    const CREATED_AT='created_at';

    const UPDATED_AT='updated_at';

    protected $fillable=['anggotas_id','simpanans_id'];

    public function anggotas(){
        return $this->belongsTo('App\Anggota');
    }

    public function simpanans(){
        return $this->belongsTo('App\Simpanan');
    }
}
