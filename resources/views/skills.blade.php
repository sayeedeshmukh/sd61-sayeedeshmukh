<x-layout>
    <x-slot:title>Skills</x-slot>
    <!-- Post -->
    <article class="bg-rose-50 dark:bg-rose-900 pb-12 sm:pb-16 lg:pb-24">
        <!-- Post Header -->
        <header class="flex flex-col sm:flex-row">
            <!-- Image -->
            <div class="aspect-h-2 aspect-w-2 sm:aspect-h-1 sm:w-1/4"> <!-- Adjusted width to 1/4 -->
                <img
                    src="images/skills.jpg"
                    class="object-cover object-center border-4 border-rose-300 mr-6" 
                />
            </div>
                        <!-- Post Header Content -->
            <div class="px-5 lg:px-2 sm:w-3/4">
                <!-- Article Information -->
                <div
                    class="mx-auto mb-4 max-w-prose border-b border-rose-300/70 pb-4 pt-4 text-lg sm:pt-10"
                >
                    <a
                        href="{{ url('/Skills') }}"
                        class="transition-color relative text-sm font-medium uppercase tracking-widest text-rose-900 dark:text-rose-200 duration-300 ease-in-out hover:text-fuchsia-950 dark:hover:text-fuchsia-200"
                    >{{ __('skills') }}</a>
                    <h2 class="mt-3 text-4xl font-medium tracking-normal text-rose-900 dark:text-rose-300 decoration-rose-300 decoration-3 transition duration-300 ease-in-out group-hover:underline sm:mt-5 sm:text-5xl sm:leading-tight md:tracking-tight lg:text-6xl">Skills</h2>
                    <div>
                    <div class="bg-rose-200 dark:bg-rose-900 p-6 rounded-lg shadow-md">
                                    <ul>
                                        <li class="text-2xl text-rose-900 dark:text-rose-200"><h2><b>Tech Skills</b></h2></li>
                                        <li class="text-rose-900 dark:text-rose-200">C language</li>
                                        <li class="text-rose-900 dark:text-rose-200">Python language</li>
                                        <li class="mt-2 text-rose-900 dark:text-rose-200">HTML and CSS</li>
                                        <li class="mt-2 text-rose-900 dark:text-rose-200">Problem solving skills</li>
                                        <li class="mt-2 text-rose-900 dark:text-rose-200">Web Development</li>
                                        <li class="mt-2 text-rose-900 dark:text-rose-200">Data Structures and Algorithms</li>
                                    </ul>
                                </div>
                                <br>
                                <div class="bg-rose-200 dark:bg-rose-900 p-6 rounded-lg shadow-md">
                                    <ul>
                                        <li class="text-2xl text-rose-900 dark:text-rose-200"><h2><b>Soft Skills</b></h2></li>
                                        <li class="text-rose-900 dark:text-rose-200">Patient</li>
                                        <li class="text-rose-900 dark:text-rose-200">Eager to Learn</li>
                                        <li class="mt-2 text-rose-900 dark:text-rose-200">Stress Management</li>
                                        <li class="mt-2 text-rose-900 dark:text-rose-200">Creative Mind</li>
                                        <li class="mt-2 text-rose-900 dark:text-rose-200">Resilient Leraning</li>
                                        <li class="mt-2 text-rose-900 dark:text-rose-200">MultiTasking</li>
                                    </ul>
                                </div>    
                    </div>
                    
                </div>
            </div>
        </header>

        <!-- Post Footer -->
        <footer class="divide-y-rose-300/70 mx-auto mt-12 max-w-prose divide-y text-lg sm:mt-14">
            <!-- Social Share Buttons -->
            <div class="py-8 sm:py-10">
                <div class="flex items-center justify-between">
                    <span class="text-lg font-medium text-rose-900 dark:text-rose-200">You can find me here: </span>

                    <!-- Social Links -->
                    <ul class="flex items-center space-x-3">
                        @foreach (config('info.sociallinks') as $link)
                        <li>
                            <a
                                href="{{ url($link['url']) }}" target="_blank"
                                class="group flex h-10 w-10 items-center justify-center rounded-full border border-rose-900/70 dark:text-rose-300 bg-transparent transition duration-300 ease-in-out sm:h-12 sm:w-12"
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
                                    src="images/author.jpg"
                                    alt=""
                                />
                                <span
                                    class="absolute inset-0 rounded-2xl shadow-inner"
                                    aria-hidden="true"
                                ></span>
                            </div>
                        </div>

                        <!-- Content -->
                        <div class="mt-5 text-left sm:ml-4 sm:mt-0"> <!-- Adjust margin if needed -->
                            <div class="flex items-center justify-between">
                                <div class="flex flex-col">
                                    <p class="text-xs uppercase tracking-widest text-rose-900 dark:text-rose-200">
                                        {{ __('About Author') }}
                                    </p>
                                    <h1
                                        class="mt-1 text-xl font-medium tracking-normal text-rose-900 dark:text-rose-200 md:tracking-tight lg:leading-tight"
                                    >
                                        {{ __(config('info.sitename')) }}
                                    </h1>
                                </div>
                            </div>

                            <p class="mt-2.5 text-base leading-loose text-rose-300">
                                I'm a student deeply drawn to the world of learning and discovery. My journey through academia is not just about earning grades; it's about embracing every opportunity to learn and grow, both intellectually and creatively.
                            </p>

                            <!-- Author Social Links -->
                            <ul class="mt-3.5 flex items-center space-x-3">
                                @foreach (config('info.sociallinks') as $link)
                                <li>
                                    <a href="{{ url($link['url']) }}" @if (!($loop->last)) class="group" @endif>
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
    </article>
</x-layout>
