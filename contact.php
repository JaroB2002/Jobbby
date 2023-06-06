<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8">
  <title>Contact</title>
  
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-0z+YgOJhRceH9CLQs+ZI0GWsQc1sAaJdfxwu/p+Oa1zll0GKjhtXJrrdZvoJ8S6/3t+Wp3qmf+JyESN54zH4Gg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-0z+YgOJhRceH9CLQs+ZI0GWsQc1sAaJdfxwu/p+Oa1zll0GKjhtXJrrdZvoJ8S6/3t+Wp3qmf+JyESN54zH4Gg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="css/contact.css">

  <title>Home - Jobbby</title>


  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>

  <div class="container">  
  <?php include_once(__DIR__.'/compartments/header.php')?>

    <div class="content">
      <div class="left-side">
        <div class="address details">
          <i class="fas fa-map-marker-alt"></i>
          <div class="topic">Address</div>
          <div class="text-one">Surkhet, NP12</div>
          <div class="text-two">Birendranagar 06</div>
        </div>

        <div class="phone details">
          <i class="fas fa-phone-alt"></i>
          <div class="topic">Phone</div>
          <div class="text-one">+977 9811033808</div>
          <div class="text-two">+977 9849413719</div>
        </div>

        <div class="email details">
          <i class="fas fa-envelope"></i>
          <div class="topic">Email</div>
          <div class="text-one">jaro.brichau@outlook.com | </div>
          <div class="text-two"> zegher.baerts@outlook.com</div>
        </div>
      </div>

      <div class="right-side">
      <form action="contact.php" method="POST">
          <div class="input-field">
            <label for="name">Your Name</label>
            <input type="text" id="name" name="name" required>
          </div>

          <div class="input-field">
            <label for="email">Your Email</label>
            <input type="email" id="email" name="email" required>
          </div>

          <div class="input-field">
            <label for="message">Message</label>
            <textarea id="message" name="message" rows="8" required></textarea>
          </div>

          <button type="submit" class="submit-btn">Submit</button>
        </form>
      </div>
    </div>

    <footer>
      <?php include_once(__DIR__.'/compartments/footer.php')?>

    </footer>

  </div>
  
</body>
</html>


<?php
  if(isset($_POST['submit'])) {
    // Stel de ontvanger e-mailadres in
    $to = "jaro.brichau@outlook.com";

    // Verkrijg gebruikersinvoer
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Stel de onderwerpregel en het bericht in
    $subject = "Nieuw bericht van $name via het contactformulier";
    $body = "Naam: $name\nE-mail: $email\nBericht: $message";

    // Stuur de e-mail
    mail($to, $subject, $body);

    // Geef de gebruiker een feedback
    echo "Bedankt voor uw bericht, wij nemen zo spoedig mogelijk contact met u op.";
  }
?>