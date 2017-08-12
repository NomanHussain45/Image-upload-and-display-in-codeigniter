<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datacontrol extends CI_Model {

	public function getimages()
	{
		return $this->db->get('images')->result();
		// $this->db->insert('images',$_POST);
	}
	public function createtable()
	{
		$this->load->dbforge();
		$table = array(
                        $_POST['col'] => array('type' => 'VARCHAR(60)','default' => '1'));
		$this->dbforge->add_column('images', $table);
	}
}

