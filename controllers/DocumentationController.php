<?php namespace Craft;

class DocumentationController extends BaseController {

	/**
	 * @var
	 */
	protected $plugin;
	/**
	 * @var
	 */
	protected $settings;

	/**
	 * Initialize the controller.
	 */
	public function init()
	{
		$plugin = craft()->plugins->getPlugin('documentation');

		$settings = $plugin->getSettings();

		$this->plugin = $plugin;

		$this->settings = $settings;
	}

	/**
	 * Render the documentation template.
	 *
	 * @throws HttpException
	 */
	public function actionDocument()
	{
		// are we using the database?
		if ($this->settings->useDatabase) {
			$documentation = $this->settings->documentation;
		}
		else {
			$file = $this->settings->pathToMarkdown;

			$documentation = $this->getFileContents($file);
		}

		// render the template, pass the markdown!
		$this->renderTemplate('documentation/index', array(
			'documentation' => $documentation,
		));
	}

	/**
	 * Get the markdown file contents.
	 *
	 * @param $file
	 * @return string
	 */
	protected function getFileContents($file)
	{
		$directory = craft()->path->getPluginsPath() . 'documentation/';

		$path = $directory . $file;

		// can we find the file path?
		if ($this->settings->pathToMarkdown != '' && file_exists($path)) {
			return file_get_contents($path);
		}
		else {
			return file_get_contents($directory . 'README.md');
		}
	}

}
