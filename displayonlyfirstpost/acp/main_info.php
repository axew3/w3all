<?php
/**
 *
 * Display Only First Post. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2022, axew3, http://axew3.com
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace w3all\displayonlyfirstpost\acp;

/**
 * Display Only First Post ACP module info.
 */
class main_info
{
	public function module()
	{
		return [
			'filename'	=> '\w3all\displayonlyfirstpost\acp\main_module',
			'title'		=> 'ACP_DISPLAYONLYFIRSTPOST_TITLE',
			'modes'		=> [
				'settings'	=> [
					'title'	=> 'ACP_DISPLAYONLYFIRSTPOST',
					'auth'	=> 'ext_w3all/displayonlyfirstpost && acl_a_board',
					'cat'	=> ['ACP_DISPLAYONLYFIRSTPOST_TITLE'],
				],
			],
		];
	}
}
