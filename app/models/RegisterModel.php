<?php

class RegisterModel extends Database
{
    /**
     *  Check if the email is already registered or not.
     */
    protected function checkEmailExists($email): bool
    {
        $query = "SELECT id from users WHERE email = ?;";
        $stmt = $this->connect()->prepare($query);
        if (!$stmt->execute([$email])) {
            $stmt = null;
            exit();
        }
        if ($stmt->rowCount() > 0) {
            return false;
        } else {
            return true;
        }
    }

    /**
     *  Register User.
     */
    protected function setUser($name, $email, $password): bool
    {
        $query = "INSERT INTO users(name,email,password) VALUES(?,?,?);";
        $stmt = $this->connect()->prepare($query);
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);
        if (!$stmt->execute([$name, $email, $hashed_password])) {
            $stmt = null;
            exit();
        }
        $stmt = null;
        return true;
    }
}
