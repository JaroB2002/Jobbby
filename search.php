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


<h1>Soms zoekbalk</h1>
<div class="w-1/2 flex items-center bg-white rounded-full py-2">
  <input class="rounded-l-full w-full px-6 text-gray-700 leading-tight focus:outline-none" id="search" type="text" placeholder="Job titel of trefwoord">
  <div class="p-2">
    <svg class="fill-current text-blue-500 w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M9.5 3C5.91 3 3 5.91 3 9.5C3 11.09 3.5 12.56 4.39 13.77L1.5 16.66L2.34 17.5L5.23 14.61C6.44 15.5 7.91 16 9.5 16C13.09 16 16 13.09 16 9.5C16 5.91 13.09 3 9.5 3ZM9.5 14C7.01 14 5 11.99 5 9.5C5 7.01 7.01 5 9.5 5C11.99 5 14 7.01 14 9.5C14 11.99 11.99 14 9.5 14Z"/></svg>
  </div>
  <div class="border-r-2 border-gray-300"></div>
  <input class="rounded-r-full w-full px-6 text-gray-700 leading-tight focus:outline-none" id="search" type="text" placeholder="Locatie">
  <div class="p-2">
    <svg class="fill-current text-blue-500 w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20.84 18.26L16.07 13.5C17.04 12.19 17.5 10.66 17.5 9C17.5 4.03 13.97 0.5 9 0.5C4.03 0.5 0.5 4.03 0.5 9C0.5 13.97 4.03 17.5 9 17.5C10.66 17.5 12.19 17.04 13.5 16.07L18.26 20.84C18.63 21.21 19.21 21.21 19.58 20.84L20.84 19.58C21.21 19.21 21.21 18.63 20.84 18.26ZM9 15.5C5.41 15.5 2.5 12.59 2.5 9C2.5 5.41 5.41 2.5 9 2.5C12.59 2.5 15.5 5.41 15.5 9C15.5 12.59 12.59 15.5 9 15.5Z"/></svg>
  </div>
</div>

<form>   
    <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
    <div class="relative">
        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
            
        </div>
        <input type="search" id="default-search" class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Zoektitel, trefwoord | locatie" required>
        <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Zoek werk</button>
    </div>
</form>