<?php

class UsersModel{
    public $id_user;
    public $name;
    public $email;
    public $password;
    
    public $age;
    public $role;
    
    public function __construct( $name, $email, $age, $role, $password)
    {
        
        $this->name= $name;
        $this->email= $email;
        $this->age = $age;
        $this->role =$role;
        $this->password = $password; 
    }

    
    public static function all(){
        $pdo = Connection::getInstance()->getConnection();
        $query = $pdo->query("SELECT id_user, name FROM users");
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public static function findEmailAndPassword($email, $password){
        $pdo = Connection::getInstance()->getConnection();
        $query = $pdo->prepare("SELECT * FROM users WHERE email = :email AND password = :pass");
        $query->bindParam(":email", $email);
        $query->bindParam(":pass", $password);
        $query->execute();

        $user = $query->fetch(PDO::FETCH_ASSOC);
        return $user;    
    }

    public function save() {
        $pdo = Connection::getInstance()->getConnection();
        
        
        $role = ($this->role == 1) ? 1 : 2;
        
        $query = $pdo->prepare("
            INSERT INTO users(name, email, password, age, id_role) 
            VALUES (:name, :email, :pass, :age, :role)
        ");
        
        return $query->execute([
            ':name' => $this->name,
            ':email' => $this->email,
            ':pass' => $this->password,
            ':age' => $this->age,
            ':role' => $role
        ]);
    }
    
    public static function create($name, $email, $password, $age, $role) {
        try {
            $pdo = Connection::getInstance()->getConnection();
            
           
            if (empty($name) || empty($email) || empty($password) || empty($age)) {
                return false;
            }
            
            
            $role = ($role == 1) ? 1 : 2;
            
            $query = $pdo->prepare("
                INSERT INTO users(name, email, password, age, id_role) 
                VALUES (:name, :email, :pass, :age, :role)
            ");
            
            return $query->execute([
                ':name' => $name,
                ':email' => $email,
                ':pass' => $password, 
                ':age' => $age,
                ':role' => $role
            ]);
        } catch (PDOException $e) {
            error_log("Database error: " . $e->getMessage());
            return false;
        }
    }

    
}