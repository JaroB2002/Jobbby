<?php 
    require_once(__DIR__."/Db.php");

class Cv{
    private $id;
    private $voornaam;
    private $achternaam;
    private $email;
    private $geb_datum;
    private $straatnaam;
    private $gemeente;
    private $tel_nr;

    private $onderwijsinstelling;
    private $opleiding;
    private $opl_start;
    private $opl_einde;
    private $extra_opleiding;

    private $functie;
    private $werkplaats;
    private $werk_start;
    private $werk_einde;
    private $werkgever;
    private $functieomschrijving;
    private $vrijwilliger;

    private $comp_kennis;
    private $overige_prog;
    private $kan_prog;
    private $prog_talen;

    private $spreek_talen;
    private $rijbewijs;
    
    private $besch_start;
    private $besch_einde;

    private $overige;

   
    public function getId()
    {
        return $this->id;
    }
 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function getVoornaam()
    {
        return $this->voornaam;
    }

    public function setVoornaam($voornaam)
    {
        $this->voornaam = $voornaam;

        return $this;
    }

    public function getAchternaam()
    {
        return $this->achternaam;
    }

    public function setAchternaam($achternaam)
    {
        $this->achternaam = $achternaam;

        return $this;
    }
 
    public function getEmail()
    {
        return $this->email;
    }
 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    public function getGeb_datum()
    {
        return $this->geb_datum;
    }
 
    public function setGeb_datum($geb_datum)
    {
        $this->geb_datum = $geb_datum;

        return $this;
    }

    public function getGemeente()
    {
        return $this->gemeente;
    }

    public function setGemeente($gemeente)
    {
        $this->gemeente = $gemeente;

        return $this;
    }

    public function getStraatnaam()
    {
        return $this->straatnaam;
    }

    public function setStraatnaam($straatnaam)
    {
        $this->straatnaam = $straatnaam;

        return $this;
    }

    public function getTel_nr()
    {
        return $this->tel_nr;
    }
 
    public function setTel_nr($tel_nr)
    {
        $this->tel_nr = $tel_nr;

        return $this;
    }

    public function getOnderwijsinstelling()
    {
        return $this->onderwijsinstelling;
    }

    public function setOnderwijsinstelling($onderwijsinstelling)
    {
        $this->onderwijsinstelling = $onderwijsinstelling;

        return $this;
    }

    public function getOpleiding()
    {
        return $this->opleiding;
    }

    public function setOpleiding($opleiding)
    {
        $this->opleiding = $opleiding;

        return $this;
    }

    public function getOpl_start()
    {
        return $this->opl_start;
    }

    public function setOpl_start($opl_start)
    {
        $this->opl_start = $opl_start;

        return $this;
    }

    public function getOpl_einde()
    {
        return $this->opl_einde;
    }

    public function setOpl_einde($opl_einde)
    {
        $this->opl_einde = $opl_einde;

        return $this;
    }

    public function getExtra_opleiding()
    {
        return $this->extra_opleiding;
    }

    public function setExtra_opleiding($extra_opleiding)
    {
        $this->extra_opleiding = $extra_opleiding;

        return $this;
    }

    public function getFunctie()
    {
        return $this->functie;
    }

    public function setFunctie($functie)
    {
        $this->functie = $functie;

        return $this;
    }
 
    public function getWerkplaats()
    {
        return $this->werkplaats;
    }

    public function setWerkplaats($werkplaats)
    {
        $this->werkplaats = $werkplaats;

        return $this;
    }

    public function getWerk_start()
    {
        return $this->werk_start;
    }
 
    public function setWerk_start($werk_start)
    {
        $this->werk_start = $werk_start;

        return $this;
    }

    public function getWerk_einde()
    {
        return $this->werk_einde;
    }

    public function setWerk_einde($werk_einde)
    {
        $this->werk_einde = $werk_einde;

        return $this;
    }
 
    public function getWerkgever()
    {
        return $this->werkgever;
    }
 
    public function setWerkgever($werkgever)
    {
        $this->werkgever = $werkgever;

        return $this;
    }

    public function getFunctieomschrijving()
    {
        return $this->functieomschrijving;
    }

    public function setFunctieomschrijving($functieomschrijving)
    {
        $this->functieomschrijving = $functieomschrijving;

        return $this;
    }

    public function getVrijwilliger()
    {
        return $this->vrijwilliger;
    }

    public function setVrijwilliger($vrijwilliger)
    {
        $this->vrijwilliger = $vrijwilliger;

        return $this;
    }

    public function getComp_kennis()
    {
        return $this->comp_kennis;
    }

    public function setComp_kennis($comp_kennis)
    {
        $this->comp_kennis = $comp_kennis;

        return $this;
    }
 
    public function getOverige_prog()
    {
        return $this->overige_prog;
    }

    public function setOverige_prog($overige_prog)
    {
        $this->overige_prog = $overige_prog;

        return $this;
    }

    public function getKan_prog()
    {
        return $this->kan_prog;
    }

    public function setKan_prog($kan_prog)
    {
        $this->kan_prog = $kan_prog;

        return $this;
    }
 
    public function getProg_talen()
    {
        return $this->prog_talen;
    }

    public function setProg_talen($prog_talen)
    {
        $this->prog_talen = $prog_talen;

        return $this;
    }
 
    public function getSpreek_talen()
    {
        return $this->spreek_talen;
    }

    public function setSpreek_talen($spreek_talen)
    {
        $this->spreek_talen = $spreek_talen;

        return $this;
    }

    public function getRijbewijs()
    {
        return $this->rijbewijs;
    }
 
    public function setRijbewijs($rijbewijs)
    {
        $this->rijbewijs = $rijbewijs;

        return $this;
    }

    public function getBesch_start()
    {
        return $this->besch_start;
    }

    public function setBesch_start($besch_start)
    {
        $this->besch_start = $besch_start;

        return $this;
    }
 
    public function getBesch_einde()
    {
        return $this->besch_einde;
    }

    public function setBesch_einde($besch_einde)
    {
        $this->besch_einde = $besch_einde;

        return $this;
    }

    public function getOverige()
    {
        return $this->overige;
    }

    public function setOverige($overige)
    {
        $this->overige = $overige;

        return $this;
    }

    // INSERT CV INTO DATABASE
    public function insertCv(){
        $PDO = Database::getInstance();

        $statement = $PDO->prepare("INSERT INTO `cv`(`voornaam`, `achternaam`, `email`, `geb_datum`, `straatnaam`, `gemeente`, `tel_nr`, `onderwijsinstelling`, `opleiding`, `opl_start`, `opl_einde`, `extra_opleiding`, `functie`, `werkplaats`, `werk_start`, `werk_einde`, `werkgever`, `functieomschrijving`, `vrijwilliger`, `comp_kennis`, `overige_prog`, `kan_prog`, `prog_talen`, `spreek_talen`, `rijbewijs`, `besch_start`, `besch_einde`, `overige`) 
                                            VALUES (:voornaam, :achternaam, :email, :geb, :straatnaam, :gemeente, :telnr, :onderwijsinstelling, :opleiding, :oplstart, :opleinde, :extraopl, :functie, :werkplaats, :werk_start, :werk_einde, :werkgever, :functieomschrijving, :vrijwilliger, :compkennis, :overigeprog, :kanprog, :progtalen, :spreektalen, :rijbewijs, :beschstart, :bescheinde, :overige)");
        $statement->bindValue(":voornaam", $this->voornaam);
        $statement->bindValue(":achternaam", $this->achternaam);
        $statement->bindValue(":email", $this->email);
        $statement->bindValue(":geb", $this->geb_datum);
        $statement->bindValue(":straatnaam", $this->straatnaam);
        $statement->bindValue(":gemeente", $this->gemeente);
        $statement->bindValue(":telnr", $this->tel_nr);

        $statement->bindValue(":onderwijsinstelling", $this->onderwijsinstelling);
        $statement->bindValue(":opleiding", $this->opleiding);
        $statement->bindValue(":oplstart", $this->opl_start);
        $statement->bindValue(":opleinde", $this->opl_einde);
        $statement->bindValue(":extraopl", $this->extra_opleiding);

        $statement->bindValue(":functie", $this->functie);
        $statement->bindValue(":werkplaats", $this->werkplaats);
        $statement->bindValue(":werk_start", $this->werk_start);
        $statement->bindValue(":werk_einde", $this->werk_einde);
        $statement->bindValue(":werkgever", $this->werkgever);
        $statement->bindValue(":functieomschrijving", $this->functieomschrijving);
        $statement->bindValue(":vrijwilliger", $this->vrijwilliger);

        $statement->bindValue(":compkennis", $this->comp_kennis);
        $statement->bindValue(":overigeprog", $this->overige_prog);
        $statement->bindValue(":kanprog", $this->kan_prog);
        $statement->bindValue(":progtalen", $this->prog_talen);

        $statement->bindValue(":spreektalen", $this->spreek_talen);
        $statement->bindValue(":rijbewijs", $this->rijbewijs);
        $statement->bindValue(":beschstart", $this->besch_start);
        $statement->bindValue(":bescheinde", $this->besch_einde);
        $statement->bindValue(":overige", $this->overige);

        $statement->execute();
    }

    // GET CV BY ID
    public static function getCvById($id){
        $PDO = Database::getInstance();
        $statement = $PDO->prepare("SELECT * FROM `cv` WHERE id = :id");
        $statement->bindValue(":id", $id);
        $statement->execute();
        $cv = $statement->fetch(PDO::FETCH_ASSOC);
        return $cv;
    }
}