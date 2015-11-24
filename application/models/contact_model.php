<?php
class Contact_model extends CI_Model
{
    public function save_contact($name, $email, $message)
    {
        $this->db->insert('contact',
            array('name' => $name,
                  'email' => $email,
                  'message' => $message,
                )
        );
    }
}