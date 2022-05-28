<?php

namespace App\Repositories;

use PDO;
use App\Repositories\AbstractRepository;

    class UserRepository extends AbstractRepository
    {

        public function __construct()
        {
            
        }
        public function authenticate(string $email){

            $stmt = $this->sql->prepare("select * from users where email = :EMAIL");
            $stmt->bindParam($email, ":EMAIL");
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            if(count($result) == 0) return false;
            return true;
        }

    }

?>