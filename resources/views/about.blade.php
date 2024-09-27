
<x-layout>
    <x-slot:title>About</x-slot>
    <!-- Post -->
    <article class="bg-rose-50 dark:bg-rose-950 pb-12 sm:pb-16 lg:pb-24">
        <!-- Post Header -->
        <header class="flex flex-col sm:flex-row">
          <!-- Image -->
          <div class="aspect-h-2 aspect-w-2 w-full sm:aspect-h-1 sm:w-1/2 ">
            <img
              src="images/About.jpg"
              class="object-cover object-center"
            />
          </div>

          <!-- Post Header Content -->
          <div class="px-5 lg:px-0 sm:w-1/2">
            <!-- Article Information -->
            <div
              class="mx-auto mb-8 max-w-prose border-b border-rose-300/70 pb-8 pt-10 text-lg sm:pt-16"
            >
              <a
                href="{{ url('/projects/technology')}}"
                class="transition-color relative text-sm font-medium uppercase tracking-widest text-rose-900 dark:text-rose-200 duration-300 ease-in-out hover:text-fuchsia-950 dark:hover:text-fuchsia-200"
                >{{ __('Technology') }}</a
              >

              <h2
                class="mt-3.5 text-4xl font-medium tracking-normal text-rose-900 dark:text-rose-300 decoration-rose-300 decoration-3 transition duration-300 ease-in-out group-hover:underline sm:mt-5 sm:text-5xl sm:leading-tight md:tracking-tight lg:text-6xl"
              >
                Generative AI
              </h2>

              <div>
                <p class="mt-4 text-base leading-loose text-rose-800 dark:text-rose-200">
                What is Generative AI? <br>
                What are the benefits of Generative AI? <br>
                What are the risks of Generative AI? <br>
                Where should I start with Generative AI?<br>
                What are some practical uses of Generative AI today?
              </p>
              </div>

              <!-- Author meta -->
              <div class="mt-6 flex items-center sm:mt-8">
                <a href="{{ url('/about') }}" class="mr-3 flex-shrink-0">
                  <div class="relative">
                    <img
                      class="h-8 w-8 rounded-xl object-cover object-center sm:h-9 sm:w-9"
                      src="public/images/author.jpg"
                      alt=""
                    />
                    <span
                      class="absolute inset-0 rounded-xl shadow-inner"
                      aria-hidden="true"
                    ></span>
                  </div>
                </a>

                <div class="flex items-center text-sm lg:text-[15px]">
                  <span class="hidden text-rose-800 dark:text-rose-200 sm:inline-block"
                    >By&nbsp;</span
                  >
                  <a
                    class="font-medium text-rose-900 dark:text-rose-200 hover:underline"
                    href="{{ url('/about') }}"
                    >{{ __(config('info.sitename')) }}</a
                  >

                  <x-icons.calendar />
                  <span class="ml-1 text-rose-800 dark:text-rose-200">Nov 2, 2020</span>

                  <span class="hidden items-center sm:flex">
                    <x-icons.clock />
                    <span class="ml-1 text-rose-800 dark:text-rose-200">15 min read</span>
                  </span>
                </div>
              </div>
            </div>
          </div>
        </header>

        
          <!-- Post Footer -->
          <footer
            class="divide-y-rose-300/70 mx-auto mt-12 max-w-prose divide-y text-lg sm:mt-14"
          >
            <!-- Social Share Buttons -->
            <div class="py-8 sm:py-10">
              <div class="flex items-center justify-between">
                <span class="text-lg font-medium text-rose-900 dark:text-rose-200"> Share </span>

                <!-- Social Links -->
                <ul class="flex items-center space-x-3">
                    @foreach (config('info.sociallinks') as $link)
                    <li>
                        <a
                            href="{{ url($link['url'])}}" target="_blank"
                            class="group flex h-10 w-10 items-center justify-center rounded-full border border-rose-300/70 bg-transparent transition duration-300 ease-in-out sm:h-12 sm:w-12"
                        >
                            <x-dynamic-component :component="$link['name']" />
                        </a>
                    </li>
                    @endforeach
                </ul>
              </div>
            </div>

            <!-- Author Details -->
            <div class="py-8 sm:py-10">
              <div class="flex w-full items-center justify-between">
                <div class="flex flex-col sm:flex-row">
                  <!-- Image -->
                  <div class="flex-shrink-0">
                    <div class="relative w-fit">
                      <img
                        class="h-20 w-20 rounded-2xl object-cover object-center sm:h-24 sm:w-24"
                        src="public/images/author.jpg"
                        alt=""
                      />
                      <span
                        class="absolute inset-0 rounded-2xl shadow-inner"
                        aria-hidden="true"
                      ></span>
                    </div>
                  </div>

                  <!-- Content -->
                  <div class="mt-5 text-left sm:ml-6 sm:mt-0">
                    <div class="flex items-center justify-between">
                      <div class="'flex flex-col">
                        <p class="text-xs uppercase tracking-widest text-rose-800 dark:text-rose-200">
                            {{ __('About Author') }}
                        </p>
                        <h1
                          class="mt-1 text-xl font-medium tracking-normal text-rose-900 dark:text-rose-200 md:tracking-tight lg:leading-tight"
                        >
                          {{ __(config('info.sitename'))}}
                        </h1>
                      </div>
                    </div>

                    <p class="mt-2.5 text-base leading-loose text-rose-300">
                    I'm a student deeply drawn to the world of learning and discovery. My journey through academia is not just about earning grades; it's about embracing every
opportunity to learn and grow, both intellectually and creatively.
                    </p>

                    <!-- Author Social Links -->
                    <ul class="mt-3.5 flex items-center space-x-3">
                        @foreach (config('info.sociallinks') as $link)
                        <li>
                            <a href="{{ url($link['url'])}}" @if (!($loop->last)) class="group" @endif>
                            <x-dynamic-component :component="$link['name']" />
                            </a>
                        </li>
                    @endforeach
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </footer>
        </div>
      </article>
</x-layout>
