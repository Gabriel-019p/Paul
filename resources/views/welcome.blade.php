<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" rel="stylesheet" />
        <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script> 

        @vite('resources/css/app.css')
        @vite('resources/js/app.js')

    </head>
    <body id="content" class="mx-auto" style="max-width:98% ;">
    
 
    @include('header')
 
    
   <div class="relative overflow-hidden bg-cover bg-no-repeat" style="
          background-position: 30%;
          background-image: url('image/img33.jpeg');
          height: 500px;
        ">
      <div
        class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-[hsla(0,0%,0%,0.75)] bg-fixed">
        <div class="flex h-full items-center justify-center">
          <div class="px-6 text-center text-white md:px-12">
            <h1 class="mt-2 mb-16 text-5xl font-bold tracking-tight md:text-6xl xl:text-7xl">
              A Software Development Driven<br /><span>Company</span>
            </h1>
            <a href="/contact"
              class="rounded border-2 border-neutral-50 px-[46px] pt-[14px] pb-[12px] text-sm font-medium uppercase leading-normal text-neutral-50 transition duration-150 ease-in-out hover:border-neutral-100 hover:bg-neutral-100 hover:bg-opacity-10 hover:text-neutral-100 focus:border-neutral-100 focus:text-neutral-100 focus:outline-none focus:ring-0 active:border-neutral-200 active:text-neutral-200"
              data-te-ripple-init data-te-ripple-color="light">
              Get your website
          </a>
          </div>
        </div>
      </div>
    </div>

      <!-- Jumbotron -->
    </section>
    <!-- Section -->


    <!-- aboutus begins -->
    <div id="about" class="container my-24 mx-auto md:px-6">
     
      <p class="mb-10 text-4xl text-center font-source-serif-4 border-2 border-indigo-500/100 font-georgia font-Ubuntu font-light">About us </p>
      <!-- Section: Design Block -->
      <section class="mb-10">
        <div class="flex flex-wrap">
          <div class="mb-12 w-full shrink-0 grow-0 basis-auto lg:mb-0 lg:w-5/12">
            <div class="flex lg:py-12">
              <dotlottie-player src="https://lottie.host/f07701a9-3398-43fc-9678-6938aaafeb47/T8aX9klFAD.json" background="transparent" speed="1" style="width: 600px; height: 400px;" loop autoplay></dotlottie-player>
              
            </div>
          </div>

    
          <div class="w-full shrink-0 grow-0 basis-auto lg:w-7/12">
            <div
              class="flex h-full items-center rounded-lg border-solid border-2 border-indigo-600 p-6 text-center text- lg:pl-12 lg:text-left">
              <div class="lg:pl-12">
                <h2 class="mb-8 text-4xl font-Ubuntu  font-bold">Fostering a culture by upholding our fundamental values.</h2>
                <p class="mb-8 pb-2 lg:pb-0 font-mona-sans font-helvetica-neue font-helvetica font-arial font-sans">
                 
                 PaulTech stands as a premier software development company, renowned for delivering high-quality custom software solutions to a diverse clientele. Our client base spans from Fortune 350 giants to small and medium-sized enterprises, digital agencies, and startups worldwide. Our team comprises highly skilled professionals, each specializing in areas such as Cloud, Mobile, DevOps, Data Engineering, and Application Development.
                </p>
    
                <p class="font-mona-sans font-helvetica-neue font-helvetica font-arial font-sans">
                  Our exceptional track record speaks volumes about our commitment to innovation and excellence, positioning us as a catalyst for exponential growth and enhanced operational efficiency. 
                </p>
         
                <a href="about" class="font-bold  ease-in duration-300 rounded-lg items-center hover:py-2 font-mono text-lg hover:bg-yellow-600 p-2">
                Read More
              </a>
         
  
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Section: Design Block -->
    </div>
    <!-- aboutus ends -->

<!---whatsapp--->
<div class="flex sticky top-20 left-0 z-20">
 <a href="https://wa.me/+2349138861254" target="_blank" rel="noopener noreferrer"  class="sticky top-10 rounded-full shadow-lg w-[80px] ease-in-out z-20">
  <img src="/image/watsap.png" alt="starr"/>
 </a>
 <h1 class="top-10 text-lg ">Contact us</h1>
</div>
<!--whatsapp ends-->

  <!-- stats begins -->

<div>
<div class="relative overflow-hidden bg-cover bg-no-repeat" style="
          background-position: 30%;
          background-image: url('image/');
          height: 500px;
        ">
  <div class="container my-24 mx-auto md:px-6 ">
   <h2 class="mb-5 text-4xl text-center font-Ubuntu font-medium">Innovate, create, thrive</h2>
   <p class="mb-10 text-sm text-center font-Ubuntu font-medium">With our passion for innovation, we create websites that not only stand out but also deliver exceptional user experiences</p>
    <img src="" class="" />
      <!-- Section: Design Block -->
      <section class="mb-32  p-20 text-center bg-9AD0C2">

        <div class="grid lg:grid-cols-3 lg:gap-x-12">
          <div class="mb-16 lg:mb-0">
            <div
              class="block h-full rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
              <div class="flex justify-center">
                <div class="-mt-8 inline-block rounded-full bg-primary-100 p-4 text-primary shadow-md">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                    stroke="currentColor" class="h-7 w-7">
                    <path stroke-linecap="round" stroke-linejoin="round"
                      d="M3.75 6A2.25 2.25 0 016 3.75h2.25A2.25 2.25 0 0110.5 6v2.25a2.25 2.25 0 01-2.25 2.25H6a2.25 2.25 0 01-2.25-2.25V6zM3.75 15.75A2.25 2.25 0 016 13.5h2.25a2.25 2.25 0 012.25 2.25V18a2.25 2.25 0 01-2.25 2.25H6A2.25 2.25 0 013.75 18v-2.25zM13.5 6a2.25 2.25 0 012.25-2.25H18A2.25 2.25 0 0120.25 6v2.25A2.25 2.25 0 0118 10.5h-2.25a2.25 2.25 0 01-2.25-2.25V6zM13.5 15.75a2.25 2.25 0 012.25-2.25H18a2.25 2.25 0 012.25 2.25V18A2.25 2.25 0 0118 20.25h-2.25A2.25 2.25 0 0113.5 18v-2.25z" />
                  </svg>
                </div>
              </div>
              <div class="p-6">
                <h3 class="mb-4 text-2xl font-bold text-primary dark:text-primary-400">
                  47
                </h3>
                <h5 class="mb-4 text-lg font-medium">Clients</h5>
              
              </div>
            </div>
          </div>
    
          <div class="mb-16 lg:mb-0">
            <div
              class="block h-full rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
              <div class="flex justify-center">
                <div class="-mt-8 inline-block rounded-full bg-primary-100 p-4 text-primary shadow-md">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                    stroke="currentColor" class="h-7 w-7">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6a7.5 7.5 0 107.5 7.5h-7.5V6z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 10.5H21A7.5 7.5 0 0013.5 3v7.5z" />
                  </svg>
                </div>
              </div>
              <div class="p-6">
                <h3 class="mb-4 text-2xl font-bold text-primary dark:text-primary-400">
                  70%
                </h3>
                <h5 class="mb-4 text-lg font-medium">Growth</h5>
        
              </div>
            </div>
          </div>
    
          <div class="">
            <div
              class="block h-full rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
              <div class="flex justify-center">
                <div class="-mt-8 inline-block rounded-full bg-primary-100 p-4 text-primary shadow-md">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                    stroke="currentColor" class="h-7 w-7">
                    <path stroke-linecap="round" stroke-linejoin="round"
                      d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.324.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.24-.438.613-.431.992a6.759 6.759 0 010 .255c-.007.378.138.75.43.99l1.005.828c.424.35.534.954.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.57 6.57 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.28c-.09.543-.56.941-1.11.941h-2.594c-.55 0-1.02-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.43-.992a6.932 6.932 0 010-.255c.007-.378-.138-.75-.43-.99l-1.004-.828a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.087.22-.128.332-.183.582-.495.644-.869l.214-1.281z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                  </svg>
                </div>
              </div>
              <div class="p-6">
                <h3 class="mb-4 text-2xl font-bold text-primary dark:text-primary-400">
                  30
                </h3>
                <h5 class="mb-4 text-lg font-medium">Projects Completed</h5>
              </div>
            </div>
  
          </div>
        </div>
   
    </div>
  
  </section>
  </div>
    </div>
    </div>    
    <!-- Stats End -->


    <div
    id="carouselExampleSlidesOnly"
    class="relative"
    data-te-carousel-init
    data-te-ride="carousel">
    <!--Carousel items-->
    <div
      class="relative w-full md:hidden lg:hidden overflow-hidden after:clear-both after:block after:content-['']">
      <!--First item-->
      <div
        class="relative float-left -mr-[100%] w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
        data-te-carousel-item
        data-te-carousel-active>
        <img
          src="/image/slide1.jpg" alt="starr"
          class="block w-full"
          alt="Wild Landscape" />
      </div>
      <!--Second item-->
      <div
        class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
        data-te-carousel-item>
        <img
          src="/image/slide2.jpg" alt="starr"
          class="block w-full"
          alt="Camera" />
      </div>
          <!--Third item-->
          <div
          class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
          data-te-carousel-item>
          <img
            src="/image/ads.jpg" alt="starr"
            class="block w-full"
            alt="Camera" />
        </div>
           <!--fourthitem-->
        
      <!--Fifth item-->
      <div
        class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
        data-te-carousel-item>
        <img
          src="/image/slide4.jpg" alt="starr"
          class="block w-full"
          alt="Exotic Fruits" />
      </div>
    </div>
  
  
  </div>

  <!-- services begins -->
  <!-- Container for demo purpose -->
  <div class="container my-24 mx-auto md:px-6">
  <!-- Section: Design Block -->
  
  <section class="mb-32">
    <h2 class="mb-12 text-center text-3xl font-Ubuntu font-light">
      Service we provide
    </h2>

    <div class="flex flex-wrap items-center">
      <div class="mb-12 w-full shrink-0 grow-0 basis-auto md:px-6 lg:mb-0 lg:w-5/12">
        <div class="relative overflow-hidden rounded-lg bg-cover bg-[50%] bg-no-repeat shadow-lg dark:shadow-black/20"
          data-te-ripple-init data-te-ripple-color="light">
          <dotlottie-player src="https://lottie.host/9c8e6503-b610-4d15-a747-896899ca3005/RcKGUNlxr6.json" background="transparent" speed="1" style="width: 400px; height: 550px;" loop autoplay></dotlottie-player>
        </div>
      </div>

      <div class="w-full shrink-0 grow-0 basis-auto md:px-6 lg:w-7/12">
        <div class="mb-12 flex">
          <div class="shrink-0">
            <div class="rounded-md p-4 shadow-lg bg-[hsl(231,52.6%,20%)] dark:bg-[hsl(231,52.6%,30%)]">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                stroke="currentColor" class="h-6 w-6 text-white">
                <path stroke-linecap="round" stroke-linejoin="round"
                  d="M11.42 15.17L17.25 21A2.652 2.652 0 0021 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 11-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 004.486-6.336l-3.276 3.277a3.004 3.004 0 01-2.25-2.25l3.276-3.276a4.5 4.5 0 00-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437l1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008z" />
              </svg>
            </div>
          </div>

          <div class="ml-4 grow">
            <p class="mb-2 font-bold">Website Design</p>
            <p class="text-neutral-500 dark:text-neutral-300 font-helvetica-neue font-helvetica font-arial font-sans">
              Our website design services go beyond aesthetics. We are dedicated to turning your digital vision into a compelling, user-friendly, and visually captivating reality. .
          </div>
        </div>

        <div class="mb-12 flex">
          <div class="shrink-0">
            <div class="rounded-md p-4 shadow-lg bg-[hsl(231,52.6%,20%)] dark:bg-[hsl(231,52.6%,30%)]">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                stroke="currentColor" class="h-6 w-6 text-white">
                <path stroke-linecap="round" stroke-linejoin="round"
                  d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z" />
              </svg>
            </div>
          </div>
          <div class="ml-4 grow">
            <p class="mb-2 font-bold">Mobile Application</p>
            <p class="text-neutral-500 dark:text-neutral-300 font-helvetica-neue font-helvetica font-arial font-sans">
              We specialize in creating mobile applications that empower your business for success in the digital age. Our mobile app services are designed to transform your ideas into user-friendly, feature-rich, and innovative solutions. 
            </p>
          </div>
        </div>

        <div class="mb-12 flex">
          <div class="shrink-0">
            <div class="rounded-md p-4 shadow-lg bg-[hsl(231,52.6%,20%)] dark:bg-[hsl(231,52.6%,30%)]">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                stroke="currentColor" class="h-6 w-6 text-white">
                <path stroke-linecap="round" stroke-linejoin="round"
                  d="M15.59 14.37a6 6 0 01-5.84 7.38v-4.8m5.84-2.58a14.98 14.98 0 006.16-12.12A14.98 14.98 0 009.631 8.41m5.96 5.96a14.926 14.926 0 01-5.841 2.58m-.119-8.54a6 6 0 00-7.381 5.84h4.8m2.581-5.84a14.927 14.927 0 00-2.58 5.84m2.699 2.7c-.103.021-.207.041-.311.06a15.09 15.09 0 01-2.448-2.448 14.9 14.9 0 01.06-.312m-2.24 2.39a4.493 4.493 0 00-1.757 4.306 4.493 4.493 0 004.306-1.758M16.5 9a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z" />
              </svg>
            </div>
          </div>
          <div class="ml-4 grow">
            <p class="mb-2 font-bold">eCommerce</p>
            <p class="text-neutral-500 dark:text-neutral-300 font-helvetica-neue font-helvetica font-arial font-sans">
              We are your trusted partner for E-commerce services that drive growth and innovation. Our expertise spans the entire E-commerce spectrum, from designing user-friendly online stores to optimizing performance and enhancing customer experiences. 
            </p>
          </div>
        </div>

        <div class="flex">
          <div class="shrink-0">
            <div class="rounded-md p-4 shadow-lg bg-[hsl(231,52.6%,20%)] dark:bg-[hsl(231,52.6%,30%)]">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                stroke="currentColor" class="h-6 w-6 text-white">
                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6a7.5 7.5 0 107.5 7.5h-7.5V6z" />
                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 10.5H21A7.5 7.5 0 0013.5 3v7.5z" />
              </svg>
            </div>
          </div>
          <div class="ml-4 grow">
            <p class="mb-2 font-bold">Google Ads</p>
            <p class="text-neutral-500 dark:text-neutral-300 font-helvetica-neue font-helvetica font-arial font-sans">
         Unlock the full potential of your digital advertising efforts with PaulTech's Google Ads services. Our team of certified experts specializes in creating and managing high-performing Google Ads campaigns that drive visibility, clicks, and conversions. 
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Section: Design Block -->
</div>


<div class="relative overflow-hidden bg-cover bg-no-repeat opacity-80" style="
          background-position: 30%;
          background-image: url('image/map.png');
          height: 500px;
        ">
  <div
        class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-[hsla(0,0%,0%,0.75)] bg-fixed">
        <div class="flex h-full items-center justify-center">
          <div class="px-6 text-center text-white md:px-12">
            <h1 class="mt-2 mb-16 text-4xl font-bold tracking-tight md:text-4xl xl:text-6xl">
            Bringing Your Ideas to Every Corner of the Globe
            </h1>
          </div>
        </div>
      </div>
</div>

      <!-- testimonial begin-->
      <div class="container my-24 mx-auto md:px-6">
          <!-- Section: Design Block -->
          <section class="mb-32 text-center">
            <h2 class="mb-12 text-3xl font-Ubuntu font-light">Testimonials</h2>
        
            <div id="carouselExampleCaptions" class="relative" data-te-carousel-init data-te-carousel-slide>
              <div class="relative w-full overflow-hidden after:clear-both after:block after:content-['']">
                <div
                  class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
                  data-te-carousel-active data-te-carousel-item style="backface-visibility: hidden">
                  <img class="mx-auto mb-6 rounded-full shadow-lg dark:shadow-black/20 w-[150px]"
                  src="image/oshus1.jpg" alt="avatar" /> 
                  <div class="flex flex-wrap justify-center">
                    <div class="w-full shrink-0 grow-0 basis-auto px-3 lg:w-8/12">
                      <h5 class="mb-2 text-lg font-bold">Daniel</h5>
                      <p class="mb-4 font-medium text-neutral-700 dark:text-neutral-400">
                        Digital Marketer
                      </p>
                      <p class="mb-6 text-neutral-500 dark:text-neutral-300">
                       
                      I've had a positive experience with Paultech, and I highly recommend trying out their excellent services. Thank you, Paultech, for providing such a great experience.
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960" class="inline-block w-6">
                          <path fill="currentColor"
                            d="M580 556h160V396H580v160Zm-360 0h160V396H220v160Zm406 220 80-160H520V336h280v288l-76 152h-98Zm-360 0 80-160H160V336h280v288l-76 152h-98Zm34-300Zm360 0Z" />
                        </svg>
                      </p>
                      <ul class="mb-0 flex justify-center">
                        <li>
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960" class="w-5 text-warning">
                            <path fill="currentColor"
                              d="m233 976 65-281L80 506l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Z" />
                          </svg>
                        </li>
                        <li>
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960" class="w-5 text-warning">
                            <path fill="currentColor"
                              d="m233 976 65-281L80 506l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Z" />
                          </svg>
                        </li>
                        <li>
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960" class="w-5 text-warning">
                            <path fill="currentColor"
                              d="m233 976 65-281L80 506l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Z" />
                          </svg>
                        </li>
                        <li>
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960" class="w-5 text-warning">
                            <path fill="currentColor"
                              d="m233 976 65-281L80 506l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Z" />
                          </svg>
                        </li>
                        <li>
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960" class="w-5 text-warning">
                            <path fill="currentColor"
                              d="m480 757 157 95-42-178 138-120-182-16-71-168v387ZM233 976l65-281L80 506l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Z" />
                          </svg>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div
                  class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
                  data-te-carousel-item style="backface-visibility: hidden">
                  <img class="mx-auto mb-6 rounded-full shadow-lg dark:shadow-black/20 w-[150px]"
                  src="image/mik.jpg" alt="avatar" /> 
                  <div class="flex flex-wrap justify-center">
                    <div class="w-full shrink-0 grow-0 basis-auto px-3 lg:w-8/12">
                      <h5 class="mb-2 text-lg font-bold">Michael</h5>
                      <p class="mb-4 font-medium text-neutral-700 dark:text-neutral-400">
                        Business Development Officer
                      </p>
                      <p class="mb-6 text-neutral-500 dark:text-neutral-300">
                        Choosing Paultech for my company has proven to be one of the most commendable decisions we've made. Paultech's seamless processes and their ability to craft exceptional websites with remarkable user interfaces have exceeded our expectations.
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960" class="inline-block w-6">
                          <path fill="currentColor"
                            d="M580 556h160V396H580v160Zm-360 0h160V396H220v160Zm406 220 80-160H520V336h280v288l-76 152h-98Zm-360 0 80-160H160V336h280v288l-76 152h-98Zm34-300Zm360 0Z" />
                        </svg>
                      </p>
                      <ul class="mb-0 flex justify-center">
                        <li>
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960" class="w-5 text-warning">
                            <path fill="currentColor"
                              d="m233 976 65-281L80 506l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Z" />
                          </svg>
                        </li>
                        <li>
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960" class="w-5 text-warning">
                            <path fill="currentColor"
                              d="m233 976 65-281L80 506l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Z" />
                          </svg>
                        </li>
                        <li>
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960" class="w-5 text-warning">
                            <path fill="currentColor"
                              d="m233 976 65-281L80 506l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Z" />
                          </svg>
                        </li>
                        <li>
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960" class="w-5 text-warning">
                            <path fill="currentColor"
                              d="m233 976 65-281L80 506l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Z" />
                          </svg>
                        </li>
                        <li>
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960" class="w-5 text-warning">
                            <path fill="currentColor"
                              d="m233 976 65-281L80 506l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Z" />
                          </svg>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div
                  class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
                  data-te-carousel-item style="backface-visibility: hidden">
                  <img class="mx-auto mb-6 rounded-full shadow-lg dark:shadow-black/20 w-[150px]"
                    src="image/som.jpg" alt="avatar" /> 
                    
                  <div class="flex flex-wrap justify-center">
                    <div class="w-full shrink-0 grow-0 basis-auto px-3 lg:w-8/12">
                      <h5 class="mb-2 text-lg font-bold">Somtochukwu</h5>
                      <p class="mb-4 font-medium text-neutral-700 dark:text-neutral-400">
                        UX Designer
                      </p>
                      <p class="mb-6 text-neutral-500 dark:text-neutral-300">
                        Their services have left a strong impression on me, and I would enthusiastically endorse them to anyone in need.
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960" class="inline-block w-6">
                          <path fill="currentColor"
                            d="M580 556h160V396H580v160Zm-360 0h160V396H220v160Zm406 220 80-160H520V336h280v288l-76 152h-98Zm-360 0 80-160H160V336h280v288l-76 152h-98Zm34-300Zm360 0Z" />
                        </svg>
                      </p>
                      <ul class="mb-0 flex justify-center">
                        <li>
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960" class="w-5 text-warning">
                            <path fill="currentColor"
                              d="m233 976 65-281L80 506l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Z" />
                          </svg>
                        </li>
                        <li>
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960" class="w-5 text-warning">
                            <path fill="currentColor"
                              d="m233 976 65-281L80 506l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Z" />
                          </svg>
                        </li>
                        <li>
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960" class="w-5 text-warning">
                            <path fill="currentColor"
                              d="m233 976 65-281L80 506l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Z" />
                          </svg>
                        </li>
                        <li>
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960" class="w-5 text-warning">
                            <path fill="currentColor"
                              d="m233 976 65-281L80 506l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Z" />
                          </svg>
                        </li>
                        <li>
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960" class="w-5 text-warning">
                            <path fill="currentColor"
                              d="m323 851 157-94 157 95-42-178 138-120-182-16-71-168-71 167-182 16 138 120-42 178Zm-90 125 65-281L80 506l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Zm247-355Z" />
                          </svg>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <button
                class="absolute top-0 bottom-0 left-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
                type="button" data-te-target="#carouselExampleCaptions" data-te-slide="prev">
                <span class="inline-block h-8 w-8">
                  <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"
                    class="text-neutral-600 dark:text-neutral-300">
                    <path fill="currentColor"
                      d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z" />
                  </svg>
                </span>
                <span
                  class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]">Previous</span>
              </button>
              <button
                class="absolute top-0 bottom-0 right-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
                type="button" data-te-target="#carouselExampleCaptions" data-te-slide="next">
                <span class="inline-block h-8 w-8">
                  <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"
                    class="text-neutral-600 dark:text-neutral-300">
                    <path fill="currentColor"
                      d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                  </svg>
                </span>
                <span
                  class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]">Next</span>
              </button>
            </div>
          </section>
          <!-- Section: Design Block -->
        </div>
        <!-- Container for demo purpose -->
       <!-- testimonial End -->


      <!-- foter begin-->
      
<!-- Footer container -->
@include('footer')

   @livewireScripts
</body>
</html>