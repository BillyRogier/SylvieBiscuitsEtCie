<?php class DB
{
    private $db;
    private $username = 'root';
    private $password = 'root';
    private $database = 'localhost';
    public function __construct()
    {
        try {
            $this->db = new PDO("mysql:host=localhost;dbname=" . $this->database . "", $this->username, $this->password);
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (Exception $e) {
            exit('Erreur : ' . $e->getMessage());
        }
    }
    function selectAll($request)
    {
        $stmt = $this->db->prepare($request);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    function selectOne($request)
    {
        $stmt = $this->db->prepare($request);
        $stmt->execute();
        return $stmt->fetch();
    }
    function selectOneValue($request, $value)
    {
        $stmt = $this->db->prepare($request);
        $stmt->execute($value);
        return $stmt->fetch();
    }
    function insert($request)
    {
        $stmt = $this->db->prepare($request);
        $stmt->execute();
    }
    function delete($request)
    {
        $stmt = $this->db->prepare($request);
        $stmt->execute();
    }
    function update($request)
    {
        $stmt = $this->db->prepare($request);
        $stmt->execute();
    }
    function arraySql($request, $value)
    {
        $stmt = $this->db->prepare($request);
        $stmt->execute($value);
        return $stmt->fetchAll();
    }
    function lastInsertId()
    {
        $stmt = $this->db->lastInsertId();
        return $stmt;
    }
}
$DB = new DB();