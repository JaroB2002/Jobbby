<!DOCTYPE html>
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
  <title>Login</title>
  <link rel="stylesheet" href="./style.css">
  <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>

</head>

    <title>Maak motivatiebrief</title>
    <style>
        .center {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            height: 100vh;
        }
        
        .textarea {
            margin-top: 20px;
            padding: 10px;
            border: 1px solid #ccc;
            box-shadow: 0 0 10px rgba(0,0,0,0.2);
            resize: none;
            height: 150px;
            width: 80%;
            font-size: 16px;
        }
        
        .red {
            color: red;
        }
    </style>
</head>
<body>
    <div class="center">
        <h1>Maak motivatiebrief</h1>
        <button onclick="download()">Download motivatiebrief</button>
        <textarea id="motivatiebrief" class="textarea" maxlength="400" oninput="count()">Schrijf hier je motivatiebrief</textarea>
        <p id="count">Nog 400 tekens over</p>
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
