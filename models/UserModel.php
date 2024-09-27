<?php
namespace models;

use lib\ModelOperationsTrait;

class UserModel
{
    use ModelOperationsTrait;

    public string $table = 'users';

    public function createUser($name, $email, $password_hash): bool
    {
        $data = [
            'name' => $name,
            'email' => $email,
            'password_hash' => $password_hash
        ];

        return $this->create($this->table, $data);
    }

    public function getUserByEmail($email)
    {
        $sql = "SELECT * FROM {$this->table} WHERE email = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }
}

?>
