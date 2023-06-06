<?php 

require_once(__DIR__ . "/Db.php");

class Sollicitaties{
    private $id;
    private $user_id;
    private $job_titel;
    private $bedrijfsnaam;
    private $status;
    private $datum;
    private $cv;
    private $mv;

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
     * Get the value of user_id
     */ 
    public function getUser_id()
    {
        return $this->user_id;
    }

    /**
     * Set the value of user_id
     *
     * @return  self
     */ 
    public function setUser_id($user_id)
    {
        $this->user_id = $user_id;

        return $this;
    }

    /**
     * Get the value of job_titel
     */ 
    public function getJob_titel()
    {
        return $this->job_titel;
    }

    /**
     * Set the value of job_titel
     *
     * @return  self
     */ 
    public function setJob_titel($job_titel)
    {
        $this->job_titel = $job_titel;

        return $this;
    }

    /**
     * Get the value of bedrijfsnaam
     */ 
    public function getBedrijfsnaam()
    {
        return $this->bedrijfsnaam;
    }

    /**
     * Set the value of bedrijfsnaam
     *
     * @return  self
     */ 
    public function setBedrijfsnaam($bedrijfsnaam)
    {
        $this->bedrijfsnaam = $bedrijfsnaam;

        return $this;
    }

    /**
     * Get the value of status
     */ 
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set the value of status
     *
     * @return  self
     */ 
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get the value of datum
     */ 
    public function getDatum()
    {
        return $this->datum;
    }

    /**
     * Set the value of datum
     *
     * @return  self
     */ 
    public function setDatum($datum)
    {
        $this->datum = $datum;

        return $this;
    }

    /**
     * Get the value of cv
     */ 
    public function getCv()
    {
        return $this->cv;
    }

    /**
     * Set the value of cv
     *
     * @return  self
     */ 
    public function setCv($cv)
    {
        $this->cv = $cv;

        return $this;
    }

    /**
     * Get the value of mv
     */ 
    public function getMv()
    {
        return $this->mv;
    }

    /**
     * Set the value of mv
     *
     * @return  self
     */ 
    public function setMv($mv)
    {
        $this->mv = $mv;

        return $this;
    }

    public function insertSollicitatie(){
        $conn = Database::getInstance();
        $statement = $conn->prepare("INSERT INTO `sollicitaties`(user_id, job, bedrijfnaam, status, datum) VALUES (:id, :job_titel, :bedrijfsnaam, :status, :datum)");
        $statement->bindValue(":id", $this->user_id);
        $statement->bindValue(":job_titel", $this->job_titel);
        $statement->bindValue(":bedrijfsnaam", $this->bedrijfsnaam);
        $statement->bindValue(":status", $this->status);
        $statement->bindValue(":datum", $this->datum);
        $result = $statement->execute();
        return $result;
    }

    public function getSollicitaties(int $id){
        $conn = Database::getInstance();
        $statement = $conn->prepare("SELECT * FROM sollicitaties WHERE user_id = :id");
        $statement->bindValue(":id", $id);
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public static function getAantalSollicitaties(){
        $conn = Database::getInstance();
        $statement = $conn->prepare("SELECT COUNT(*) FROM sollicitaties WHERE user_id = :id");
        $user = User::getUserByEmail($_SESSION['email']);
        $statement->bindValue(":id", $user['id']);
        $statement->execute();
        return $statement->fetch();
    }
}
