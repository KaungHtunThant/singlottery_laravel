<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Privilege
 * 
 * @property int $privilege_id
 * @property string $privilege_level
 *
 * @package App\Models
 */
class Privilege extends Model
{
	protected $table = 'privileges';
	protected $primaryKey = 'privilege_id';
	public $timestamps = false;

	protected $fillable = [
		'privilege_level'
	];
}
