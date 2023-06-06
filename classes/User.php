<?php


require_once(__DIR__ . "/Db.php");

class User
{
    private $id;
    private $firstname;
    private $lastname;
    private $schoolnaam;
    private $mail;
    private $telnr;
    private $opleiding;
    private $password;
    private $kbo;
    private $bedrijfsnaam;
    private $werkemail;
    private $isbedrijf;

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
        $hash = password_hash($password, PASSWORD_BCRYPT, ["cost" => 12 ]);
        $this->password = $hash;

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

    /**
     * Get the value of kbo
     */
    public function getKbo()
    {
        return $this->kbo;
    }

    /**
     * Set the value of kbo
     *
     * @return  self
     */
    public function setKbo($kbo)
    {
        $this->kbo = $kbo;

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
     * Get the value of werkemail
     */
    public function getWerkemail()
    {
        return $this->werkemail;
    }

    /**
     * Set the value of werkemail
     *
     * @return  self
     */
    public function setWerkemail($werkemail)
    {
        $this->werkemail = $werkemail;

        return $this;
    }


    public function insertUser()
    {
        $PDO = Database::getInstance();

        $statement = $PDO->prepare("INSERT INTO users(first_name, last_name, school_name, opleiding, school_email, tel_nr, wachtwoord, is_bedrijf) 
                                                VALUES (:firstname, :lastname, :schoolnaam, :opleiding, :mail, :telnr, :password, :isbedrijf)");
        $statement->bindValue(":firstname", $this->firstname);
        $statement->bindValue(":lastname", $this->lastname);
        $statement->bindValue(":schoolnaam", $this->schoolnaam);
        $statement->bindValue(":mail", $this->mail);
        $statement->bindValue(":telnr", $this->telnr);
        $statement->bindValue(":opleiding", $this->opleiding);
        $statement->bindValue(":password", $this->password);
        $statement->bindValue(":isbedrijf", 0);

        $statement->execute();
    }

    public function insertBedrijf()
    {
        $PDO = Database::getInstance();
        $statement = $PDO->prepare('INSERT INTO users (first_name, last_name, kbo_nummer, bedrijfnaam, werk_email, tel_nr, wachtwoord, is_bedrijf) 
                                                VALUES (:firstname, :lastname, :kbo, :bedrijfsnaam, :mail, :telnr, :password, :isbedrijf)');
        $statement->bindValue(":firstname", $this->firstname);
        $statement->bindValue(":lastname", $this->lastname);
        $statement->bindValue(":kbo", $this->kbo);
        $statement->bindValue(":bedrijfsnaam", $this->bedrijfsnaam);
        $statement->bindValue(":mail", $this->werkemail);
        $statement->bindValue(":telnr", $this->telnr);
        $statement->bindValue(":password", $this->password);
        $statement->bindValue(":isbedrijf", 1);
        $statement->execute();
    }

    public static function canLogin($mail, $password)
    {
        $PDO = Database::getInstance();
        $statement = $PDO->prepare("SELECT * FROM users WHERE school_email = :mail OR werk_email = :workmail");
        $statement->bindValue(":mail", $mail);
        $statement->bindValue(":workmail", $mail);
        $statement->execute();

        $user = $statement->fetch(PDO::FETCH_ASSOC);

        if (!$user) {
            throw new Exception("Email not found");
        }

        return password_verify($password, $user['wachtwoord']);
    }

    public static function getUserbyId(int $id)
    {
        $PDO = Database::getInstance();
        $statement = $PDO->prepare("SELECT * FROM users WHERE id = :id");
        $statement->bindValue(":id", $id);
        $statement->execute();

        $user = $statement->fetch(PDO::FETCH_ASSOC);
        return $user;
    }

    public static function getUserByEmail()
    {
        $PDO = Database::getInstance();
        $statement = $PDO->prepare("SELECT * FROM users WHERE school_email = :mail OR werk_email = :workmail");
        $statement->bindValue(":mail", $_SESSION['email']);
        $statement->bindValue(":workmail", $_SESSION['email']);
        $statement->execute();

        $user = $statement->fetch(PDO::FETCH_ASSOC);
        return $user;
    }

    public static function isBedrijf()
    {
        $PDO = Database::getInstance();
        $statement = $PDO->prepare("SELECT * FROM users WHERE is_bedrijf = 1");
        $statement->execute();

        $user = $statement->fetch(PDO::FETCH_ASSOC);
        return $user;
    }

    public static function getAantalJobsGedaan(int $id)
    {
        $PDO = Database::getInstance();
        $statement = $PDO->prepare("SELECT jobs_gedaan FROM users WHERE id = :id");
        $statement->bindValue(":id", $id);
        return $statement->fetch();
    }
}
