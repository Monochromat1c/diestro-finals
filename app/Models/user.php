<?php

namespace App\Models;
use CodeIgniter\Model;

class user extends Model {
    protected $table = 'user';
    protected $primaryKey = 'user_id';
    protected $allowedFields = [
        'first_name',
        'middle_name',
        'last_name',
        'username',
        'password'

    ];
    protected $returnType = 'object';

    public function getUserDataById($userId) {
        return $this->db->table('user')->where('user_id', $userId)->get()->getRow();
    }

    public function updateUserProfile($userId, $data) {
        // Update the user's profile data
        $this->db->table('user')->where('user_id', $userId)->update($data);
    }
    
    
}