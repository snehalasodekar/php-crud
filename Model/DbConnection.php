<?php

class DbConnection
{
    private $host;
    private $dbname;
    private $username;
    private $password;
    private $port;
    protected PDO $connect;

   public function __construct()
    {
        $dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__), 'config.env.local');
        $dotenv->load();
        $this->host = $_ENV['DATABASE_HOST'];
        $this->port = $_ENV['DATABASE_PORT'];
        $this->dbname = $_ENV['DATABASE_NAME'];
        $this->username = $_ENV['DATABASE_USER'];
        $this->password = $_ENV['DATABASE_PASSWORD'];
        // echo $this->password;
        //$this->makeConnection();
        $this->connect = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->dbname .  ';port =' . $this->port, $this->username, $this->password);

    }

    public function makeConnection()
    {
        try {

            $this->connect = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->dbname .  ';port =' . $this->port, $this->username, $this->password);
            echo "Connected to  successfully.";
            return $this->connect;

        } catch (PDOException $pe) {
            echo "Could not connect to the database  $this->dbname :" . $pe->getMessage();
        }
    }

    public function testData(){

        $dbh = $this->makeConnection();


        $sql = "select * from class_table";
        $query = $dbh->query($sql);
        return $query->fetch(PDO::FETCH_ASSOC);
    }

}