<?php

class LoginController extends LoginModel
{

    /**
     * Initializes the values after instantiation.
     */
    public function __construct(private readonly string $email, private readonly string $password)
    {
        // code.
    } // end method.

    public function LoginUser()
    {
        session_start();

        if ($this->emptyFields() !== true) {
            $_SESSION['EMPTY_FIELD'] = "All fields are empty";
            header("location: ../../views/login.view.php?error=emptyfields");
            exit();
        }

        if ($this->emailExists($this->email) !== true) {
            $_SESSION['EMAIL_NOT_EXISTS'] = "Email does not exist";
            header("location: ../../views/login.view.php?error=emailnotfound");
            exit();
        }

        if ($this->getUser($this->email, $this->password) === false) {
            $_SESSION['WRONG_PASSWORD'] = "Incorrect password";
            header("location: ../../views/login.view.php?error=emailnotfound");
            exit();
        }
    }
    /**
     *  Check for empty inputs.
     */
    private function emptyFields(): bool
    {
        if (empty($this->email) || empty($this->password)) {
            return false;
        } else {
            return true;
        }
    } // end method.
}
