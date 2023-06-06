<?php
session_start();
?><!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            clifford: '#da373d',
          }
        }
      }
    }
  </script>
    <style type="text/tailwindcss">
    @layer utilities {
      .content-auto {
        content-visibility: auto;
      }
    }
  </style>
  <link rel="stylesheet" href="./style.css">
  <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
  <link rel="stylesheet" href="../jobbby/css/motivatiebrief.css">
  <title>Maak je motivatiebrief</title>
</head>
<body>
  <?php include_once(__DIR__."/compartments/header.php") ?>
  <div class="mot-title">
    <h1>Schrijf hier je motivatiebrief.</h1>
  </div>
  <div  id="motivatie-uitleg">
    <p>
      Houd deze goed bij, want het document wat je hier downloadt, moet je uploaden elke keer als je solliciteert!
    </p>
  </div>


    <div class="center">
        <textarea id="motivatiebrief" class="textarea" maxlength="400" oninput="count()">Schrijf hier je motivatiebrief</textarea>
        <p id="count">Nog 400 tekens over</p>
        <button id="motivatie-button" onclick="download()">Download motivatiebrief</button>
    </div>

    <script>
        function count() {
            var maxLength = 400;
            var currentLength = document.getElementById("motivatiebrief").value.length;
            var remainingLength = maxLength - currentLength;

            if (remainingLength < 10) {
                document.getElementById("count").classList.add("red");
            } else {
                document.getElementById("count").classList.remove("red");
            }

            document.getElementById("count").innerHTML = "Nog " + remainingLength + " tekens over";
        }

        function download() {
    console.log("Download button clicked");

    var canvas = document.createElement('canvas');
    var context = canvas.getContext('2d');

    // Set canvas dimensions to match size of textarea
    canvas.width = document.getElementById("motivatiebrief").clientWidth;
    canvas.height = document.getElementById("motivatiebrief").clientHeight;

    // Set font style and color
    context.font = "16px Arial";
    context.fillStyle = "#000000"; // zwarte tekst

    // Draw textarea contents onto canvas
    context.fillText(document.getElementById("motivatiebrief").value, 10, 20);

    // Convert canvas to image and save
    var link = document.createElement('a');
    link.download = "motivatiebrief.png";
    link.href = canvas.toDataURL();
    link.click();
}
    </script>
</body>
<?php include_once(__DIR__ .' /compartments/footer.php'); ?>
</html>
