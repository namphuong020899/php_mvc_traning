<?php

class Database
{
    private $__con;
    public function __construct()
    {
        global $dbConfig;
        $this->__con = Connection::getInstance($dbConfig);
    }

    public function insert($table, $data)
    {
        if (!empty($data)) {
            $fieldStr = '';
            $valStr = '';
            foreach ($data as $key => $val) {
                $fieldStr .= $key . ",";
                $valStr .= $val . ",";
            }
            $fieldStr = rtrim($fieldStr, ',');
            $valStr = rtrim($valStr, ',');
            $sql = "INSERT INTO {$table}({$fieldStr}) VALUES {$valStr}";

            $status = $this->query($sql);
            if ($status) {
                return true;
            }
        }
        return false;
    }

    public function update($table, $data, $condition = '')
    {
        if (!empty($data)) {
            $dataStr = '';
            foreach ($data as $key => $val) {
                $dataStr .= "$key='$val',";
            }
            $dataStr = rtrim($dataStr, ',');
            if (!empty($condition)) {
                $sql = "UPDATE {$table} SET {$dataStr} WHERE {$condition}";
            } else {
                $sql = "UPDATE {$table} SET {$dataStr}";
            }

            $status = $this->query($sql);
            if ($status) {
                return true;
            }
        }
        return false;
    }

    public function delete($table, $condition = '')
    {
        if (!empty($condition)) {
            $sql = "DELETE FROM {$table} WHERE {$condition}";
        } else {
            $sql = "DELETE FROM {$table}";
        }

        $status = $this->query($sql);
        if ($status) {
            return true;
        }
        return false;
    }

    public function query($sql)
    {
        $statement = $this->__con->prepare($sql);
        $statement->execute();

        return $statement;
    }

    public function lastInsertId()
    {
        return $this->__con->lastInsertId();
    }
}
