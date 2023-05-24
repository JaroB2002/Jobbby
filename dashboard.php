<!-- <h1>Dit issssssssss de pagina voor mensen die NIET ingelogd zijn</h1>
 -->

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




  <!-- Start Home page page -->
  <section class="bg-white dark:bg-gray-900">
        <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
            <div class="mr-auto place-self-center lg:col-span-7">
                <h1 class="max-w-2xl mb-4 text-4xl font-extrabold leading-none md:text-5xl xl:text-6xl dark:text-white">Zoek je nieuwe studentenjob in één klik</h1>
                <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">Wij bij Jobbby vinden het makkelijk als jij je studentenjob zo snel mogelijk kan vinden om je cv uit te breiden!</p>
                <a href="#" class="inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                    Log in als student
                    <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </a>
                <a href="#" class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-gray-900 border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                    Log in als werkgever
                </a> 
            </div>
            <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
                <img src="images/ILSVGSTUD.svg" alt="Student picture vector">
            </div>                
        </div>
    </section>

  <!-- Einde Home page page -->

  <!-- Start zoekbalk -->
  <form class="flex items-center mx-auto md:ml-32 md:mr-auto">
  <label for="simple-search" class="sr-only">Search for work</label>
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
    <span class="sr-only">Search for work</span>
  </button>
</form>

  <!-- Einde zoekbalk -->
  
  
  <!-- Start job cards -->
<!-- Cards -->


<!DOCTYPE html>
<html lang="en" >
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-0z+YgOJhRceH9CLQs+ZI0GWsQc1sAaJdfxwu/p+Oa1zll0GKjhtXJrrdZvoJ8S6/3t+Wp3qmf+JyESN54zH4Gg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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




  <!-- Einde job cards -->
  <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
                <img src="WIP.svg" alt="WIP">
            </div>      
<!-- Start microcards home page-->
<div class="m-7 mx-auto flex max-w-7xl flex-col px-5">
  <div class="grid grid-cols-1 gap-6 sm:grid-cols-3">
    <div class="rounded-xl border-2 border-gray-100 bg-white p-6 shadow-sm">
      <div class="mb-4 text-lg font-bold">Lorem Ipsum</div>
      <div class="mb-5 flex flex-row items-center gap-2">
        <div class="rounded-md bg-green-200 px-2 py-1 text-xs font-semibold uppercase text-green-600">Student</div>
        <div class="text-gray-500">Salaris: €15/uur - €20/uur</div>
      </div>
      <div class="flex flex-row items-center justify-between">
        <div class="flex flex-row items-center">
          <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-gray-100">
            <img class="h-10" src="https://www.freepnglogos.com/uploads/google-logo-png/google-logo-png-webinar-optimizing-for-success-google-business-webinar-13.png" alt="" />
          </div>
          <div class="ml-2">
            <div class="mb-1 text-sm font-semibold">Google Inc</div>
            <div class="flex flex-row items-center">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-4 w-4 text-gray-400">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
              </svg>
              <div class="text-xs font-medium text-gray-400">Wommelgem</div>
            </div>
          </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 text-gray-400">
          <path stroke-linecap="round" stroke-linejoin="round" d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0111.186 0z" />
        </svg>
      </div>
    </div>

    <div class="rounded-xl border-2 border-gray-100 bg-white p-6 shadow-sm">
      <div class="mb-4 text-lg font-bold">Lorem Ipsum</div>
      <div class="mb-5 flex flex-row items-center gap-2">
        <div class="rounded-md bg-green-200 px-2 py-1 text-xs font-semibold uppercase text-green-600">Student</div>
        <div class="text-gray-500">Salaris: €15/uur - €20/uur</div>
      </div>
      <div class="flex flex-row items-center justify-between">
        <div class="flex flex-row items-center">
          <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-gray-100">
            <img class="h-10" src="https://www.freepnglogos.com/uploads/google-logo-png/google-logo-png-webinar-optimizing-for-success-google-business-webinar-13.png" alt="" />
          </div>
          <div class="ml-2">
            <div class="mb-1 text-sm font-semibold">Google Inc</div>
            <div class="flex flex-row items-center">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-4 w-4 text-gray-400">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
              </svg>
              <div class="text-xs font-medium text-gray-400">Wommelgem</div>
            </div>
          </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 text-gray-400">
          <path stroke-linecap="round" stroke-linejoin="round" d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0111.186 0z" />
        </svg>
      </div>
    </div>

    <div class="relative rounded-xl border-2 border-gray-100 bg-gradient-to-r from-yellow-300/50 p-6 shadow-sm">
      <div class="absolute -right-2 -top-3 rotate-12">
        <div class="rounded-xl bg-yellow-500 px-4 py-1 font-semibold text-white shadow-2xl">Pro</div>
      </div>
      <div class="mb-4 text-lg font-bold">Lorem Ipsum</div>
      <div class="mb-5 flex flex-row items-center gap-2">
        <div class="rounded-md bg-green-200 px-2 py-1 text-xs font-semibold uppercase text-green-600">Student</div>
        <div class="text-gray-500">Salaris: €15/uur - €20/uur</div>
      </div>
      <div class="flex flex-row items-center justify-between">
        <div class="flex flex-row items-center">
          <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-gray-100">
            <img class="h-10" src="https://www.freepnglogos.com/uploads/google-logo-png/google-logo-png-webinar-optimizing-for-success-google-business-webinar-13.png" alt="" />
          </div>
          <div class="ml-2">
            <div class="mb-1 text-sm font-semibold">Google Inc</div>
            <div class="flex flex-row items-center">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-4 w-4 text-gray-400">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
              </svg>
              <div class="text-xs font-medium text-gray-400">Wommelgem</div>
            </div>
          </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 text-gray-400">
          <path stroke-linecap="round" stroke-linejoin="round" d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0111.186 0z" />
        </svg>
      </div>
    </div>
  </div>
</div>

<!-- End microcards home page-->

<!-- Drietak  Gen Z is op zoek naar ...-->
<h1 class="text-left">Gen Z is op zoek naar</h1>
<div class="flex flex-col md:flex-row md:space-x-4">
  <div class="flex w-full flex-col overflow-hidden rounded-lg bg-gray-100 shadow-md md:w-1/3 md:flex-row">
    <img src="https://via.placeholder.com/300x200" alt="Afbeelding" class="h-auto w-full md:w-1/3" />
    <div class="p-4 md:w-2/3">
      <h3 class="mb-2 text-lg font-bold">Verkoop</h3>
      <ul class="list-inside list-disc">
        <li><a href="#" class="text-blue-600 hover:underline">Tekst opsomming 1</a></li>
        <li><a href="#" class="text-blue-600 hover:underline">Tekst opsomming 2</a></li>
        <li><a href="#" class="text-blue-600 hover:underline">Tekst opsomming 3</a></li>
      </ul>
    </div>
  </div>

  <div class="flex w-full flex-col overflow-hidden rounded-lg bg-gray-100 shadow-md md:w-1/3 md:flex-row">
    <img src="https://via.placeholder.com/300x200" alt="Afbeelding" class="h-auto w-full md:w-1/3" />
    <div class="p-4 md:w-2/3">
      <h3 class="mb-2 text-lg font-bold">Toerisme</h3>
      <ul class="list-inside list-disc">
        <li><a href="#" class="text-blue-600 hover:underline">Tekst opsomming 1</a></li>
        <li><a href="#" class="text-blue-600 hover:underline">Tekst opsomming 2</a></li>
        <li><a href="#" class="text-blue-600 hover:underline">Tekst opsomming 3</a></li>
      </ul>
    </div>
  </div>

  <div class="flex w-full flex-col overflow-hidden rounded-lg bg-gray-100 shadow-md md:w-1/3 md:flex-row">
    <img src="https://via.placeholder.com/300x200" alt="Afbeelding" class="h-auto w-full md:w-1/3" />
    <div class="p-4 md:w-2/3">
      <h3 class="mb-2 text-lg font-bold">Content creatie</h3>
      <ul class="list-inside list-disc">
        <li><a href="#" class="text-blue-600 hover:underline">Tekst opsomming 1</a></li>
        <li><a href="#" class="text-blue-600 hover:underline">Tekst opsomming 2</a></li>
        <li><a href="#" class="text-blue-600 hover:underline">Tekst opsomming 3</a></li>
      </ul>
    </div>
  </div>
</div>
<!-- EINDE Drietak  Gen Z is op zoek naar ...-->



<!-- Reviews hieronder -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<link href="https://unpkg.com/swiper/swiper-bundle.min.css" rel="stylesheet" />

<section class="bg-gray-100">
  <div
    class="mx-auto max-w-[1640px] px-4 py-16 sm:px-6 sm:py-24 lg:me-0 lg:pe-0 lg:ps-8"
  >
  
    <div
      class="grid grid-cols-1 gap-y-8 lg:grid-cols-3 lg:items-center lg:gap-x-16"
    >
      <div class="max-w-xl text-center ltr:sm:text-left rtl:sm:text-right">
        <h2 class="text-3xl font-bold tracking-tight sm:text-4xl">
          Je hoeft ons niet te geloven...
          <br class="hidden sm:block lg:hidden" />
          Lees gewoon de reviews van klanten
        </h2>

        <p class="mt-4 text-gray-500">
   Klanten hebben ons beoordeeld, en dit is wat ze te zeggen hebben:
        </p>

        <div class="hidden lg:mt-8 lg:flex lg:gap-4">
          <button
            class="prev-button rounded-full border border-blue-600 p-3 text-blue-600 hover:bg-blue-600 hover:text-white"
          >
            <span class="sr-only">Previous Slide</span>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke-width="1.5"
              stroke="currentColor"
              class="h-5 w-5 rtl:rotate-180"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M15.75 19.5L8.25 12l7.5-7.5"
              />
            </svg>
          </button>

          <button
            class="next-button rounded-full border border-blue-600 p-3 text-blue-600 hover:bg-blue-600 hover:text-white"
          >
            <span class="sr-only">Next Slide</span>
            <svg
              class="h-5 w-5 rtl:rotate-180"
              fill="none"
              stroke="currentColor"
              viewBox="0 0 24 24"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M9 5l7 7-7 7"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
              />
            </svg>
          </button>
        </div>
      </div>

      <div class="-mx-6 lg:col-span-2 lg:mx-0">
        <div class="swiper-container !overflow-hidden">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <blockquote
                class="flex h-full flex-col justify-between bg-white p-12"
              >
                <div>
                  <div class="flex gap-0.5 text-blue-100">
                    <svg
                      class="h-5 w-5"
                      fill="currentColor"
                      viewBox="0 0 20 20"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                      />
                    </svg>

                    <svg
                      class="h-5 w-5"
                      fill="currentColor"
                      viewBox="0 0 20 20"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                      />
                    </svg>

                    <svg
                      class="h-5 w-5"
                      fill="currentColor"
                      viewBox="0 0 20 20"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                      />
                    </svg>

                    <svg
                      class="h-5 w-5"
                      fill="currentColor"
                      viewBox="0 0 20 20"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                      />
                    </svg>

                    <svg
                      class="h-5 w-5"
                      fill="currentColor"
                      viewBox="0 0 20 20"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                      />
                    </svg>
                  </div>

                  <div class="mt-4">
                    <p class="text-2xl font-bold text-blue-600 sm:text-3xl">
                      Fantastisch
                    </p>

                    <p class="mt-4 leading-relaxed text-gray-500">
                     Als werkgever ben ik enorm tevreden over Jobbby. De kwaliteit van de kandidaten is hoog en de communicatie met Jobbby is prettig. Ik kan Jobbby aan iedereen aanbevelen.
                    </p>
                  </div>
                </div>

                <footer class="mt-8 text-sm text-gray-500">
                  &mdash; Michael De Bruyn
                </footer>
              </blockquote>
            </div>

            <div class="swiper-slide">
              <blockquote
                class="flex h-full flex-col justify-between bg-white p-12"
              >
                <div>
                  <div class="flex gap-0.5 text-blue-100">
                    <svg
                      class="h-5 w-5"
                      fill="currentColor"
                      viewBox="0 0 20 20"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                      />
                    </svg>

                    <svg
                      class="h-5 w-5"
                      fill="currentColor"
                      viewBox="0 0 20 20"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                      />
                    </svg>

                    <svg
                      class="h-5 w-5"
                      fill="currentColor"
                      viewBox="0 0 20 20"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                      />
                    </svg>

                    <svg
                      class="h-5 w-5"
                      fill="currentColor"
                      viewBox="0 0 20 20"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                      />
                    </svg>

                    <svg
                      class="h-5 w-5"
                      fill="currentColor"
                      viewBox="0 0 20 20"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                      />
                    </svg>
                  </div>

                  <div class="mt-4">
                    <p class="text-2xl font-bold text-blue-600 sm:text-3xl">
                      Knap werk
                    </p>

                    <p class="mt-4 leading-relaxed text-gray-500">
                      Dat dit platform gemaakt is door twee studenten merk je nogeens niet. Het is zo'n goed platform, ik vind er altijd goede studentenjobs op. Ik raad het iedereen aan!
                    </p>
                  </div>
                </div>

                <footer class="mt-8 text-sm text-gray-500">
                  &mdash; Mo El Kaliki
                </footer>
              </blockquote>
            </div>

            <div class="swiper-slide">
              <blockquote
                class="flex h-full flex-col justify-between bg-white p-12"
              >
                <div>
                  <div class="flex gap-0.5 text-blue-100">
                    <svg
                      class="h-5 w-5"
                      fill="currentColor"
                      viewBox="0 0 20 20"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                      />
                    </svg>

                    <svg
                      class="h-5 w-5"
                      fill="currentColor"
                      viewBox="0 0 20 20"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                      />
                    </svg>

                    <svg
                      class="h-5 w-5"
                      fill="currentColor"
                      viewBox="0 0 20 20"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                      />
                    </svg>

                    <svg
                      class="h-5 w-5"
                      fill="currentColor"
                      viewBox="0 0 20 20"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                      />
                    </svg>

                    <svg
                      class="h-5 w-5"
                      fill="currentColor"
                      viewBox="0 0 20 20"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                      />
                    </svg>
                  </div>

                  <div class="mt-4">
                    <p class="text-2xl font-bold text-blue-600 sm:text-3xl">
                      Hoogstaande kwaliteit
                    </p>

                    <p class="mt-4 leading-relaxed text-gray-500">
                      Als werkgever is het vaak moeilijk om de juiste student te vinden voor een kleine microjob. Dankzij de elite formule van Jobbby is dit verleden tijd. 
                    </p>
                  </div>
                </div>

                <footer class="mt-8 text-sm text-gray-500">
                  &mdash; Alisia Van den Steeve
                </footer>
              </blockquote>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="mt-8 flex justify-center gap-4 lg:hidden">
      <button
        aria-label="Previous slide"
        class="prev-button rounded-full border border-blue-600 p-4 text-blue-600 hover:bg-blue-600 hover:text-white"
      >
        <svg
          class="h-5 w-5 -rotate-180 transform"
          fill="none"
          stroke="currentColor"
          viewBox="0 0 24 24"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            d="M9 5l7 7-7 7"
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
          />
        </svg>
      </button>

      <button
        aria-label="Next slide"
        class="next-button rounded-full border border-blue-600 p-4 text-blue-600 hover:bg-blue-600 hover:text-white"
      >
        <svg
          class="h-5 w-5"
          fill="none"
          stroke="currentColor"
          viewBox="0 0 24 24"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            d="M9 5l7 7-7 7"
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
          />
        </svg>
      </button>
    </div>
  </div>
</section>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    new Swiper('.swiper-container', {
      loop: true,
      slidesPerView: 2,
      spaceBetween: 32,
      autoplay: {
        delay: 8000,
      },
      breakpoints: {
        640: {
          centeredSlides: true,
          slidesPerView: 1.25,
        },
        1024: {
          centeredSlides: false,
          slidesPerView: 1.5,
        },
      },
      navigation: {
        nextEl: '.next-button',
        prevEl: '.prev-button',
      },
    })
  })
</script>
<!-- EINDE Reviews -->

<!-- Start register/login block -->
<div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
  <div class="p-6 rounded-lg border">
    <h2 class="text-lg font-medium mb-4">Registreer je als bedrijf</h2>
    <p class="mb-4">Altijd al gewild om je cv uit te breiden en je droomstudentenjob te vinden? Dromen bestaan niet, of toch wel?! Met Jobbby komen je dromen uit!</p>
    <div class="flex justify-end">
      <button class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Login als bedrijf</button>
      <button class="ml-4 px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Registreer als bedrijf</button>
    </div>
  </div>
  <div class="p-6 rounded-lg border">
    <h2 class="text-lg font-medium mb-4">Registreer je als student</h2>
    <p class="mb-4">Altijd al gewild om studenten werkervaring te geven? Jij kan ze helpen! Als bedrijf heb je iemand die je jobs kan uitvoeren zonder veel geld eraan te moeten besteden.</p>
    <div class="flex justify-end">
      <button class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Login als bedrijf</button>
      <button class="ml-4 px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Registreer als bedrijf</button>
    </div>
  </div>
</div>
<!-- End register/login block -->

<!-- Start footer -->
<footer class="bg-gray-900 text-white">
  <div class="container mx-auto px-10 py-6 flex flex-wrap justify-between md:flex-row">
    <div class="w-full md:w-2/12 mb-6 md:mb-0">
      <h2 class="text-xl font-bold mb-4">Jobbby</h2>
      <p class="mb-2">Telefoon</p>
      <p class="mb-4">+32 479 39 86 78</p>
      <p>Eikenlaan 40, 2160 Wommelgem</p>
      <p>België</p>
    </div>
    <div class="w-full md:w-2/12 mb-6 md:mb-0">
      <h2 class="text-xl font-bold mb-4">Snelle links</h2>
      <ul>
        <li class="mb-2"><a href="#">About</a></li>
        <li class="mb-2"><a href="#">Contact</a></li>
        <li class="mb-2"><a href="#">Pricing</a></li>
      </ul>
    </div>
    <div class="w-full md:w-2/12 mb-6 md:mb-0">
      <h2 class="text-xl font-bold mb-4">Studenten</h2>
      <ul>
        <li class="mb-2"><a href="#">Bekijk jobs</a></li>
        <li class="mb-2"><a href="#">Bekijk aanbieders</a></li>
        <li class="mb-2"><a href="#">Opgeslagen jobs</a></li>
      </ul>
    </div>
    <div class="w-full md:w-2/12 mb-6 md:mb-0">
      <h2 class="text-xl font-bold mb-4">Werkaanbieders</h2>
      <ul>
        <li class="mb-2"><a href="#">Plaats een vacature</a></li>
        <li class="mb-2"><a href="#">Bekijk kandidaten</a></li>
        <li class="mb-2"><a href="#">Sollicitaties</a></li>
      </ul>
    </div>
    <div class="w-full md:w-2/12 mb-6 md:mb-0">
      <h2 class="text-xl font-bold mb-4">Support</h2>
      <ul>
        <li class="mb-2"><a href="#">FAQ</a></li>
        <li class="mb-2"><a href="#">Privacy Policy</a></li>
        <li class="mb-2"><a href="#">Terms & Conditions</a></li>
      </ul>
    </div>
  </div>
</footer>
