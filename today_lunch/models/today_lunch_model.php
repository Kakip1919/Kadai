<?php


class Today_lunch
{
    protected $pdo;
    protected $sth;
    private $result;

    public function __construct()
    {
            $this->pdo = new PDO("mysql:dbname=mysql;host=localhost;charset=utf8", "root", "");
            $this->sth = $this->pdo->query('SELECT lunch_name from my_lunch');
            $this->result = $this->sth->fetchAll();
    }
    public function display_Random_Lunch(){
        $i = mt_rand(0,103);
        return $this->result[$i]["lunch_name"];
    }
}