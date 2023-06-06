<h1>Microcards van de homepage testen</h1>


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



<div class="m-7 mx-auto flex max-w-6xl flex-col px-5">
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
        <div class="text-gray-500">Salaris: 15/uur - €20/uur</div>
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