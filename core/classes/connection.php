<?php

class Connect {
    protected static $servername = "localhost:3307"; // Sesuaikan dengan host dan port yang benar
    protected static $db_name = "tweetphp";
    protected static $username = "root";
    protected static $password = "";
    protected static $pdo;

    public function __construct() { }

    public static function connect() {
        $servername = self::$servername;
        $db_name = self::$db_name;

        try {
            $conn = new PDO("mysql:host=$servername;dbname=$db_name", self::$username, self::$password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo "Connected successfully";
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }

        return $conn;
    }
}
?>
