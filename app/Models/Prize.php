<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Prize
 * 
 * @property int $prize_id
 * @property string $prize_name
 *
 * @package App\Models
 */
class Prize extends Model
{
	protected $table = 'prizes';
	protected $primaryKey = 'prize_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'prize_id' => 'int'
	];

	protected $fillable = [
		'prize_name'
	];
}
