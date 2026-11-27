<?php
/**
 *
 * GPX Viewer. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2026 GPX Viewer contributors
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace wf\gpxviewer\migrations;

/**
 * Switches boards that still have the old fixed defaults (450 / 180 px)
 * to automatic heights (0). Customised values are left alone.
 */
class set_auto_heights extends \phpbb\db\migration\migration
{
	public static function depends_on()
	{
		return ['\wf\gpxviewer\migrations\install_acp_module'];
	}

	public function update_data()
	{
		return [
			['custom', [[$this, 'reset_old_defaults']]],
		];
	}

	public function reset_old_defaults()
	{
		if (isset($this->config['gpxviewer_map_height']) && (int) $this->config['gpxviewer_map_height'] === 450)
		{
			$this->config->set('gpxviewer_map_height', 0);
		}

		if (isset($this->config['gpxviewer_profile_height']) && (int) $this->config['gpxviewer_profile_height'] === 180)
		{
			$this->config->set('gpxviewer_profile_height', 0);
		}
	}
}
