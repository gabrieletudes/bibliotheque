<?php

class model
{
    protected $cx = null;
    protected $table = '';

    public function __construct($table)
    {
        global $options;
        //Je me connecte au SGBD
        try {
            $this->cx = new PDO(DSN, USERNAME, PASSWORD, $options);
            $this->cx->query('SET CHARACTER SET UTF8');
            $this->cx->query('SET NAMES UTF8');
        } catch (PDOException $e) {
            die($e->getMessage());
        }
        $this->table = $table;
    }

}
