<?php
class AdminModel {
    private $adminCredentials;

    public function __construct() {
        $this->adminCredentials = [
            'admin_username' => 'admin_password'
        ];
    }

    public function isAdminAuthenticated($username, $password) {
        return isset($this->adminCredentials[$username]) && $this->adminCredentials[$username] === $password;
    }

    public function isAdminLoggedIn() {
        return isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in'];
    }

    public function logoutAdmin() {
        unset($_SESSION['admin_logged_in']); // Log out the admin.
    }

    public function registerAdmin($username, $password) {
        if (!isset($_SESSION['admin_credentials'])) {
            $_SESSION['admin_credentials'] = [];
        }

        $_SESSION['admin_credentials'][$username] = $password;
    }
}