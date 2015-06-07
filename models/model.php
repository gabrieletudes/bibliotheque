<?php

class model
{
    protected $cx = null;

    public function __construct()
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
    }

}
