<?php
namespace recette\config;

class Database
{
    private $_host = "localhost";
    private $_db_name = "SiteWebRecette";
    private $_username = "user";
    private $_password = "user";
    private $_conn;

    public function getConnection() {
        $this->_conn = null;

        try {
            $this->_conn = new \PDO("mysql:host=" . $this->_host . ";dbname=" . $this->_db_name, $this->_username, $this->_password);
            $this->_conn->exec("set names utf8");
        } catch (\PDOException $exception) {
            echo "Connection error: " . $exception->getMessage();
        }

        return $this->_conn;
    }
}