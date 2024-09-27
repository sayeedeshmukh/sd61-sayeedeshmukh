<header
    class="relative border-b border-rose-300/60 dark:border-rose-800/60  bg-rose-50 dark:bg-rose-950 dark:border-rose-800"
    x-data="{ mobileMenuOpen: false }"
  >
    <nav
      class="mx-auto flex h-20 max-w-7xl items-center px-4 sm:px-6 lg:px-8"
    > 
      <!-- Main navbar for large screens -->
      <div class="flex w-full items-center justify-between"> 
        <!-- Logo-->
        <div class="flex row shrink-0 items-center">
          <a href="{{ url('/') }}">
            <x-icons.logo />
          </a>
          <a href="{{ url('/') }}" class="hidden lg:block">
            <span class="text-4xl text-rose-900 dark:text-rose-100 hidden lg:block ml-2">{{ __(config('info.sitename'))}}</span>
          </a>
        </div>

        <!-- Navigation for large screens -->
        <div
          class="ml-6 hidden items-center justify-between text-xl md:flex md:space-x-0.5 md:text-base lg:space-x-2"
        >
            @foreach (config('info.navlinks') as $navLink)
                <a
                    href="{{ url($navLink['url']) }}"
                    class="px-3 py-1 text-md font-medium text-rose-950 dark:text-rose-100 transition duration-300 ease-in-out hover:text-red-800 dark:hover:text-red-200"
                >
                    {{ __($navLink['name']) }}
                </a>
            @endforeach

          

          <x-theme-toggle />
          
        </div>

        <div class="flex px-0 items-center">
            <div class="md:hidden flex items-center space-x-2">
                <x-theme-toggle />
                
            </div>

        <!-- Hamburger menu button -->
        <button
          class="group relative ml-2 flex cursor-pointer items-center justify-center rounded-xl bg-rose-50 dark:bg-rose-800 p-3 transition duration-300 ease-in-out hover:bg-rose-100 focus:outline-none md:hidden"
          aria-label="Toggle Navigation"
          @click="mobileMenuOpen = !mobileMenuOpen"
        >
          <span
            class="relative h-3.5 w-4 transform transition duration-500 ease-in-out"
          >
            <span
              class="absolute block h-0.5 rotate-0 transform rounded-full bg-rose-600 dark:bg-rose-400 opacity-100 transition-all duration-300 ease-in-out group-hover:bg-rose-950 dark:group-hover:bg-rose-100"
              :class="mobileMenuOpen ? 'w-0 top-1.5 left-1/2': 'top-0 left-0 w-full'"
            ></span>
            <span
              class="absolute left-0 top-1.5 block h-0.5 w-full transform rounded-full bg-rose-600 dark:bg-rose-400 opacity-100 transition-all duration-300 ease-in-out group-hover:bg-rose-950 dark:group-hover:bg-rose-100"
              :class="mobileMenuOpen ? 'rotate-45': 'rotate-0'"
            ></span>
            <span
              class="absolute left-0 top-1.5 block h-0.5 w-full transform rounded-full bg-rose-600 dark:bg-rose-400 opacity-100 transition-all duration-300 ease-in-out group-hover:bg-rose-950 dark:group-hover:bg-rose-100"
              :class="mobileMenuOpen ? '-rotate-45': 'rotate-0'"
            ></span>
            <span
              class="absolute block h-0.5 rotate-0 transform rounded-full bg-rose-600 dark:bg-rose-400 opacity-100 transition-all duration-300 ease-in-out group-hover:bg-rose-950 dark:group-hover:bg-rose-100"
              :class="mobileMenuOpen ? 'top-1.5 left-1/2 w-0': 'left-0 top-3 w-full'"
            ></span>
          </span>
        </button>
        </div>
      </div>
    </nav>

    <!-- Mobile menu -->
    <nav
      class="md:hidden"
      aria-label="Global"
      id="mobile-menu"
      x-show="mobileMenuOpen"
      @keydown.escape.window="mobileMenuOpen = false"
    >
      <div class="space-y-1 px-2 pb-3 pt-2">
        @foreach (config('info.navlinks') as $navLink)
            <a
                href="{{ url($navLink['url']) }}"
                class="block rounded-lg bg-rose-50 dark:bg-rose-800 px-4 py-3 font-medium text-red-800 dark:text-red-300"
                aria-current="page"
            >{{ __($navLink['name']) }}</a>
        @endforeach
      </div>
      </div>
    </nav>
  </header>
