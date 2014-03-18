<?php

/*
 * -------------------------------------
 * www.dlancedu.com | Jaisiel Delance
 * framework mvc basico
 * Database.php
 * -------------------------------------
 */


class Database  extends PDO
{
    public function __construct(){
      parent::__construct(
        'pgsql:host=' . DB_HOST .
            ';dbname=' . DB_NAME ,
             DB_USER, 
             DB_PASS );
    }
}


?>