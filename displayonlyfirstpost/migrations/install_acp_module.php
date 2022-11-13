<?php
/**
 *
 * Display Only First Post. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2022, axew3, http://axew3.com
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace w3all\displayonlyfirstpost\migrations;

class install_acp_module extends \phpbb\db\migration\migration
{
	public function effectively_installed()
	{
		return isset($this->config_text['w3all_displayonlyfirstpost']);
	}

	public static function depends_on()
	{
		return ['\phpbb\db\migration\data\v320\v320'];
	}

	public function update_data()
	{
		return [
			['config_text.add', ['w3all_displayonlyfirstpost', '']],		  

			['module.add', [
				'acp',
				'ACP_CAT_DOT_MODS',
				'ACP_DISPLAYONLYFIRSTPOST_TITLE'
			]],
			['module.add', [
				'acp',
				'ACP_DISPLAYONLYFIRSTPOST_TITLE',
				[
					'module_basename'	=> '\w3all\displayonlyfirstpost\acp\main_module',
					'modes'				=> ['settings'],
				],
			]],
		];
	}
}
