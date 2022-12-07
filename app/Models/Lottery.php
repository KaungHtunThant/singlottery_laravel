<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Lottery
 * 
 * @property int $lottery_id
 * @property int $lottery_no
 * @property int $batch_id
 * @property int $user_id
 * @property string|null $customer_name
 * @property int|null $customer_ph_no
 * @property int|null $payment_id
 * @property bool|null $paid
 *
 * @package App\Models
 */
class Lottery extends Model
{
	protected $table = 'lotteries';
	protected $primaryKey = 'lottery_id';
	public $timestamps = false;

	protected $casts = [
		'lottery_no' => 'int',
		'batch_id' => 'int',
		'user_id' => 'int',
		'customer_ph_no' => 'int',
		'payment_id' => 'int',
		'paid' => 'bool'
	];

	protected $fillable = [
		'lottery_no',
		'batch_id',
		'user_id',
		'customer_name',
		'customer_ph_no',
		'payment_id',
		'paid'
	];
}
