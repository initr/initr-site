<?php namespace Initr\Models;

use Illuminate\Database\Eloquent\Model;

class Manifest extends Model
{
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'manifests';

	protected $fillable = [
		'user_id',
		'name',
		'repostiory_url',
	];
}
