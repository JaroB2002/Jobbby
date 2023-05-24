<?php 

require_once(__DIR__ . "/Db.php");

class User{
    private $id;
    private $firstname;
    private $lastname; 
    private $schoolnaam;
    private $mail;
    private $telnr;
    private $opleiding;
    private $password;

    

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of firstname
     */ 
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set the value of firstname
     *
     * @return  self
     */ 
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get the value of lastname
     */ 
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set the value of lastname
     *
     * @return  self
     */ 
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get the value of schoolnaam
     */ 
    public function getSchoolnaam()
    {
        return $this->schoolnaam;
    }

    /**
     * Set the value of schoolnaam
     *
     * @return  self
     */ 
    public function setSchoolnaam($schoolnaam)
    {
        $this->schoolnaam = $schoolnaam;

        return $this;
    }

    /**
     * Get the value of password
     */ 
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */ 
    public function setPassword($password)
    {
        // $hash = password_hash($password, PASSWORD_BCRYPT, ["cost" => 12 ]);
        $this->password = $password;

        return $this;
    }

    /**
     * Get the value of mail
     */ 
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set the value of mail
     *
     * @return  self
     */ 
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get the value of telnr
     */ 
    public function getTelnr()
    {
        return $this->telnr;
    }

    /**
     * Set the value of telnr
     *
     * @return  self
     */ 
    public function setTelnr($telnr)
    {
        $this->telnr = $telnr;

        return $this;
    }

    /**
     * Get the value of opleiding
     */ 
    public function getOpleiding()
    {
        return $this->opleiding;
    }

    /**
     * Set the value of opleiding
     *
     * @return  self
     */ 
    public function setOpleiding($opleiding)
    {
        $this->opleiding = $opleiding;

        return $this;
    }


    public function insertUser(){
        $PDO = Database::getInstance();

        $statement = $PDO->prepare("INSERT INTO student(first_name, last_name, school_name, opleiding, school_email, tel_nr, wachtwoord) 
                                                VALUES (:firstname, :lastname, :schoolnaam, :opleiding, :mail, :telnr, :password)");
        $statement->bindValue(":firstname", $this->firstname);
        $statement->bindValue(":lastname", $this->lastname);
        $statement->bindValue(":schoolnaam", $this->schoolnaam);
        $statement->bindValue(":mail", $this->mail);
        $statement->bindValue(":telnr", $this->telnr);
        $statement->bindValue(":opleiding", $this->opleiding);
        $statement->bindValue(":password", $this->password);

        $statement->execute();
    }

    public static function canLogin($mail, $password){
        $PDO = Database::getInstance();
        $statement = $PDO->prepare("SELECT * FROM `student` 
                                    WHERE school_email = :mail AND  wachtwoord = :password");
        $statement->bindValue(":mail", $mail);
        $statement->bindValue(":password", $password);
        $statement->execute();

        // var_dump($statement->rowCount());

        return ($statement->rowCount() > 0); 
        
    }

    public static function getUserbyId()
    {
        $PDO = Database::getInstance();
        $stmt = $PDO->prepare("SELECT * FROM `student` WHERE id = :id");
        $stmt->bindValue(":id", $this->id);
        $stmt->execute();

        $result = $stmt->fetch();

        if ($result == false) {
            throw new Exception("User with this id does not exist.");
        }

        return $result;
    }
    

}

