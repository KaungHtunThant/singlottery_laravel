<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Result
 * 
 * @property int $result_id
 * @property int $batch_id
 * @property int $prize_id
 * @property int $result_lottery_no
 *
 * @package App\Models
 */
class Result extends Model
{
	protected $table = 'results';
	protected $primaryKey = 'result_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'result_id' => 'int',
		'batch_id' => 'int',
		'prize_id' => 'int',
		'result_lottery_no' => 'int'
	];

	protected $fillable = [
		'batch_id',
		'prize_id',
		'result_lottery_no'
	];
}
