<?php

class LoginModel extends Database
{

    /**
     *  Login the user to dashboard.
     */
    protected function getUser($email, $password): bool
    {
        $stmt = $this->connect()->prepare("SELECT * from users WHERE email = ?;");
        if (!$stmt->execute([$email])) {
            $stmt = null;
            exit();
        }

        if ($stmt->rowCount() > 0) {
            $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $checkPwd = password_verify($password, $data[0]["PASSWORD"]);
            if ($checkPwd == false) {
                return false;
            } else if ($checkPwd == true) {
                session_start();
                $_SESSION['ID'] = $data[0]['id'];
                $_SESSION['NAME'] = $data[0]['NAME'];
                header("location: ../../views/Dashboard.view.php?error=none");
                exit();
            }
            $stmt = null;
        }
    }
    /**
     *  Check if the Email is Exists or not.
     */
    protected function emailExists($email)
    {
        $stmt = $this->connect()->prepare("SELECT id,name,email from users WHERE email = ?;");
        if (!$stmt->execute([$email])) {
            $stmt = null;
            exit();
        }
        if ($stmt->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    } // end method.
}
