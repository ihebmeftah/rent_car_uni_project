<?php

require_once '../Framework/DataBase.php';

require_once '../helpers.php';


class GestController
{

    private $db;

    public function __construct()
    {
        $config = require basePath('config/_db.php');
        $this->db = new Database($config);
    }

    /*


   * Show the latest jobs
   * 
   * @return void
   */
    public function index()
    {
        $gests = $this->db->query('SELECT * FROM gestionnaire ')->fetchAll();
        if (!isset($_SESSION['loggedIn'])) {
            header('Location: /login');
            exit;
        }
        require("../App/views/gest/gest.view.php");
    }

    
    public function add()
    {
        require("../App/views/gest/addgest.view.php");
    }
    public function addGest()
    {

        $fname = $_POST['fname'] ?? '';
        $lname = $_POST['lname'] ?? '';
        $email = $_POST['email'] ?? '';
        $password = $_POST['password'] ?? '';

        $sql = "INSERT INTO gestionnaire (nom,prenom,email, password) VALUES (:fname,:lname, :email, :password)";

        $params = [
            'lname' => $lname,
            'fname' => $fname,
            'email' => $email,
            'password' => password_hash($password, PASSWORD_DEFAULT),
        ];

        $this->db->query($sql, $params);
        header('Location: /');
    }
    public function delete()
    {
        $isDeleteRequest = ($_SERVER['REQUEST_METHOD'] === 'POST' && ($_POST['_method'] ?? '') === 'delete');
        if ($isDeleteRequest) {
            $id = $_POST['id'];

            $sql = 'DELETE FROM gestionnaire WHERE id = :id';
            $params = ['id' => $id];

            $stmt = $this->db->query($sql, $params);
            header('Location: /');
        }
    }
}
