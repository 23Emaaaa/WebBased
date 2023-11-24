<?php

/**
 * Class DatabaseHelper
 * A helper class for database operations
 */
class DatabaseHelper
{
    private $db;

    /**
     * Constructor.
     * @param $servername - The server name
     * @param $username - The username for the database
     * @param $password - The password for the database
     * @param $dbname - The name of the database
     */
    public function __construct($servername, $username, $password, $dbname)
    {
        $this->db = new mysqli($servername, $username, $password, $dbname);
        if ($this->db->connect_error) {
            die("Connection failed: " . $this->db->connect_error);
        }
    }

    /**
     * Get random posts from the database
     * @param $n - The number of posts to retrieve
     * @return array - Returns an associative array of the fetched rows
     */
    public function getRandomPosts($n)
    {
        // $stmt stands for statement
        $stmt = $this->db->prepare("SELECT idarticolo, titoloarticolo, imgarticolo FROM articolo ORDER BY RAND() LIMIT ?");
        $stmt->bind_param("i", $n);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    /**
     * Get categories from the database
     * @return array - Returns an associative array of the fetched rows
     */
    public function getCategories()
    {
        $stmt = $this->db->prepare("SELECT * FROM categoria");
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    /**
     * Get posts from the database
     * @param $n - The number of posts to retrieve
     * @return void - The method currently doesn't return anything
     */
    public function getPosts($n)
    {
        $query = "SELECT idarticolo, titoloarticolo, imgarticolo, anteprimaarticolo, 
                         dataarticolo, nome FROM articolo, autore WHERE autore=idautore ORDER BY dataarticolo DESC";
        // TODO: Implement the execution of the query and fetching the result
    }
}
