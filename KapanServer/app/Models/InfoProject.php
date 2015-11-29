<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InfoProject extends Model
{
    protected $fillable = ['id_pemerintah', 'nama', 'jenis', 'deskripsi', 'outcome', 'lokasi',
                           'status_selesai', 'biaya', 'waktu_pelaksaan', 'jadwal_realisasi'];

    public function profilePemerintah(){
        return $this->belongsTo('App\Models\PemerintahProfile');
    }
}