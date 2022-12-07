<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Winner
 * 
 * @property int $winner_id
 * @property int $result_id
 * @property int $lottery_id
 * @property int $user_id
 *
 * @package App\Models
 */
class Winner extends Model
{
	protected $table = 'winners';
	protected $primaryKey = 'winner_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'winner_id' => 'int',
		'result_id' => 'int',
		'lottery_id' => 'int',
		'user_id' => 'int'
	];

	protected $fillable = [
		'result_id',
		'lottery_id',
		'user_id'
	];
}
