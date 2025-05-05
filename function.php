<?php
/** 
 * Find number of cart item
 * 
 * @category Add
 * @package  Ecommerce
 * @author   Display Madhan <madhan@gmail.com>
 * @license  https://www.php.net/license/3_01.txt PHP
 * @link     Null
 */ 
session_start();

/** 
 * Find number of cart item
 * 
 * @category Add
 * @package  Ecommerce
 * @author   Display Madhan <madhan@gmail.com>
 * @license  https://www.php.net/license/3_01.txt PHP
 * @link     Null
 */ 
class Connection
{

    public $host = 'webapp-mysql-db.ctoye4myy2b2.us-east-1.rds.amazonaws.com';
    public $user = 'admin';
    public $password = 'ChangeMe123!';
    public $db_name = 'ecommerce';
    public $conn;

    /** 
     * Find number of cart item
     * 
     * @return add product
     */    
    public function __construct()
    {
        $this->conn = mysqli_connect($this->host, $this->user, $this->password, $this->db_name);
    }
}
/** 
 * Find number of cart item
 * 
 * @category Add
 * @package  Ecommerce
 * @author   Display Madhan <madhan@gmail.com>
 * @license  https://www.php.net/license/3_01.txt PHP
 * @link     Null
 */ 
class adminRegister extends Connection
{

    public function registration($name, $password)
    {
        $duplicate = mysqli_query($this->conn, "SELECT * FROM admindetails WHERE AdminName = '$name'");
        if (mysqli_num_rows($duplicate) > 0) {
            return 10;
        } else {
            if ($password) {
                $query = "INSERT INTO admindetails VALUES('', '$name', '$password')";
                mysqli_query($this->conn, $query);
                return 1;
            } else {
                return 100;
            }
        }
    }
}
class Login extends Connection
{

    public $id;
    
    public function login($email, $password)
    {
        $result = mysqli_query($this->conn, "SELECT * FROM admindetails WHERE  AdminName = '$email'");
        $row = mysqli_fetch_assoc($result);

        if (mysqli_num_rows($result) > 0) {
            if ($password == $row['Password']) {
                $this->id = $row['id'];
                return 1;
            } else {
                return 10;
            }
        } else {
            return 100;
        }
    }

    public function idUser()
    {
        return $this->id;
    }
}


class Admin extends Connection
{

    public function selectUserById($id)
    {
        $result = mysqli_query($this->conn, "SELECT * FROM admindetails WHERE id = $id");
        return mysqli_fetch_assoc($result);
    }
}

?>