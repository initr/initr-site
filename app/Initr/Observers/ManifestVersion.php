<?php namespace Initr\Observers;

class ManifestVersion
{
	public function creating($manifestVersion)
	{
		$jsonFile = $manifestVersion->json_file;
		$scripts = $jsonFile['scripts'];
		$rawBaseUrl = $manifestVersion->raw_base_url;
		$compiledScripts = [];

		foreach ($scripts as $script) {
			$compiledScripts[] = $rawBaseUrl . '/' . $script;
		}

		$jsonFile['compiled_scripts'] = $compiledScripts;

		$manifestVersion->compiled_scripts = json_encode($compiledScripts);
		$manifestVersion->compiled_response = json_encode($jsonFile);
	}
}
