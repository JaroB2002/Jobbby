<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home - Jobby</title>
</head>
<body>
    <p>HET WERK KUT</p>
          <!-- Start zoekbalk -->
  <form class="flex items-center mx-auto md:ml-32 md:mr-auto">
  <label for="simple-search" class="sr-only">Zoeken</label>
  <div class="relative w-full md:w-1/2">
    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
      <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
      </svg>
    </div>
    <input type="text" id="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 pr-10 md:pr-3 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 md:w-full" placeholder="Search for work" required>
  </div>
  <button type="submit" class="p-2.5 ml-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
    </svg>
    <span class="sr-only">Zoek voor work</span>
  </button>
</form>
<!-- Einde zoekbalk -->
    </section>

  <!-- Einde Home page page -->

<!-- Cards -->
  <!-- Einde job cards -->
  <div class="hidden lg:mt-0 lg:col-span-5 lg:flex items-center justify-center">
  <img src="images/WIP.svg" alt="WIP" class="max-w-full w-auto flex-shrink-0">
</div>

  
<!-- Start microcards home page-->
<div class="center-jobs">
        <div class="all-jobs">
                <?php foreach($jobs as $job): ?>
                        <?php 
                            if($job['pro_vacature'] == 1){
                                ?><div class="entire-card-yellow"><?php
                            }else{
                                ?><div class="entire-card"><?php
                            }
                        ?>
                        <a href="../jobbby/job.php?id=<?php echo $job['id'];?>">
                            <div class="vac-title">
                                <?php echo $job['job_titel']?>
                            </div>
                        </a>
                            

                            <div class="vac-gevraagd-uurloon">
                                <p class="nodig"><?php echo $job['nodig']?></p>
                                <p class="uurloon"><?php echo "€" . $job['salaris'] . " per uur."?></p>
                            </div>

                            <div class="card-bottom">
                                <div class="side-side">
                                    <div>
                                        <img id="chrome" src="../jobbby/images/chrome.png" alt="">
                                    </div>
                                    <div class="vac-beschrijving">
                                        <div>
                                            <div class="vac-bedrijf">
                                                <p><?php echo $job['bedrijfnaam']?></p>
                                            </div>
                                            <div class="vac-locatie">
                                                <img src="../jobbby/images/loc.svg" alt="">
                                                <p><?php echo $job['locatie']?></p>
                                            </div>
                                        </div>
                                        <div class="favorite">
                                            <img src="../jobbby/images/favorite.svg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                <?php endforeach; ?>    
        </div>
    </div>
  </div>

<!-- End microcards home page-->

<!-- Drietak  Gen Z is op zoek naar ...-->
<div class="mx-auto max-w-5xl px-4 py-14">
  <div class="mb-4 flex items-center justify-between">
    <h1 class="text-left text-3xl font-semibold">Gen Z is op zoek naar</h1>
    <button target="_blank" href="jobs.php" class="rounded-lg border-2 border-gray-100 px-4 py-2 font-semibold text-blue-600">Bekijk alles</button>
  </div>

  <div class="grid gap-5 sm:grid-cols-2">
    <div class="flex w-full flex-col items-start justify-between rounded-lg bg-gray-100 p-8 shadow-md md:flex-row">
      <div class="rounded-xl bg-blue-100 p-3 sm:w-1/2">
        <img src="../jobbby/images/verkoop.jpg" alt="Verkoopsstudent" class="w-full rounded-2xl" />
      </div>
      <div class="sm:ml-4 mt-4 sm:mt-0">
        <h3 class="mb-1 text-lg font-bold">Verkoop</h3>
        <a href="jobs.php" class="mb-6 text-gray-500">Zie alle vacatures</a>
        <ul class="mt-3 list-inside list-disc">
          <?php foreach($horecas as $horeca): ?>
          <li class="list-none mb-1"><a href="../jobbby/job.php?id=<?php echo $job['id'];?>" class="text-blue-600 hover:underline"><?php echo $horeca['job_titel']; ?></a></li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>

    <div class="flex w-full flex-col items-start justify-between rounded-lg bg-gray-100 p-8 shadow-md md:flex-row">
      <div class="rounded-xl bg-blue-100 p-3 sm:w-1/2">
        <img src="../jobbby/images/content.jpg" alt="Content creator" class="w-full rounded-2xl" />
      </div>
      <div class="sm:ml-4 mt-4 sm:mt-0">
        <h3 class="mb-1 text-lg font-bold">Content creatie</h3>
        <a href="jobs.php" class="mb-6 text-gray-500">Zie alle vacatures</a>
        <ul class="mt-3 list-inside list-disc">
          <?php foreach($informaticas as $informatica):?>
          <li class="list-none mb-1"><a href="../jobbby/job.php?id=<?php echo $job['id'];?>" class="text-blue-600 hover:underline"><?php echo $informatica['job_titel']?></a></li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
  </div>
</div>


<!-- EINDE Drietak  Gen Z is op zoek naar ...-->


</body>
</html>


