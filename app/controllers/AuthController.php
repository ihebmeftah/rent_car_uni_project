<?php

require_once '../Framework/DataBase.php';

require_once '../helpers.php';
class AuthController
{

    private $db;

    public function __construct()
    {
        $config = require basePath('config/_db.php');
        $this->db = new DataBase($config);
    }

    public function register()
    {
        if (isset($_SESSION['loggedIn'])) {
            header('Location: /');
            exit;
        }
        require("../App/views/auth/register.view.php");
    }

    public function login()
    {
        if (isset($_SESSION['loggedIn'])) {
            header('Location: /');
            exit;
        }
        require("../App/views/auth/login.view.php");
    }

    public function logout()
    {

        session_unset();
        session_destroy();

        $params = session_get_cookie_params();
        setcookie('PHPSESSID', '', time() - 86400, $params['path'], $params['domain']);

        header('Location: /');
        exit;
    }

    public function performRegister()
    {
        $fname = $_POST['fname'] ?? '';
        $lname = $_POST['lname'] ?? '';
        $email = $_POST['email'];
        $password = $_POST['password'] ?? '';

        $sql = "INSERT INTO admin (nom,prenom,email, password) VALUES (:fname,:lname, :email, :password)";

        $params = [
            'lname' => $lname,
            'fname' => $fname,
            'email' => $email,
            'password' => password_hash($password, PASSWORD_DEFAULT),
        ];

        $this->db->query($sql, $params);
        header('Location: /login');
        exit;
    }

    public function performLogin()
    {

        $email = $_POST['email'] ?? '';
        $password = $_POST['password'] ?? '';

        // SELECT user from database
        $sql = 'SELECT * FROM admin WHERE email = :email';

        // Params for prepared statement
        $params = ['email' => $email];

        // Prepare the statement & execute query
        $stmt = $this->db->query($sql, $params);

        // Fetch the post from the database
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$user) {
            header('Location: /login');
            exit;
        }
        //verify password
        if (password_verify($password, $user['password'])) {
            $_SESSION['user'] = [
                'id' => $user['id'],
                'email' => $user['email'],
                'role' => "admin"
            ];
            $_SESSION['loggedIn'] = true;
            header('Location: /');
            exit;
        }
    }
}
