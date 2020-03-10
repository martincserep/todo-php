
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
        try {
            $sql = "SELECT id, username, password, FROM users WHERE username = ?";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(1, $username, PDO::PARAM_STR);
            $stmt->execute();
            while ($row = $stmt->fetch()){
                return $this->FetchUser($row);
            }
        } catch (PDOException $pe) {
            die("Could not connect to the Database! " . $pe->getMessage());
        }
        return null;
    }

    public function UserExist($username)
    {
        $sql =<<<EOF
            SELECT * FROM users WHERE username = $username;
        EOF;

        $ret = pg_query($conn, $sql);
        if(!$ret) {
        echo pg_last_error($conn);
        exit;
   } 
   while($row = pg_fetch_row($ret)) {
      echo "id = ". $row[0] . "\n";
      echo "name = ". $row[1] ."\n";
      echo "password = ". $row[2] ."\n";
   }
   echo "Operation done successfully\n";
    }

    public function RegisterUser($username, $password)
    {
        $sql =<<<EOF
            INSERT INTO users (username,password)
            VALUES ($username, $password);
        EOF;

        $ret = pg_query($conn, $sql);
        if(!$ret) {
            echo pg_last_error($db);
        } else {
            echo "Records created successfully\n";
        }
    }

    private function FetchUser($row){

        return new User($row['id'], $row['username'], $row['password']);
    }


}

?>