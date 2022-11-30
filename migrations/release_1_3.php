<?php
/**
*
* @package phpBB Extension - LMDI Glossary extension
* @copyright (c) 2015-2021 Pierre Duhem - LMDI
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace lmdi\gloss\migrations;

class release_1_3 extends \phpbb\db\migration\migration
{

	public function effectively_installed()
	{
		return ($this->config['lmdi_glossary_version'] == 1324);
	}

	static public function depends_on()
	{
		return array('\lmdi\gloss\migrations\release_1_2');
	}


	public function update_schema()
	{
		return array(
			array('config.add' => array('lmdi_glossary_version', '1324')),
			array('custom', array (array(&$this, 'wider_lang_column'))),
		);
	}	// update_schema


	private function wider_lang_column()
	{
		$sql = 'ALTER TABLE ' . $this->table_prefix . 'glossary MODIFY lang VARCHAR(12)';
		// $this->debug ($sql);
		$this->db->sql_query($sql);
	}	// wider_lang_column

}
