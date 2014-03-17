<?php namespace Initr\Observers;

use Initr\Repositories\Manifest;

class ManifestVersion
{
	protected $manifest;

	public function __construct(Manifest $manifest)
	{
		$this->manifest = $manifest;
	}

	public function creating($manifestVersion)
	{
		$jsonFile = $manifestVersion->json_file;

		$compiledScripts = $this->getCompiledScripts($manifestVersion);

		$jsonFile['compiled_scripts'] = $compiledScripts;

		$manifestVersion->compiled_scripts = json_encode($compiledScripts);
		$manifestVersion->compiled_response = json_encode($jsonFile);
	}

	protected function getCompiledScripts($manifestVersion)
	{
		$jsonFile = $manifestVersion->json_file;
		$scripts = $jsonFile['scripts'];
		$rawBaseUrl = $manifestVersion->raw_base_url;
		$compiledScripts = $this->getScriptsForRequirements($jsonFile);

		foreach ($scripts as $script) {
			$compiledScripts[] = $rawBaseUrl . '/' . $script;
		}

		dd($compiledScripts);

		return $compiledScripts;
	}

	protected function getScriptsForRequirements($jsonFile)
	{
		$requirements = $jsonFile['require'];

		$compiledScripts = [];
		foreach ($requirements as $manifestName => $versionName) {
			$requireVersion = $this->manifest->findVersionWithName($manifestName, $versionName);

			$compiledScripts = array_merge($compiledScripts, $requireVersion->compiled_scripts);
		}

		return $compiledScripts;
	}
}
