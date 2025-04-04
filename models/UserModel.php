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

    public function save(){
        $pdo = Connection::getInstance()->getConnection();
        $query = $pdo->prepare("INSERT INTO users(name, email, password, age, id_role) VALUES (:name, :email, :pass, :age, :role)");
        $result = $query->execute([ 
            ':name' =>  $this->name,
            ':email' => $this->email,
            ':pass' => $this->password,
            ':age' => $this->age,
            ':role' => $this->role
        ]);
        return $result;
        
    }
    
    public static function create($name, $email, $password, $age, $role) {
        $user = new self($name, $email, $password, $age, $role);
        return $user->save();
    }

    
}