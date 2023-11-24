<?php

/**
 * Class DatabaseHelper
 * A helper class for database operations
 */
class DatabaseHelper
{
    private $db;

    /**
     * DatabaseHelper constructor.
     * @param string $servername - The server name
     * @param string $username - The username for the database
     * @param string $password - The password for the database
     * @param string $dbname - The name of the database
     */
    public function __construct($servername, $username, $password, $dbname)
    {
        // Initialize a new mysqli instance
        $this->db = new mysqli($servername, $username, $password, $dbname);

        // Check for connection errors and terminate the script if any occur
        if ($this->db->connect_error) {
            die("Connection failed: " . $this->db->connect_error);
        }
    }

    /**
     * Get random posts from the database
     * @param int $n - The number of posts to retrieve
     * @return array - Returns an associative array of the fetched rows
     */
    public function getRandomPosts($n)
    {
        // Prepare the SQL statement
        $stmt = $this->db->prepare("SELECT idarticolo, titoloarticolo, imgarticolo FROM articolo ORDER BY RAND() LIMIT ?");

        // Bind the parameter to the SQL statement
        $stmt->bind_param("i", $n);

        // Execute the SQL statement
        $stmt->execute();

        // Get the result of the SQL statement
        $result = $stmt->get_result();

        // Fetch all rows from the result as an associative array and return it
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    /**
     * Get categories from the database
     * @return array - Returns an associative array of the fetched rows
     */
    public function getCategories()
    {
        // Prepare the SQL statement
        $stmt = $this->db->prepare("SELECT * FROM categoria");

        // Execute the SQL statement
        $stmt->execute();

        // Get the result of the SQL statement
        $result = $stmt->get_result();

        // Fetch all rows from the result as an associative array and return it
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    /**
     * Get posts from the database
     * @param int $n - The number of posts to retrieve. If no value is provided or the value is -1, all posts are retrieved.
     * @return array - Returns an associative array of the fetched rows
     */
    public function getPosts($n = -1)
    {
        // Prepare the SQL query
        $query = "SELECT idarticolo, titoloarticolo, imgarticolo, anteprimaarticolo, 
                        dataarticolo, nome FROM articolo, autore WHERE autore=idautore ORDER BY dataarticolo DESC";

        // If $n is greater than 0, add a LIMIT clause to the SQL query
        if ($n > 0) {
            $query .= " LIMIT ?";
        }

        // Prepare the SQL statement
        $stmt = $this->db->prepare($query);

        // If $n is greater than 0, bind the parameter to the SQL statement
        if ($n > 0) {
            $stmt->bind_param('i', $n);
        }

        // Execute the SQL statement
        $stmt->execute();

        // Get the result of the SQL statement
        $result = $stmt->get_result();

        // Fetch all rows from the result as an associative array and return it
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    /**
     * Get authors from the database along with their associated categories
     * @return array - Returns an associative array of the fetched rows. Each row contains the username, name, and a comma-separated list of categories associated with the author.
     */
    public function getAuthors()
    {
        // Prepare the SQL query
        $query = "SELECT username, nome, GROUP_CONCAT(DISTINCT nomecategoria) as argomenti 
                  FROM categoria, articolo, autore, articolo_ha_categoria 
                  WHERE idarticolo=articolo AND categoria=idcategoria AND autore=idautore AND attivo=1 
                  GROUP BY username, nome";

        // Prepare the statement
        $stmt = $this->db->prepare($query);

        // Execute the statement
        $stmt->execute();

        // Get the result of the query
        $result = $stmt->get_result();

        // Fetch all rows from the result as an associative array and return it
        return $result->fetch_all(MYSQLI_ASSOC);
    }
}
