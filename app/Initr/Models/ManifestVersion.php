<?php namespace Initr\Models;

use Illuminate\Database\Eloquent\Model;

class ManifestVersion extends Model
{
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'manifest_versions';

	protected $dates = [
		'committed_at'
	];

	protected $fillable = [
		'manifest_url',
		'version_name',
		'json_file',
		'base_url',
		'compiled_scripts',
		'compiled_response',
		'commit_hash',
		'committed_at'
	];
}
