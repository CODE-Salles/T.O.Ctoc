<?php

namespace App\Core\Database;

use PDO, Exception;

class QueryBuilder
{
    protected $pdo;


    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }


    public function selectAll($table, $start_limit = null, $rows_count = null)
    {
        $sql = "SELECT * FROM {$table}";

        if($start_limit >= 0 && $rows_count > 0){
            $sql .= " LIMIT {$start_limit}, {$rows_count}";
        }

        try {
            $stmt = $this->pdo->prepare($sql);

            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_CLASS);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function selectById($id, $table)
    {
        $sql = sprintf("SELECT * FROM %s WHERE %s", $table, "id = $id");

        try {
            $stat = $this->pdo->prepare($sql);

            $stat->execute();

            return $stat->fetchAll(PDO::FETCH_CLASS);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    
    public function selectMany($table,$qnt)
    {
        $sql = sprintf("SELECT * FROM %s ORDER BY %s desc LIMIT %s", $table, 'id', $qnt);

        try {
            $stat = $this->pdo->prepare($sql);

            $stat->execute();

            return $stat->fetchAll(PDO::FETCH_CLASS);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function search($tituloDoposts, $start_limit = null, $row_amout = null)
    {
        $sql = "SELECT * FROM posts WHERE title LIKE '%{$tituloDoposts}%'";
        if ($start_limit >= 0 && $row_amout > 0) {
            $sql .= " LIMIT {$start_limit}, {$row_amout}";
        }

        try {
            $stnt = $this->pdo->prepare($sql);
            $stnt->execute();


            return $stnt->fetchAll(PDO::FETCH_CLASS);
        } catch (Exception $e) {

            die($e->getMEssage());
        }
    }

    public function countCases($table){
        $sql = "SELECT COUNT(*) FROM {$table}";

        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();

            return intval($stmt->fetch(PDO::FETCH_NUM)[0]);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    
    function login($table, $email, $password)
    {
<<<<<<< HEAD
        $sql = sprintf('SELECT * FROM %s WHERE email = :email', $table);
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $user = $stmt->fetch();

        if ($user && $password == $user['password']) {
            return true;
        } else {
            return false;
=======
        $sql = sprintf('INSERT INTO %s (%s) VALUES (%s)', $table, implode(', ', array_keys($parameters)), ':' .implode(', :', array_keys($parameters)));

        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute($parameters);

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function edit($table, $id, $parameters)
    {
        $sql = sprintf(
            'UPDATE %s SET %s WHERE %s',
            $table,
            implode(', ', array_map(function ($parameters) {
                return "{$parameters} = :{$parameters}";
            }, 
            array_keys($parameters))),
            'id = :id'
        );

        $parameters['id'] = $id;

        try {
            $stmt = $this->pdo->prepare($sql);

            $stmt->execute($parameters);

        } catch (Exception $e) {
            die($e->getMessage());
>>>>>>> cb324a18cf93f17b9067447fdafe8773d7212bdf
        }
    }

    public function delete($table, $id)
    {
        $sql = sprintf(
            'DELETE FROM %s WHERE %s;',
            $table,
            "id = :id"
        );

        try {
            $statement = $this->pdo->prepare($sql);

            $statement->execute(compact('id'));
        } catch (Exception $e) {
            die(header('Location: /admin/error'));
        }
    }

    function login($table, $email, $password)
    {
        $sql = sprintf('SELECT * FROM %s WHERE email = :email', $table);
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $user = $stmt->fetch();

        if ($user && $password == $user['password']) {
            return true;
        } else {
            return false;
        }
    }
    
}