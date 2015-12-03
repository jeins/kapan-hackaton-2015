<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectInfo extends Model
{
    /**
     * @var string
     */
	protected $table = 'project_info';

    /**
     * @var string
     */
	protected $primaryKey = 'id';

    /**
     * @var array
     */
    protected $fillable = ['profile_pemerintah_id', 'nama', 'jenis', 'deskripsi', 'outcome', 'lokasi',
                           'status_selesai', 'biaya', 'waktu_pelaksaan', 'jadwal_realisasi'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function profilePemerintah(){
        return $this->belongsTo('App\Models\ProfilePemerintah');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function projectProgress(){
    	return $this->hasMany('App\Models\ProjectProgress');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function projectPost(){
        return $this->hasMany('\App\Models\ProjectPost');
    }
}