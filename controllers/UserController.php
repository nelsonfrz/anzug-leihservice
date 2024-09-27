<?php
namespace controllers;

use models\UserModel;

class UserController
{
    private UserModel $model;


    public function __construct()
    {
        $this->model = new UserModel();
    }

    public function registerUser($name, $email, $password): string
    {
        $password_hash = password_hash($password, PASSWORD_BCRYPT);

        if ($this->model->getUserByEmail($email)) {
            return "User with this email already exists!";
        }

        if ($this->model->createUser($name, $email, $password_hash)) {
            return "User registered successfully!";
        }

        return "Error registering user.";
    }

    public function getUser($id)
    {
        return $this->model->find($this->model->table, $id);
    }
}

?>
