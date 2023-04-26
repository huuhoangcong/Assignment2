<?php
class LoginModel extends Database
{
    private function _query($sql)
    {
        return mysqli_query($this->connect, $sql);
    }
    public function login($username, $password)
    {
        $sql = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";

        $result = $this->_query($sql);
        if ($result->num_rows > 0) {
            return true;
        } else {
            return false;
        }
    }
}
?>