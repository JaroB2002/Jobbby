<?php 
    require_once(__DIR__."/Db.php");
    require_once(__DIR__."/User.php");

class Vacature{
    private int $id;
    private $jobtitel;
    private string $logo;
    private $bedrijfnaam;
    private $nodig;
    private $sector;
    private $job_beschrijving;
    private $vereiste;
    private $kennis;
    private $voordelen;

    private $salaris;
    private $locatie;
    private $geldig_tot;
    private $level;

    private bool $pro;

    public function getJob_beschrijving()
    {
        return $this->job_beschrijving;
    }

    public function setJob_beschrijving($job_beschrijving)
    {
        $this->job_beschrijving = $job_beschrijving;

        return $this;
    }

    public function getVereiste()
    {
        return $this->vereiste;
    }

    public function setVereiste($vereiste)
    {
        $this->vereiste = $vereiste;

        return $this;
    }

    public function getKennis()
    {
        return $this->kennis;
    }

    public function setKennis($kennis)
    {
        $this->kennis = $kennis;
    }

    public function getVoordelen()
    {
        return $this->voordelen;
    }


    public function setVoordelen($voordelen)
    {
        $this->voordelen = $voordelen;

        return $this;
    }

    public function getJobtitel()
    {
        return $this->jobtitel;
    }

    public function setJobtitel($jobtitel)
    {
        $this->jobtitel = $jobtitel;

        return $this;
    }

    /**
     * Get the value of nodig
     */ 
    public function getNodig()
    {
        return $this->nodig;
    }

    /**
     * Set the value of nodig
     *
     * @return  self
     */ 
    public function setNodig($nodig)
    {
        $this->nodig = $nodig;

        return $this;
    }

    /**
     * Get the value of salaris
     */ 
    public function getSalaris()
    {
        return $this->salaris;
    }

    /**
     * Set the value of salaris
     *
     * @return  self
     */ 
    public function setSalaris($salaris)
    {
        $this->salaris = $salaris;

        return $this;
    }

    /**
     * Get the value of locatie
     */ 
    public function getLocatie()
    {
        return $this->locatie;
    }

    /**
     * Set the value of locatie
     *
     * @return  self
     */ 
    public function setLocatie($locatie)
    {
        $this->locatie = $locatie;

        return $this;
    }

    /**
     * Get the value of geldig_tot
     */ 
    public function getGeldig_tot()
    {
        return $this->geldig_tot;
    }

    /**
     * Set the value of geldig_tot
     *
     * @return  self
     */ 
    public function setGeldig_tot($geldig_tot)
    {
        $this->geldig_tot = $geldig_tot;

        return $this;
    }

    /**
     * Get the value of level
     */ 
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Set the value of level
     *
     * @return  self
     */ 
    public function setLevel($level)
    {
        $this->level = $level;

        return $this;
    }

    public function getSector()
    {
        return $this->sector;
    }

    public function setSector($sector)
    {
        $this->sector = $sector;

        return $this;
    }

    public function getBedrijfnaam()
    {
        return $this->bedrijfnaam;
    }

    public function setBedrijfnaam($bedrijfnaam)
    {
        $this->bedrijfnaam = $bedrijfnaam;

        return $this;
    }

    public function getLogo()
    {
        return $this->logo;
    }

    public function setLogo(string $logo)
    {
        $this->logo = $logo;
        return $this;
    }

    public function getPro()
    {
        return $this->pro;
    }

    public function setPro($pro)
    {
        $this->pro = $pro;

        return $this;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    //INSERT INTO VACATURE DATABASE
    public function insertVacature(){
        $PDO = Database::getInstance();
        $statement = $PDO->prepare("INSERT INTO `vacatures`(`job_titel`, bedrijfnaam, `nodig`, sector,`job_beschrijving`, `verplichtingen`, `kennis`, `voordelen`, `salaris`, `locatie`, `job_level`, `geldig_van`, `geldig_tot`, pro_vacature) 
                                        VALUES (:job_titel, :bedrijfnaam, :nodig, :sector, :job_beschrijving, :verplichtingen, :kennis, :voordelen, :salaris, :locatie, :job_level, :geldig_van, :geldig_tot, :pro_vacature)");
        $statement->bindValue(":job_titel", $this->jobtitel);
        // $statement->bindValue(":logo", $this->logo);
        $statement->bindValue(":bedrijfnaam", $this->bedrijfnaam);
        $statement->bindValue(":nodig", $this->nodig);
        $statement->bindValue(":sector", $this->sector);
        $statement->bindvalue(":job_beschrijving", $this->job_beschrijving);
        $statement->bindValue(":verplichtingen", $this->vereiste);
        $statement->bindValue(":kennis", $this->kennis);
        $statement->bindValue(":voordelen", $this->voordelen);
        $statement->bindValue(":salaris", $this->salaris);
        $statement->bindValue(":locatie", $this->locatie);
        $statement->bindValue(":job_level", $this->level);
        $statement->bindValue(":geldig_van", date("Y-m-d"));
        $statement->bindValue(":geldig_tot", $this->geldig_tot);
        $statement->bindValue(":pro_vacature", $this->pro);

        $statement->execute();
    }

    //GET VACATURES from database
    public static function getVacatures(string $order){
        $sqlOrder = "";
        switch($order){
            case "alpha":
                $sqlOrder = "ORDER BY bedrijfnaam ASC";
                break;
            case "new":
                $sqlOrder = "ORDER BY geldig_van DESC";
                break;
                
        }

        $PDO = Database::getInstance();
        $statement = $PDO->prepare("SELECT * FROM `vacatures` " . $sqlOrder);
        $statement->execute();
        $vacatures = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $vacatures;
    }

    //get 3 last vacatures
    public static function getLastVacatures(){
        $PDO = Database::getInstance();
        $statement = $PDO->prepare("SELECT * FROM `vacatures` ORDER BY id DESC LIMIT 3");
        $statement->execute();
        $vacatures = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $vacatures;
    }


    //Get vacatures alfabetisch
    public static function getVacaturesAlphabetically(){
        $PDO = Database::getInstance();
        $statement = $PDO->prepare("SELECT * FROM `vacatures` ORDER BY bedrijfnaam ASC");
        $statement->execute();
        $vacatures = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $vacatures;
    }
   
    // Get vacatures by id
    public static function getVacatureById(int $id): array
    {
        $PDO = Database::getInstance();
        $statement = $PDO->prepare("SELECT * FROM `vacatures` WHERE id = :id");
        $statement->bindValue(":id", $id);
        $statement->execute();
        $vacature = $statement->fetch(PDO::FETCH_ASSOC);
        return $vacature;
    }

    public static function getJobBeschrijvingById(int $id): array
    {
        $PDO = Database::getInstance();
        $statement = $PDO->prepare("SELECT job_beschrijving FROM `vacatures` WHERE id = :id");
        $statement->bindValue(":id", $id);
        $statement->execute();
        $vacature = $statement->fetch(PDO::FETCH_ASSOC);
        return $vacature;
    }

    public static function getVerplichtingenById(int $id): array
    {
        $PDO = Database::getInstance();
        $statement = $PDO->prepare("SELECT verplichtingen FROM `vacatures` WHERE id = :id");
        $statement->bindValue(":id", $id);
        $statement->execute();
        $vacature = $statement->fetch(PDO::FETCH_ASSOC);
        return $vacature;
    }

    public static function getLastHoreca(){
        $PDO = Database::getInstance();
        $statement = $PDO->prepare("SELECT * FROM vacatures WHERE sector = 'Horeca' ORDER BY id DESC LIMIT 3");
        $statement->execute();
        $vacatures = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $vacatures;
    }
    
    public static function lastInformatica(){
        $PDO = Database::getInstance();
        $statement = $PDO->prepare("SELECT * FROM vacatures WHERE sector = 'Informatica' ORDER BY id DESC LIMIT 3");
        $statement->execute();
        $vacatures = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $vacatures;
    }

    public static function uploadFile(){
        $PDO = Database::getInstance();
        //upload file
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["logo"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    }

    public static function getFavoriteVacatures(){
        $PDO = Database::getInstance();
        $statement = $PDO->prepare("SELECT * FROM vacatures WHERE id IN (SELECT job_id FROM favorites WHERE user_id = :user_id)");
        $user = User::getUserByEmail($_SESSION['email']);
        $statement->bindValue(":user_id", $user['id']);
        $statement->execute();
        $vacatures = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $vacatures;
    }
}