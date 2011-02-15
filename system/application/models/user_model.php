<?php
/**
 * 
 **/
class User_model extends Model 
{
    
    function User_model()
    {
        parent::Model();
    }

    function getItem()
    {
        $query = $this->db->get('user',10);
        return $query->result();
    }
}
?>
