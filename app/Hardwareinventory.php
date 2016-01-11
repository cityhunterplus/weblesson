<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hardwareinventory extends Model
{
	protected $guarded = ['id'];
	protected $fillable = [
		'host_id',
		'computer_name',
		'cpu',
		'memory',
		'vendor_name',
	];

	public function host() {
		return $this->hasOne('App\Host');
	}
}
