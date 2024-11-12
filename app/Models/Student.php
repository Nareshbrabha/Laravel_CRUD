<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Student
 * 
 * @property int $id
 * @property string $name
 * @property string $dept
 *
 * @package App\Models
 */
class Student extends Model
{
	protected $table = 'student';
	public $timestamps = false;

	protected $fillable = [
		'name',
		'dept'
	];
}
