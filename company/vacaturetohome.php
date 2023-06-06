<?php 
      session_start();

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/cvmaker.css">
</head>
<body>
<?php include_once('header.php'); ?>
<div class="flex items-center justify-center min-h-screen bg-blue-100">
    <div class="max-w-md mx-auto p-8 bg-white rounded shadow-lg">
        <h1 class="text-4xl font-bold mb-4" id="title-cv-send">Je vacature is succesvol geupload!</h1>
        <p>U wordt terug naar de home-pagina gestuurd!</p>
    </div>
</div>

<?php include_once('../compartments/footer.php'); ?>
<script>
    setTimeout(function(){
        window.location.href = "../index.php";
    }, 5000);
</script>
</body>
</html>
