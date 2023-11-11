<?php
    namespace userC;
    /*class UserController {
        private $model;
    
        public function __construct($model) {
            $this->model = $model;
        }
    
        public function index() {
            $users = $this->model->getUsers();
            include 'app/views/user_list.php';
        }  

        public function insertForm(){
            include 'app/views/insertForm.php';
        }
     public function createUsers() {
      
        $username = $_POST['username'];
        $password = $_POST['password'];
        $role = $_POST['role']; // اضافة حقل الدور

        $data = [ 
            'username' => $username,
            'password' => $password,
            'role' => $role,
        ];

        $insert=$this->model->insertUsers($data) ;
       // header("location:../index.php");
       header("location:/darrbeni/mvc/index");
}
public function updateForm(){
    include "app/views/edit.php";
}
    
        public function update() {
           
                $id = $_GET['id'];
                $username = $_POST['username'];
                $password = $_POST['password'];
                $role = $_POST['role'];
               $data = array();

            // $data = [
              //      'username' => "$username",
                //    'password' => "$password",
                  //  'role' => "$role"
                //];
    
                if (!empty($username)) {
                    $data['username'] = $username;
                }
        
                if (!empty($password)) {
                    $data['password'] = $password;
                }
    
                if (!empty($role)) {
                    $data['role'] = $role;
                }
               // if ($this->model->updateUser($id,$data)) {
                 //   echo "yes!";
               // } else {
                 //   echo "no.";
                //}
                
        if (!empty($data)) {
            $id = $_GET["id"];
            $this->model->updateUsers($id, $data);
        }
        header("location:../index.php");
   
    }
            
        
    
        public function deleteUser() {
            if ($_SERVER['REQUEST_METHOD'] === 'GET') {
                $id = $_GET['id'];
    
                if ($this->model->deleteUser($id)) {
                    echo "yees   !";
                } else {
                    echo "   noo.";
                }
            }
        }
    }*/

namespace userC;

class UserController
{
    private $model;

    public function __construct($model)
    {
        $this->model = $model;
    }

    public function index()
    {
        $users = $this->model->getUsers();

        include "app/views/user_list.php";
    }

    public function insertForm()
    {
        include "app/views/insertForm.php";
    }

    public function createUser()
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $role = $_POST['role'];

        $data = [
            "username" => "$username",
            "password" => "$password",
            "role" => "$role"
        ];

        $insert = $this->model->insertUsers($data);
        header("location:/darrbeni/mvc/");
    }

    public function updateForm()
    {
        include "app/views/edit.php";
    }

    public function update()
    {

        $username = $_POST['username'];
        $password = $_POST['password'];
        $role = $_POST['role'];
        $data = array();

        if (!empty($username)) {
            $data['username'] = $username;
        }

        if (!empty($password)) {
            $data['password'] = $password;
        }

        if (!empty($role)) {
            $data['role'] = $role;
        }

        if (!empty($data)) {
            $id = $_GET["id"];
            $this->model->updateUsers($data, $id);
        }

        header("location:/darrbeni/mvc/");
    }

    public function deleteForm()
    {
        include "app/views/delete.php";
    }

    public function delete()
    {
        $id = $_GET["id"];
        $this->model->deleteUsers($id);
        header("location: index.php");
    }
    
}
