<x-call-to-action>
    <x-slot:title>
      <h4 class="text-white text-base font-semibold mb-2">
        Check my PHP Developer Roadmap
      </h4>
      <h2 class=" text-white font-bold text-3xl sm:text-[38px] leading-tight mb-6 sm:mb-8 lg:mb-0 ">
        Start Learning <br class="hidden xs:block"/>
        PHP For FREE
      </h2>
    </x-slot>

    <div class="w-full lg:w-6/12 px-4">
        <div class="flex items-center -mx-3 sm:-mx-4">
          <div class="w-full xl:w-1/2 px-3 sm:px-4">
            <div class="py-3 sm:py-4">
              <img
                src="{{ url('/img/php-logo.png') }}"
                alt=""
                class="rounded-2xl w-full"
              />
            </div>
            <div class="py-3 sm:py-4">
              <img
                src="{{ url('/img/me3.png') }}"
                alt=""
                class="rounded-2xl w-full"
              />
            </div>
          </div>
          <div class="w-full xl:w-1/2 px-3 sm:px-4">
            <div class="my-4 relative z-10">
              <img
                src="{{ url('/img/me2.png') }}"
                alt=""
                class="rounded-2xl w-full"
              />
              <x-about-dots></x-about-dots>
            </div>
          </div>
        </div>
      </div>
  </x-call-to-action>