<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    public function insert_user_with_wallet($userData)
    {
        $this->db->trans_start(); // Begin transaction

        // Insert user
        $this->db->insert('users', $userData);
        $user_id = $this->db->insert_id();

        // Just for debug:
        if (!$user_id) {
            log_message('error', 'User insert failed.');
            return false;
        }

        // Insert wallet for the new user
        $this->db->insert('wallets', [
            'user_id' => $user_id,
            'balance' => 0.00,
            'bonus' => 0.00
        ]);

        $this->db->trans_complete(); // Commit if all successful

        return $this->db->trans_status(); // true on success
    }
}