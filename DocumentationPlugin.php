<?php namespace Craft;

class DocumentationPlugin extends BasePlugin {


	/**
	 * Return the plugins name.
	 *
	 * @return string
	 */
	public function getName()
	{
		return 'Documentation';
	}
	/**
	 * Returns the plugin’s version number.
	 *
	 * @return string The plugin’s version number.
	 */
	public function getVersion()
	{
		return '1.0.1';
	}

	/**
	 * Returns the plugin developer’s name.
	 *
	 * @return string The plugin developer’s name.
	 */
	public function getDeveloper()
	{
		return 'Jason McCallister';
	}

	/**
	 * Returns the plugin developer’s URL.
	 *
	 * @return string The plugin developer’s URL.
	 */
	public function getDeveloperUrl()
	{
		return 'https://mccallister.io';
	}

	/**
	 * Define the plugins settings.
	 *
	 * @return array
	 */
	protected function defineSettings()
	{
		return array(
			'useDatabase'    => AttributeType::Bool,
			'pathToMarkdown' => AttributeType::String,
			'documentation'  => AttributeType::Mixed
		);
	}

	/**
	 * Return the plugins settings template.
	 *
	 * @return string
	 */
	public function getSettingsHtml()
	{
		return craft()->templates->render('documentation/settings', array(
			'settings' => $this->getSettings()
		));
	}

	/**
	 * Return if the plugin has a control panel section.
	 *
	 * @return bool
	 */
	public function hasCpSection()
	{
		return true;
	}

	/**
	 * @return array
	 */
	public function registerCpRoutes()
	{
		return array(
			'documentation' => array(
				'action' => 'documentation/document'
			)
		);
	}

}
