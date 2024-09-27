<x-layout>
    <x-slot:title>{{ __(config('info.sitename')) }}</x-slot>
    <!-- 404 Main -->
    <section class="bg-rose-50 dark:bg-rose-900">
      <div
        class="mx-auto min-h-screen max-w-2xl py-20 mt-10"
      >
        <!-- Page not found -->
        <div class="flex flex-col justify-center ">
          <div class="max-w-lg">
            <p
              href="#"
              class="relative text-sm uppercase tracking-widest text-rose-800 dark:text-rose-200"
            >
              Error 404
            </p>
            <h2
              class="mt-3 text-4xl font-medium tracking-normal text-rose-900 dark:text-rose-100 md:text-5xl md:tracking-tight lg:leading-tight"
            >
              Page not found
            </h2>
            <div>
              <p class="mt-4 text-base leading-loose text-rose-600 dark:text-rose-400">
                Sorry, the page you are looking for does not exist. Try going
                back or visiting a different link.
              </p>
            </div>
            <div class="inline-block">
              <a
                href="{{ url('/')}}"
                class="group mt-4 flex items-center text-rose-700 dark:text-rose-300 no-underline transition duration-300 ease-in-out hover:text-gray-600 dark:hover:text-gray-200 sm:mt-5"
              >
                Go back home
                <x-icons.arrow-narrow-right />
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
</x-layout>
