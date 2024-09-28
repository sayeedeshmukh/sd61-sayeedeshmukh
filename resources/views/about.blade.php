<x-layout>
    <x-slot:title>About</x-slot>
    <!-- Post -->
    <article class="bg-rose-50 dark:bg-rose-900 pb-12 sm:pb-16 lg:pb-24">
        <!-- Post Header -->
        <header class="flex flex-col sm:flex-row">
            <!-- Image -->
            <div class="aspect-h-2 aspect-w-2 sm:aspect-h-1 sm:w-1/4"> <!-- Adjusted width to 1/4 -->
                <img
                    src="images/About.jpg"
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
                        href="{{ url('/About') }}"
                        class="transition-color relative text-sm font-medium uppercase tracking-widest text-rose-900 dark:text-rose-200 duration-300 ease-in-out hover:text-fuchsia-950 dark:hover:text-fuchsia-200"
                    >{{ __('about') }}</a>
                    <h2 class="mt-3 text-4xl font-medium tracking-normal text-rose-900 dark:text-rose-300 decoration-rose-300 decoration-3 transition duration-300 ease-in-out group-hover:underline sm:mt-5 sm:text-5xl sm:leading-tight md:tracking-tight lg:text-6xl">Sayee Deshmukh</h2>
                    <div>
                        <p class="mt-4 text-base leading-loose text-rose-900 dark:text-rose-200">As a dedicated student pursuing a Bachelor of Technology in Artificial Intelligence and Machine Learning, I am deeply passionate about the intersection of technology and innovation. My journey in academia is driven by an innate curiosity and a commitment to understanding complex concepts that shape our digital landscape. I thrive on practical applications of theory, which is why I am actively engaged in developing a static portfolio website using the Laravel framework. This project not only allows me to refine my technical skills but also serves as a canvas for showcasing my work.</p>
                        <p class="mt-4 text-base leading-loose text-rose-900 dark:text-rose-200">I utilize Blade templates and TailwindCSS, ensuring a modern and responsive design. Additionally, I'm incorporating language files to support multiple languages and implementing dark mode functionality for enhanced user experience. My meticulous approach is evident in my commitment to version control, as I diligently document every step of my projects on Git.</p>
                        <p class="mt-4 text-base leading-loose text-rose-900 dark:text-rose-200">Beyond the confines of my studies, I have a passion for travel and exploration. Each journey offers me a chance to experience new cultures and perspectives, further enriching my understanding of the world. This love for discovery fuels my creativity and inspires me to bring fresh ideas into my projects.</p>
                        <p class="mt-4 text-base leading-loose text-rose-900 dark:text-rose-200">In summary, I am a tech-savvy individual who embraces challenges and continually seeks growth. With a foundation in AIML and a hands-on approach to learning, I am excited about the endless possibilities that technology holds for the future. I look forward to leveraging my skills and experiences to make a meaningful impact in the field of artificial intelligence and beyond.</p>
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
