<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectInfo extends Model
{
	protected $table = 'project_info';
	protected $primaryKey = 'id';
    protected $fillable = ['profile_pemerintah_id', 'nama', 'jenis', 'deskripsi', 'outcome', 'lokasi',
                           'status_selesai', 'biaya', 'waktu_pelaksaan', 'jadwal_realisasi'];

    public function profilePemerintah(){
        return $this->belongsTo('App\Models\ProfilePemerintah');
    }
}