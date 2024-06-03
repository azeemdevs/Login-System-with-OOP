<?php

class RegisterController extends RegisterModel
{
    /**
     *  Initializes the values to properties
     */
    public function __construct(
        private readonly string $name,
        private readonly string $email,
        private readonly string $password,
        private readonly string $passwordConfirmation
    ) {
        // code...
    } // end constructor method.

    /**
     *  This function runs for register user after processing validations.
     */
    public function registerUser()
    {
        session_start();

        if ($this->emptyFields() !== true) {
            $_SESSION['empty_fields'] = "All fields are empty.";
            header("location: ../../views/register.view.php?error=emptyfields");
            exit();
        }

        if ($this->validateEmail() !== true) {
            $_SESSION['invalid_email'] = "please type a valid email address";
            header("location: ../../views/register.view.php?error=invalidemail");
            exit();
        }

        if ($this->pwdMatch() !== true) {
            $_SESSION['password_match'] = "Confirm Password not match";
            header("location: ../../views/register.view.php?error=pwdnotmatch");
            exit();
        }

        if ($this->validatePwd() !== true) {
            $_SESSION['password_invalid'] = "Password must 8 characters long.";
            header("location: ../../views/register.view.php?error=password_invalid");
            exit();
        }
        if ($this->checkEmailExists($this->email) !== true) {
            $_SESSION['email_taken'] = "Email already exists Try Different One.";
            header("location: ../../views/register.view.php?error=email_taken");
            exit();
        }

        if ($this->setUser($this->name, $this->email, $this->password) === true) {
            $_SESSION['success'] = "You have been registered successfully ! Login Now";
            header("location: ../../views/login.view.php?error=none");
            exit();
        }
    } // end method.

    /**
     *  Checks if All input fields are not empty.
     */
    private function emptyFields(): bool
    {
        if (empty($this->name) || empty($this->email) || empty($this->password) || empty($this->passwordConfirmation)) {
            return false;
        } else {
            return true;
        }
    } //end method.

    /**
     *  Validates the Email field.
     */
    private function validateEmail(): bool
    {
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            return false;
        } else {
            return true;
        }
    } //end method.

    /**
     *  Checks for current password and confirm password match.
     */
    private function pwdMatch(): bool
    {
        if ($this->password !== $this->passwordConfirmation) {
            return false;
        } else {
            return true;
        }
    } // end method.

    /**
     *  Validates the password.
     */
    private function validatePwd(): bool
    {
        if (!preg_match("/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/", $this->password)) {
            return false;
        } else {
            return true;
        }
    } // end method.



}
