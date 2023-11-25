
<strong><script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script> 

<div class="container my-24 mx-auto md:px-6">

  <p class="mb-20 text-3xl text-center font-Ubuntu font-light ">Contact us </p>

    <!-- Section: Design Block -->
    <section class="mb-32">
      <div class="relative h-[300px] overflow-hidden bg-cover bg-[50%]"style="
        background-position: 30%;
        background-image: url('image/cus4.jpeg');
        height: 500px;"
        ></div>
      <div class="container px-6 md:px-12">

        <div
          class="block rounded-lg bg-[hsla(0,0%,100%,0.8)] px-6 py-12 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-[hsla(0,0%,5%,0.7)] dark:shadow-black/20 md:py-16 md:px-12 -mt-[100px] backdrop-blur-[30px]">
          <div class="flex flex-wrap">
            <div class="mb-12 w-full shrink-0 grow-0 basis-auto md:px-3 lg:mb-0 lg:w-5/12 lg:px-6">
                <form wire:submit.prevent="create">
                    <!-- Name Input -->
                    <div class="mb-4">
                        <label for="name" class="block text-gray-600">Name</label>
                        <input wire:model="name"  type="text" id="name" name="name" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-blue-500" placeholder="Your Name" required>
                    </div>   
                  @error('name')
                 <span class="text-red-500 text-xs mt-3 block ">{{ $message }}</span>
                  @enderror
   
                    <!-- Email Input -->
                    <div class="mb-4">
                        <label for="email" class="block text-gray-600">Email</label>
                        <input wire:model="email" type="email" id="email" name="email" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-blue-500" placeholder="Your Email" required>
                    </div>
                    @error('email')
                    <span class="text-red-500 text-xs mt-3 block ">{{ $message }}</span>
                    @enderror
                    
                    <!-- Message Textarea -->
                    <div class="mb-6">
                        <label for="message" class="block text-gray-600">Message</label>
                        <textarea wire:model="message" id="message" name="message" rows="5" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-blue-500" placeholder="Your Message" required></textarea>
                    </div>
               @error('message')
                <span class="text-red-500 text-xs mt-3 block ">{{ $message }}</span>
               @enderror

                <button wire:loading.class="opacity-50" type="submit" data-te-ripple-init data-te-ripple-color="light"
                  class="mb-6 inline-block w-full rounded bg-primary px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] lg:mb-0">
                  Send
                </button>

                <div wire:loading class="text-success-500 justify-center">
                  <iframe src="https://lottie.host/?file=c16a5614-5f07-441f-a9be-fb24d89f69ba/y6yViVsrnQ.json"></iframe> 
                </div>

                @if($success)
              <div
                class="mb-3 inline-flex lg:w-full items-center rounded-lg px-6 py-5 text-base text-success-700"
                role="alert">
                <span class="mr-2">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24"
                    fill="currentColor"
                    class="h-5 w-5">
                    <path
                      fill-rule="evenodd"
                      d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z"
                      clip-rule="evenodd" />
                  </svg>
                </span>
                {{ $success }}
              </div>
                @endif

              </form>
            </div>
            <div class="block w-full shrink-0 grow-0 basis-auto lg:flex lg:w-6/12 xl:w-4/12">
          <div class="h-[500px] w-full">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3939.980961193305!2d7.452982769141227!3d9.065498468546764!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x104e0bfffff33f8f%3A0x3f87bafb3d42457b!2sSky%20memorial!5e0!3m2!1sen!2sus!4v1696906093264!5m2!1sen!2sus"
              class="left-0 top-0 h-full w-full rounded-t-lg lg:rounded-tr-none lg:rounded-bl-lg" frameborder="0"
              allowfullscreen></iframe>
          </diV>
        </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Section: Design Block -->
  </div>
  <!-- Container for demo purpose -->
