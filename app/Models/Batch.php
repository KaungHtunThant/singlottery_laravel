<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Batch
 * 
 * @property int $batch_id
 * @property string $start_date
 * @property string $end_date
 *
 * @package App\Models
 */
class Batch extends Model
{
	protected $table = 'batches';
	protected $primaryKey = 'batch_id';
	public $timestamps = false;

    protected $casts = [
        'batch_id' => 'int',
    ];
	protected $fillable = [
		'batch_id',
        'start_date',
        'end_date'
	];
}
