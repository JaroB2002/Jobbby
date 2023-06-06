<?php 
require_once(__DIR__ . "/Db.php");
require_once(__DIR__ . "/User.php");


class Favorites{
    private $job_id;
    private $user_id;

    public function getJob_id()
    {
        return $this->job_id;
    }

    public function setJob_id($job_id)
    {
        $this->job_id = $job_id;

        return $this;
    }

    public function getUser_id()
    {
        return $this->user_id;
    }

    public function setUser_id($user_id)
    {
        $this->user_id = $user_id;

        return $this;
    }

    public static function addFavorites($job_id, int $user_id){
        $PDO = Database::getInstance();
        $statement = $PDO->prepare("INSERT INTO favorites(user_id, job_id) 
                                            VALUES (:user_id, :job_id)");
        $statement->bindValue(":job_id", $job_id);
        $statement->bindValue(":user_id", $user_id);

        $statement->execute();
    }

    public static function getMyFavorites(){
        $PDO = Database::getInstance();
        $statement = $PDO->prepare("SELECT COUNT(*) FROM favorites WHERE user_id = :user_id");
        $user = User::getUserByEmail($_SESSION['email']);
        $statement->bindValue(":user_id", $user['id']);
        $statement->execute();

        $favorites = $statement->fetch();
        return $favorites;
    }

    public static function removeFavorite(){
        $PDO = Database::getInstance();
        $statement = $PDO->prepare("DELETE FROM favorites WHERE user_id = :user_id AND job_id = :job_id");
        $user = User::getUserByEmail($_SESSION['email']);
        $statement->bindValue(":user_id", $user['id']);
        $statement->bindValue(":job_id", $_POST['id']);
        $statement->execute();
    }
}
