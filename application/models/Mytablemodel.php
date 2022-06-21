<?php
class Mytablemodel extends CI_Model
{

	function saverecords($data)
	{
        $this->db->insert('mycodetable',$data);
        return true;
	}

}
