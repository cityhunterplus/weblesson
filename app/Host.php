<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Host extends Model
{
	protected $guarded = ['id'];
	protected $fillable = [
		'host_name',
		'domain_name',
		'ip_address'
	];
}
