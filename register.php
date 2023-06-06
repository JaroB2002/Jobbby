<?php 
    include_once(__DIR__ . "/classes/Db.php");
    include_once(__DIR__ . "/classes/User.php");

    if(isset($_POST['register'])){
        $user = new User();
        $user->setFirstname($_POST['voornaam']);
        $user->setLastname($_POST['achternaam']);
        $user->setMail($_POST['email']);
        $user->setTelnr($_POST['telnr']);
        $user->setOpleiding($_POST['opleiding']);
        $user->setSchoolnaam($_POST['school']);
        $user->setPassword($_POST['password']);

        $user->insertUser();

        header('Location: login.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registreren -  Jobbby</title>
  <link rel="stylesheet" href="./style.css">
  <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
  <link rel="stylesheet" href="css/register.css">

</head>
<body>
<!-- partial:index.partial.html -->

<div class="relative md:h-screen flex overflow-hidden">
   <div class="flex flex-col sm:flex-row items-center md:items-start sm:justify-center flex-auto min-w-0 bg-white md:my-0 my-8">
     <div class="md:flex md:items-center md:justify-center w-full  md:h-full sm:rounded-lg md:rounded-none bg-white px-6">
       <div class="max-w-md w-full mx-auto">
         <div>
           <img class="mx-auto h-12 w-auto" src="Logo.png" alt="Logo project">
           <h2 class="mt-6 text-center text-3xl font-bold tracking-tight text-gray-900">Maak je studentenaccount</h2>
           <p class="mt-2 text-center text-sm text-gray-600"> Maak een <a href="registercompany.php" class="font-medium text-indigo-600 hover:text-indigo-500"> bedrijfsaccount</a>.<br><br>

           <p class="mt-2 text-center text-sm text-gray-600"> Of <a href="login.php" class="font-medium text-indigo-600 hover:text-indigo-500">log in</a>.<br><br>
           </p>
         </div>
         <form id="sign-up-form" action="" method="POST" aria-label="Sign up form">
          <div class="form-container">
            <div class="links">
                    <div class="form-part">
                        <label class="input-title" for="voornaam">Voornaam<br></label>
                        <input type="text" class="inputter" name="voornaam" id="voornaam" placeholder="Stefan">
                    </div>

                    <div class="form-part">
                        <label  class="input-title" for="achternaam">Achternaam<br></label>
                        <input type="text"  class="inputter" name="achternaam" id="achternaam" placeholder="De Steef">
                    </div>
                    
                    <div class="form-part">
                        <label  class="input-title" for="email" >School e-mail<br></label>
                        <input type="text"  class="inputter" name="email" id="email" placeholder="naam@schoolnaam.com">
                    </div>
              </div>  
              
              <div class="rechts">
                  <div class="form-part">
                      <label  class="input-title" for="telnr">Telefoonnummer<br></label>
                      <input type="text"  class="inputter" name="telnr" id="telnr" placeholder="047758692">
                  </div>

                  <div class="form-part">
                      <label  class="input-title" for="opleiding">Welke opleiding volg je?<br></label>
                      <input type="text"  class="inputter" name="opleiding" id="opleiding" placeholder="Geschiedenis">
                  </div>

                  <div class="form-part">
                    <label  class="input-title" for="password">Wachtwoord</label>
                    <div id="password-input">
                        <input type="password" class="inputter"  name="password" id="password" placeholder="...">
                        <a style="background-image: url(./assets/images/site/hidden-icon.svg)" id="show-password" aria-label="Show/hide password"></a>
                    </div>
                    <small>Moet minimum 8 karakters lang zijn.</small>
                </div>

              </div>
              
          </div>
                <div class="form-part">
                    <label for="school">Op welke school zit je?</label>
                            <select id="school" name="school">
                                <option value="Odisee">Odisee</option>
                                <option value="Luca">Luca School of Arts</option>
                                <option value="Erasmus">Erasmushogeschool</option>
                                <option value="Plantijn">Artesis Plantijn Hogeschool Antwerpen</option>
                                <option value="Thomas_More">Thomas More</option>
                            </select>
                </div>
                
                

                <div class="form-part-last">
                    <input  class="inputter" type="checkbox" name="terms-agree" id="terms-agree"> 
                    <label class="agree" for="terms-agree">
                        Ik heb de 
                        <a target="_blank" href="../jobbby/privacypolicy.php">terms and conditions</a>
                        gelezen.
                    </label>   
                </div>
        <p id="klaar" type="submit"><br><br>Klaar? Klik op <strong>Enter</strong></p>
        <input id="knop" type="submit" class="submit-button" value="Registreer" name="register">
  </form>

       </div>
     </div>
   </div>
   <div class="sm:w-2/4 hidden md:flex">
     <img class="w-full object-cover" src="https://images.pexels.com/photos/3182750/pexels-photo-3182750.jpeg" alt="">
   </div>
 </div>
 </div>

<!-- partial -->
</body>
</html>
