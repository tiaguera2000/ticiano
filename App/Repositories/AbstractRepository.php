<?php

namespace App\Repositories;

    use PDO;
    abstract class AbstractRepository{

        protected $sql;
        
        public function __construct()
        {
            $this->sql = new PDO('mysql:dbname=ticiano;host=127.0.0.1', 'root', '');    
            
            
        }
    }


?>