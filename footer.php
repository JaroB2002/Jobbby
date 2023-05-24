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


<footer class="bg-gray-900 text-white">
  <div class="container mx-auto px-10 py-6 flex flex-wrap justify-between md:flex-row">
    <div class="w-full md:w-2/12 mb-6 md:mb-0">
      <h2 class="text-xl font-bold mb-4">Jobbby</h2>

      <ul>
        <li class="mb-2"><a href="tel:+32479398678" class="">Tel. +32 479 39 86 78</a></li>
        <li class="mb-2"><a href="https://www.google.com/maps/search/?api=1&query=Eikenlaan+11,+2160+Wommelgem" target="_blank" class="hover:text-blue-500">Eikenlaan 40, 2160 Wommelgem</a></li>
        <li class="mb-2"><a href="#" class="">België</a></li>
      </ul>

    </div>
    <div class="w-full md:w-2/12 mb-6 md:mb-0">
      <h2 class="text-xl font-bold mb-4">Snelle links</h2>
      <ul>
        <li class="mb-2"><a href="#" class="hover:text-blue-500">Over</a></li>
        <li class="mb-2"><a href="../Workz2/contact.php" class="hover:text-blue-500">Contact</a></li>
        <li class="mb-2"><a href="#" class="hover:text-blue-500">Prijzen</a></li>
      </ul>
    </div>
    <div class="w-full md:w-2/12 mb-6 md:mb-0">
      <h2 class="text-xl font-bold mb-4">Studenten</h2>
      <ul>
        <li class="mb-2"><a href="#" class="hover:text-blue-500">Bekijk jobs</a></li>
        <li class="mb-2"><a href="#" class="hover:text-blue-500">Bekijk aanbieders</a></li>
        <li class="mb-2"><a href="#" class="hover:text-blue-500">Opgeslagen jobs</a></li>
      </ul>
    </div>
    <div class="w-full md:w-2/12 mb-6 md:mb-0">
      <h2 class="text-xl font-bold mb-4">Werkaanbieders</h2>
      <ul> 
        <li class="mb-2"><a href="#" class="hover:text-blue-500">Plaats een vacature</a></li>
        <li class="mb-2"><a href="#" class="hover:text-blue-500">Bekijk kandidaten</a></li>
        <li class="mb-2"><a href="#" class="hover:text-blue-500">Sollicitaties</a></li>
      </ul>
    </div>
    <div class="w-full md:w-2/12 mb-6 md:mb-0">
      <h2 class="text-xl font-bold mb-4">Support</h2>
      <ul>
        <li class="mb-2"><a href="#" class="hover:text-blue-500">FAQ</a></li>
        <li class="mb-2"><a href="#" class="hover:text-blue-500">Privacy Policy</a></li>
        <li class="mb-2"><a href="#" class="hover:text-blue-500">Terms & Conditions</a></li>
      </ul>
    </div>
  </div>
</footer>
