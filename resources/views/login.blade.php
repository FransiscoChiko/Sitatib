<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  <title>SiTATIB VISKA</title>
  <link rel="icon" href="images/logo-viska.png" type="image/png">
</head>
<body style="background-image: url(images/smkn6.jpg)" class="bg-no-repeat bg-cover bg-center bg-fixed backdrop-blur-sm">

<!-- Navbar --> 
<nav class="bg-gray-100 border-gray-200 dark:bg-white sticky top-0 z-10">
  <div class="max-w-screen-xl flex mx-auto p-4">
    <a href="https://smkn6solo.sch.id/" class="flex items-center space-x-3 rtl:space-x-reverse">
      <img src="images/logo-viska.png" class="h-14" alt="Logo Viska" />
      <p id="navbarText" class="self-center text-2xl font-bold font-sans whitespace-nowrap text-black dark:text-grey-800">SiTATIB VISKA</p>
    </a>
  </div>
</nav>
<!-- /Navbar -->

<!-- Form -->
<div class="flex min-h-full items-center justify-center px-6 py-12 lg:px-8 mb-10 mt-10 z-0 animate-fade-up" style="padding-top: 4rem;">
    <div class="sm:mx-auto sm:w-full sm:max-w-md bg-white shadow-md rounded-lg overflow-hidden p-10 z-1">
      <img class="mx-auto h-28 w-auto" src="images/logo-viska.png" alt="Logo sekolah">
      <div class="text-center">
      <strong>SiTATIB VISKA</strong>
      <p>Selamat Datang di SiTATIB VISKA</p>
      </div>
      <div class="mt-5 sm:mx-auto sm:w-full sm:max-w-md">
        <form class="space-y-6" action="#" method="POST">
          <div>
            <div class="mt-2">
              <input id="username" name="username" type="username" autocomplete="email" required class="block w-full rounded-md py-1.5 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 p-2" placeholder="Username">
            </div>
          </div>

          <div>
            <div class="flex items-center justify-between -mt-2">
            </div>
            <div class="mt-2">
              <input id="password" name="password" type="password" autocomplete="current-password" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 p-2" placeholder="Password">
            </div>
          </div>
          <div>
            <button type="submit" class="flex w-full justify-center bg-indigo-600 px-3 py-2 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 rounded-full">Sign in</button>
          </div>
          
        </form>
      </div>
    </div>
  </div>
<!-- /Form -->

<!-- Footer -->
<footer class="bg-white dark:bg-gray-900">
  <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
      <div class="md:flex md:justify-between">
        <div class="mb-6 md:mb-0">
            <a href="https://smkn6solo.sch.id/" class="flex items-center">
                <img src="images/logo-viska.png" class="h-14 me-3" alt="FlowBite Logo" />
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">SiTATIB VISKA</span>
            </a>
        </div>
        <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
            <div>
                <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Ikuti Kami</h2>
                <ul class="text-gray-500 dark:text-gray-400 font-medium">
                    <li>
                        <a href="https://github.com/themesberg/flowbite" class="hover:underline ">Facebook</a>
                    </li>
                    <li>
                        <a href="https://discord.gg/4eeurUVvTy" class="hover:underline">Instagram</a>
                    </li>
                    <li>
                      <a href="https://discord.gg/4eeurUVvTy" class="hover:underline">Youtube</a>
                  </li>
                  <li>
                    <a href="https://discord.gg/4eeurUVvTy" class="hover:underline">Twitter</a>
                </li>
                <li>
                  <a href="https://discord.gg/4eeurUVvTy" class="hover:underline">Email</a>
              </li>
                </ul>
            </div>
            <div>
                <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Legal</h2>
                <ul class="text-gray-500 dark:text-gray-400 font-medium">
                    <li class="mb-4">
                        <a href="#" class="hover:underline">Privacy Policy</a>
                    </li>
                    <li>
                        <a href="#" class="hover:underline">Terms &amp; Conditions</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
    <div class="sm:flex sm:items-center sm:justify-between">
        <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">Copyright &copy;<script>document.write(new Date().getFullYear());</script> <a href="https://smkn6solo.sch.id/" class="hover:underline">SMKN 6 Surakarta</a>. All rights reserved
        </span>
        <div class="flex mt-4 sm:justify-center sm:mt-0">
            <a href="https://www.facebook.com/smkn6solo" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
              <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                <path fill-rule="evenodd" d="M13.1 6H15V3h-1.9A4.1 4.1 0 0 0 9 7.1V9H7v3h2v10h3V12h2l.6-3H12V6.6a.6.6 0 0 1 .6-.6h.5Z" clip-rule="evenodd"/>
              </svg>            
                <span class="sr-only">Facebook page</span>
            </a>
            <a href="https://twitter.com/smkn6solo" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
              <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                <path fill-rule="evenodd" d="M22 5.9c-.7.3-1.5.5-2.4.6a4 4 0 0 0 1.8-2.2c-.8.5-1.6.8-2.6 1a4.1 4.1 0 0 0-6.7 1.2 4 4 0 0 0-.2 2.5 11.7 11.7 0 0 1-8.5-4.3 4 4 0 0 0 1.3 5.4c-.7 0-1.3-.2-1.9-.5a4 4 0 0 0 3.3 4 4.2 4.2 0 0 1-1.9.1 4.1 4.1 0 0 0 3.9 2.8c-1.8 1.3-4 2-6.1 1.7a11.7 11.7 0 0 0 10.7 1A11.5 11.5 0 0 0 20 8.5V8a10 10 0 0 0 2-2.1Z" clip-rule="evenodd"/>
              </svg>              
                <span class="sr-only">Twitter</span>
            </a>
            <a href="https://www.youtube.com/smkn6solo" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
              <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                <path fill-rule="evenodd" d="M21.7 8c0-.7-.4-1.3-.8-2-.5-.5-1.2-.8-2-.8C16.2 5 12 5 12 5s-4.2 0-7 .2c-.7 0-1.4.3-2 .9-.3.6-.6 1.2-.7 2l-.2 3.1v1.5c0 1.1 0 2.2.2 3.3 0 .7.4 1.3.8 2 .6.5 1.4.8 2.2.8l6.7.2s4.2 0 7-.2c.7 0 1.4-.3 2-.9.3-.5.6-1.2.7-2l.2-3.1v-1.6c0-1 0-2.1-.2-3.2ZM10 14.6V9l5.4 2.8-5.4 2.8Z" clip-rule="evenodd"/>
              </svg>
                <span class="sr-only">Youtube</span>
            </a>
            <a href="https://www.instagram.com/smkn6solo/" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                      <path fill-rule="evenodd" d="M10 .333A9.911 9.911 0 0 0 6.866 19.65c.5.092.678-.215.678-.477 0-.237-.01-1.017-.014-1.845-2.757.6-3.338-1.169-3.338-1.169a2.627 2.627 0 0 0-1.1-1.451c-.9-.615.07-.6.07-.6a2.084 2.084 0 0 1 1.518 1.021 2.11 2.11 0 0 0 2.884.823c.044-.503.268-.973.63-1.325-2.2-.25-4.516-1.1-4.516-4.9A3.832 3.832 0 0 1 4.7 7.068a3.56 3.56 0 0 1 .095-2.623s.832-.266 2.726 1.016a9.409 9.409 0 0 1 4.962 0c1.89-1.282 2.717-1.016 2.717-1.016.366.83.402 1.768.1 2.623a3.827 3.827 0 0 1 1.02 2.659c0 3.807-2.319 4.644-4.525 4.889a2.366 2.366 0 0 1 .673 1.834c0 1.326-.012 2.394-.012 2.72 0 .263.18.572.681.475A9.911 9.911 0 0 0 10 .333Z" clip-rule="evenodd"/>
                </svg>
                <span class="sr-only">Instagram</span>
            </a>
            <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M10 0a10 10 0 1 0 10 10A10.009 10.009 0 0 0 10 0Zm6.613 4.614a8.523 8.523 0 0 1 1.93 5.32 20.094 20.094 0 0 0-5.949-.274c-.059-.149-.122-.292-.184-.441a23.879 23.879 0 0 0-.566-1.239 11.41 11.41 0 0 0 4.769-3.366ZM8 1.707a8.821 8.821 0 0 1 2-.238 8.5 8.5 0 0 1 5.664 2.152 9.608 9.608 0 0 1-4.476 3.087A45.758 45.758 0 0 0 8 1.707ZM1.642 8.262a8.57 8.57 0 0 1 4.73-5.981A53.998 53.998 0 0 1 9.54 7.222a32.078 32.078 0 0 1-7.9 1.04h.002Zm2.01 7.46a8.51 8.51 0 0 1-2.2-5.707v-.262a31.64 31.64 0 0 0 8.777-1.219c.243.477.477.964.692 1.449-.114.032-.227.067-.336.1a13.569 13.569 0 0 0-6.942 5.636l.009.003ZM10 18.556a8.508 8.508 0 0 1-5.243-1.8 11.717 11.717 0 0 1 6.7-5.332.509.509 0 0 1 .055-.02 35.65 35.65 0 0 1 1.819 6.476 8.476 8.476 0 0 1-3.331.676Zm4.772-1.462A37.232 37.232 0 0 0 13.113 11a12.513 12.513 0 0 1 5.321.364 8.56 8.56 0 0 1-3.66 5.73h-.002Z" clip-rule="evenodd"/>
              </svg>
                <span class="sr-only">Dribbble account</span>
            </a>
        </div>
    </div>
  </div>
</footer>
<!-- /Footer -->

{{-- Javascript --}}
<script>
  document.addEventListener('DOMContentLoaded', function () {
      var navbar = document.querySelector('nav');
      var navbarText = document.getElementById('navbarText');

      window.addEventListener('scroll', function () {
          if (window.scrollY > 0) {
              navbar.classList.add('bg-white', 'border-gray-200', 'shadow-lg');
              navbar.classList.remove('bg-transparent');
              navbarText.classList.remove('text-white');
              navbarText.classList.add('text-black'); // Ganti dengan warna yang diinginkan saat di-scroll
          } else {
              navbar.classList.add('bg-transparent');
              navbar.classList.remove('bg-white', 'border-gray-200', 'shadow-lg');
              navbarText.classList.remove('text-black');
              navbarText.classList.add('text-white'); // Ganti dengan warna yang diinginkan saat tidak di-scroll
          }
      });
  });
</script>
{{-- /Javascript --}}
</body>
</html>
