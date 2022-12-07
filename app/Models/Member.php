<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Member
 * 
 * @property int $user_id
 * @property string $username
 * @property string|null $user_email
 * @property string $password
 * @property int $privilege_id
 * @property bool $banned
 *
 * @package App\Models
 */
class Member extends Model
{
	protected $table = 'members';
	protected $primaryKey = 'user_id';
	public $timestamps = false;

	protected $casts = [
		'privilege_id' => 'int',
		'banned' => 'bool'
	];

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'username',
		'user_email',
		'password',
		'privilege_id',
		'banned'
	];
}
