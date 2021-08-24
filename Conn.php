<?php 

class Conn
{
    public $username = 'root';
    public $password = '';
    public $dsn = 'mysql:dbname=php_oo;host=localhost';
    public $connect = null;

    public function Connect()
    {
        try {
            $this->connect = new PDO($this->dsn, $this->username, $this->password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));

            return $this->connect;

        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
