<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class LotterySetting
 * 
 * @property int $setting_id
 * @property string $setting_name
 * @property string|null $setting_value
 *
 * @package App\Models
 */
class LotterySetting extends Model
{
	protected $table = 'lottery_settings';
	protected $primaryKey = 'setting_id';
	public $timestamps = false;

	protected $fillable = [
		'setting_name',
		'setting_value'
	];
}
