<?php

namespace Controller;

use Models\DB;

class AdminController {
    private $db;
    
    public function __construct() {
        $this->db = new DB();
        if (!$this->isAuthenticated()) {
            header('HTTP/1.0 403 Forbidden');
            echo json_encode(['error' => 'Access denied. Super admin privileges required.']);
            exit();
        }
    }
    
    private function isAuthenticated() {
        session_start();
        return isset($_SESSION['user']) && isset($_SESSION['user']['role']) 
            && $_SESSION['user']['role'] === 'super_admin';
    }
    
    public function getAllUsers() {
        $query = "SELECT id, username, email, role, is_active FROM users";
        $result = $this->db->query($query);
        return json_encode($result);
    }
    
    public function updateUserRole($userId, $newRole) {
        if (!in_array($newRole, ['user', 'admin', 'super_admin'])) {
            return json_encode(['error' => 'Invalid role specified']);
        }
        
        $query = "UPDATE users SET role = ? WHERE id = ?";
        $result = $this->db->query($query, [$newRole, $userId]);
        
        if ($result) {
            return json_encode(['success' => true, 'message' => 'User role updated successfully']);
        }
        return json_encode(['error' => 'Failed to update user role']);
    }
    
    public function toggleUserActivation($userId) {
        $query = "SELECT is_active FROM users WHERE id = ?";
        $user = $this->db->query($query, [$userId]);
        
        if (!$user) {
            return json_encode(['error' => 'User not found']);
        }
        
        $newStatus = $user[0]['is_active'] ? 0 : 1;
        $query = "UPDATE users SET is_active = ? WHERE id = ?";
        $result = $this->db->query($query, [$newStatus, $userId]);
        
        if ($result) {
            $status = $newStatus ? 'activated' : 'deactivated';
            return json_encode(['success' => true, 'message' => "User {$status} successfully"]);
        }
        return json_encode(['error' => 'Failed to toggle user activation']);
    }
    
    public function getUser($userId) {
        $query = "SELECT id, username, email, role, is_active FROM users WHERE id = ?";
        $result = $this->db->query($query, [$userId]);
        
        if ($result) {
            return json_encode($result[0]);
        }
        return json_encode(['error' => 'User not found']);
    }
}

