
@vite('resources/css/app.css')
@vite('resources/js/sidenav.js')

<section class="background-radial-gradient mb-40">
    
  
    <!-- Navbar -->
    <nav
      class="relative flex w-full items-center justify-between bg-white py-2 shadow-sm shadow-neutral-700/10 dark:bg-neutral-800 dark:shadow-black/30 lg:flex-wrap lg:justify-start"
      data-te-navbar-ref>
      <!-- Container wrapper -->
      <div class="flex w-full flex-wrap items-center justify-between px-6">
        <div class="flex items-center">
          <!-- Toggle button -->
         
  
          <!-- Navbar Brand -->
          <img src="image/PTECH4.png"
          alt="Trendy Pants and Shoes" class="h-10" />

        </div>
  
        <!-- Collapsible wrapper -->
       
        <!-- Collapsible wrapper -->
  
        <!-- Right elements -->
        <div class="my-1 flex items-center lg:my-0 lg:ml-auto ">

            <div class="!visible hidden flex-grow basis-[100%] items-center lg:!flex lg:basis-auto"
            id="navbarSupportedContentY" data-te-collapse-item>
            <!-- Left links -->
            <ul class="mr-auto lg:flex lg:flex-row" data-te-navbar-nav-ref>
          
              <li data-te-nav-item-ref>
                <a class="block py-2 pr-2 text-xl text-neutral-500 transition duration-150 ease-in-out hover:text-neutral-600 focus:text-neutral-600 disabled:text-black/30 dark:text-neutral-200 dark:hover:text-neutral-300 dark:focus:text-neutral-300 dark:disabled:text-white/30 lg:px-2 [&.active]:text-black/80 dark:[&.active]:text-white/80"
                  href="/" data-te-nav-link-ref data-te-ripple-init data-te-ripple-color="light">Home</a>
              </li>
              <li class="mb-2 lg:mb-0" data-te-nav-item-ref>
                <a class="block py-2 pr-2 text-xl text-neutral-500 transition duration-150 ease-in-out hover:text-neutral-600 focus:text-neutral-600 disabled:text-black/30 dark:text-neutral-200 dark:hover:text-neutral-300 dark:focus:text-neutral-300 dark:disabled:text-white/30 lg:px-2 [&.active]:text-black/80 dark:[&.active]:text-white/80"
                  href="/about" data-te-nav-link-ref data-te-ripple-init data-te-ripple-color="light">About Us</a>
              </li>

              
              <li class="mb-2 lg:mb-0" data-te-nav-item-ref>
                  <a class="block py-2 pr-2 text-xl text-neutral-500 transition duration-150 ease-in-out hover:text-neutral-600 focus:text-neutral-600 disabled:text-black/30 dark:text-neutral-200 dark:hover:text-neutral-300 dark:focus:text-neutral-300 dark:disabled:text-white/30 lg:px-2 [&.active]:text-black/80 dark:[&.active]:text-white/80"
                    href="/contact" data-te-nav-link-ref data-te-ripple-init data-te-ripple-color="light">Contact Us</a>
                </li>
            </ul>
            <!-- Left links -->
          </div>
         
<!---sidenav-->

<!-- Sidenav -->


 <!-- Sidenav -->
 <nav
 id="full-screen-example"
 class="fixed left-0 top-0 z-[1035] h-screen w-60 -translate-x-full overflow-hidden bg-white shadow-[0_4px_12px_0_rgba(0,0,0,0.07),_0_2px_4px_rgba(0,0,0,0.05)] data-[te-sidenav-hidden='false']:translate-x-0 dark:bg-zinc-800"
 data-te-sidenav-init
 data-te-sidenav-content="#content">
 <div class="mt-6">
   <div id="header-content" class="pl-4">
    <div class="flex items-center mb-3">
    <img src="image/PTECH5.png"
    alt="Trendy Pants and Shoes" class="h-8 w-8"/>
    <h4 class="mb-2 text-lg font-medium leading-[1.2]"></h4>
    </div>
   
   </div>
   <hr class="border-gray-300" />
 </div>
 <div>
   <ul
     class="relative m-0 list-none px-[0.2rem]"
     data-te-sidenav-menu-ref>
     <li class="relative">
       <a
         class="group flex h-12 cursor-pointer items-center truncate rounded-[5px] px-6 py-4 text-[0.875rem] text-gray-700 outline-none transition duration-300 ease-linear hover:bg-primary-400/10 hover:text-primary-600 hover:outline-none focus:bg-primary-400/10 focus:text-primary-600 focus:outline-none active:bg-primary-400/10 active:text-primary-600 active:outline-none data-[te-sidenav-state-active]:text-primary-600 data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10"
         href="/"
         data-te-sidenav-link-ref>
         <span
           class="mr-4 [&>svg]:h-3.5 [&>svg]:w-3.5 [&>svg]:fill-gray-700 [&>svg]:transition [&>svg]:duration-300 [&>svg]:ease-linear group-hover:[&>svg]:fill-primary-600 group-focus:[&>svg]:fill-primary-600 group-active:[&>svg]:fill-primary-600 group-[te-sidenav-state-active]:[&>svg]:fill-primary-600 motion-reduce:[&>svg]:transition-none dark:[&>svg]:fill-gray-300 dark:group-hover:[&>svg]:fill-gray-300 ">
          <img src="image/home.png"
           alt="Trendy Pants and Shoes" class="h-5 w-5"/>
         </span>
         <span>Home</span>
       </a>
     </li>
     <li class="relative">
       <a
         class="group flex h-12 cursor-pointer items-center truncate rounded-[5px] px-6 py-4 text-[0.875rem] text-gray-700 outline-none transition duration-300 ease-linear hover:bg-primary-400/10 hover:text-primary-600 hover:outline-none focus:bg-primary-400/10 focus:text-primary-600 focus:outline-none active:bg-primary-400/10 active:text-primary-600 active:outline-none data-[te-sidenav-state-active]:text-primary-600 data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10"
         href="/about"
         data-te-sidenav-link-ref>
         <span
           class="mr-4 [&>svg]:h-3.5 [&>svg]:w-3.5 [&>svg]:fill-gray-700 [&>svg]:transition [&>svg]:duration-300 [&>svg]:ease-linear group-hover:[&>svg]:fill-primary-600 group-focus:[&>svg]:fill-primary-600 group-active:[&>svg]:fill-primary-600 group-[te-sidenav-state-active]:[&>svg]:fill-primary-600 motion-reduce:[&>svg]:transition-none dark:[&>svg]:fill-gray-300 dark:group-hover:[&>svg]:fill-gray-300 ">
            <img src="image/about.png"
          alt="Trendy Pants and Shoes" class="h-5 w-5"/>
         </span>
         <span>About</span>
       </a>
     </li>
        
     <li class="relative">
       <a
         class="group flex h-12 cursor-pointer items-center truncate rounded-[5px] px-6 py-4 text-[0.875rem] text-gray-700 outline-none transition duration-300 ease-linear hover:bg-primary-400/10 hover:text-primary-600 hover:outline-none focus:bg-primary-400/10 focus:text-primary-600 focus:outline-none active:bg-primary-400/10 active:text-primary-600 active:outline-none data-[te-sidenav-state-active]:text-primary-600 data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10"
         href="/contact"
         data-te-sidenav-link-ref>
         <span
           class="mr-4 [&>svg]:h-3.5 [&>svg]:w-3.5 [&>svg]:fill-gray-700 [&>svg]:transition [&>svg]:duration-300 [&>svg]:ease-linear group-hover:[&>svg]:fill-primary-600 group-focus:[&>svg]:fill-primary-600 group-active:[&>svg]:fill-primary-600 group-[te-sidenav-state-active]:[&>svg]:fill-primary-600 motion-reduce:[&>svg]:transition-none dark:[&>svg]:fill-gray-300 dark:group-hover:[&>svg]:fill-gray-300 ">
         <img src="image/phone.png"
           alt="Trendy Pants and Shoes" class="h-5 w-5"/>
         </span>
         <span>Contact us</span>
       </a>
     </li>
    
   
   </ul>
 </div>
 <div class="h-[100px] text-center">
   <hr class="mb-6 border-gray-300" />

    <span class="text-xs">© 2023 Copyright:PaulTech</span>
   


 </div>
</nav>
<!-- Sidenav -->

<!-- Content --> 
   <button
     id="toggler"
     class="md:hidden lg:hidden inline-block rounded bg-primary px-6 py-2.5 text-xs font-medium uppercase leading-tight text-white shadow-md transition duration-150 ease-in-out hover:bg-primary-700 hover:shadow-lg focus:bg-primary-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-primary-800 active:shadow-lg"
     data-te-sidenav-toggle-ref
     data-te-target="#full-screen-example"
     data-te-ripple-init>
     <span class="block [&>svg]:h-5 [&>svg]:w-5 [&>svg]:text-white">
       <svg
         xmlns="http://www.w3.org/2000/svg"
         viewBox="0 0 24 24"
         fill="currentColor"
         class="h-5 w-5">
         <path
           fill-rule="evenodd"
           d="M3 6.75A.75.75 0 013.75 6h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 6.75zM3 12a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 12zm0 5.25a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75a.75.75 0 01-.75-.75z"
           clip-rule="evenodd" />
       </svg>
     </span>
   </button>



<!-- Content -->

 <!----sidenav ends--->

        </div>
        <!-- Right elements -->
      </div>
      <!-- Container wrapper -->
    </nav>
    <!-- Navbar -->

    @yield('content')