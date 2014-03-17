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

	protected $fillable = [
		'manifest_id',
		'version_name',
		'json_file',
		'base_url',
		'compiled_scripts',
		'compiled_response',
		'commit_hash',
	];

	public function manifest()
	{
		return $this->belongsTo('Initr\Models\Manifest');
	}

	public function getRawBaseUrlAttribute()
	{
		$rawBaseUrl = preg_replace('/(http:\/\/)|(https:\/\/)/', 'https://raw.', $this->base_url);
		$rawBaseUrl = str_replace('tree/', '', $rawBaseUrl);

		return $rawBaseUrl;
	}

	public function setJsonFileAttribute($value)
	{
		if (!is_string($value)) {
			$this->attributes['json_file'] = json_encode($value);
		} else {
			$this->attributes['json_file'] = $value;
		}
	}

	public function getJsonFileAttribute()
	{
		return json_decode($this->attributes['json_file'], true);
	}

	public function getCompiledScriptsAttribute()
	{
		return json_decode($this->attributes['compiled_scripts'], true);
	}

	public function getCompiledResponseAttribute()
	{
		return json_decode($this->attributes['compiled_response'], true);
	}

	public function getShaAttribute()
	{
		return substr($this->attributes['commit_hash'], 0, 7);
	}
}
