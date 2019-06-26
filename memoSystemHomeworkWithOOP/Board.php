<?php
include_once 'Database.php';

class Board {

    private $database;
    private $connection;
    protected static $table_name = 'boards';

    public function __construct()
    {
        $this->database = new Database();
        $this->connection = $this->database->connect_db();
    }

    public static function getAllBoards()
    {
        $database = new Database();
        $connection = $database->connect_db();

        $query = "SELECT * FROM " . self::$table_name;
        
        $stmt = $connection->prepare($query);
        $stmt->execute();
        $row = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $connection = null;

        return $row;
    }

    public function saveData($data)
    {
        $query = "INSERT INTO " . self::$table_name . "(boardname, description) VALUES(?, ?)";

        $stmt = $this->connection->prepare($query);
        $stmt->execute($data);

        $this->connection = null;

        return;
    }

    public static function getBoardWithID($data)
    {
        $database = new Database();
        $connection = $database->connect_db();

        $query = "SELECT * FROM " . self::$table_name . " WHERE id = ?";

        $stmt = $connection->prepare($query);
        $stmt->execute($data);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        $connection = null;

        return $row;
    }

    public static function updateData($data)
    {
        $database = new Database();
        $connection = $database->connect_db();

        $query = "UPDATE " . self::$table_name . " SET boardname = ?, description = ? WHERE id = ?";

        $stmt = $connection->prepare($query);
        $stmt->execute($data);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        $connection = null;

        return;
    }

    public static function deleteBoard($data)
    {
        $database = new Database();
        $connection = $database->connect_db();

        $query  = "DELETE FROM " . self::$table_name . " WHERE id = ?";
		$stmt = $connection->prepare($query);
        $stmt->execute($data);
        
        $connection = null;

        return;
    }
}
?>