
<?php
include_once __DIR__ . "/../../Database/AbstractDao.php";
include_once __DIR__ . "/../../Database/UserDao.php";
include_once __DIR__ . "/../../objects/user.php";

class DatabaseUserDao extends AbstractDao implements UserDao
{
    public $conn;

    public function __construct()
    {
        $this->conn = parent::getConnection();
    }

    public function GetUserByUsername($username)
    {
        $sql =<<<EOF
           SELECT * FROM users WHERE username = '$username';
        EOF;

        $ret = pg_query($this->conn, $sql);
        if(!$ret) {
            echo pg_last_error($this->conn);
            exit;
        }
        while($row = pg_fetch_row($ret)) {

            return $this->FetchUser($row);
        }
        return null;
    }

    public function UserExist($username)
    {
        $sql = <<<EOF
            SELECT * FROM users WHERE username = '$username';
        EOF;

        $ret = pg_query($this->conn, $sql);
        if (!$ret) {
            echo pg_last_error($this->conn);
            exit;
        }
        while ($row = pg_fetch_row($ret)) {
            return true;
        }
        return false;
    }

    public function RegisterUser($username, $password)
    {
        $hashed = password_hash($password, PASSWORD_BCRYPT);
        $sql =<<<EOF
            INSERT INTO users (username,password) VALUES ('$username', '$hashed');
        EOF;

        $ret = pg_query($this->conn, $sql);
        if(!$ret) {
            echo pg_last_error($this->conn);
        } else {
            echo "Records created successfully\n";
        }
    }

    private function FetchUser($row){
        return new User($row[0], $row[1], $row[2]);
    }


}

?>