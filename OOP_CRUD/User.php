<?php
include_once 'Database.php';

class User
{
    private $database;
    private $db_conn;
    protected static $table_name = 'users'; // We made this into a static variable since we want this to be accessible by static functions

    /**
     * Inside the constructor we create a
     * new Database Object and establish a 
     * connection with the databse.
     * 
     * Each time a User Object is created, we 
     * establish a connection to the database
     */
    public function __construct()
    {
        $this->database = new Database();
        $this->db_conn = $this->database->connect_db();
    }

    /**
     * This is a static function because
     * we want to get all the users without
     * instantiating a new User Object
     */
    public static function getAllUsers()
    {
        $database = new Database();
        $db_conn = $database->connect_db();

        $query = "SELECT * FROM " . self::$table_name . " ORDER BY id ASC";

        $stmt = $db_conn->prepare($query);
        $stmt->execute();
        $row = $stmt->fetchAll(PDO::FETCH_ASSOC); // fetchAll() is used to fetch all rows

        $db_conn = null;

        return $row;
    }

    public static function getUsingId($id)
    {
        $database = new Database();
        $db_conn = $database->connect_db();

        $query = "SELECT * FROM " . self::$table_name . " WHERE id = ?";

        $stmt = $db_conn->prepare($query);
        $stmt->execute($id);
        $row = $stmt->fetch(PDO::FETCH_ASSOC); // fetch() is used to fetch one row

        $db_conn = null;

        return $row;
    }

    public function saveData($data)
    {
		$query  = "INSERT INTO users(first_name, last_name, email, gender, age) VALUES(?, ?, ?, ?, ?)";
		$stmt = $this->db_conn->prepare($query);
        $stmt->execute($data);

        $this->db_conn = null;
        
        header('Location: index.php'); // change our URL to index.php after insert
    }

    public static function updateData($data)
    {   
        $database = new Database();
        $db_conn = $database->connect_db();

        $query  = "UPDATE " . self::$table_name . " SET first_name = ?, last_name = ?, email = ?, gender = ?, age = ? WHERE id = ?";
		$stmt = $db_conn->prepare($query);
        $stmt->execute($data);

        $db_conn = null;
        
        header('Location: index.php'); // change our URL to index.php after insert
    }

    public static function deleteData($data) {
        $database = new Database();
        $db_conn = $database->connect_db();

        $query  = "DELETE FROM " . self::$table_name . " WHERE id = ?";
		$stmt = $db_conn->prepare($query);
        $stmt->execute($data);
        
        $db_conn = null;
        
        header('Location: index.php'); // change our URL to index.php after delete
    }
}
?>