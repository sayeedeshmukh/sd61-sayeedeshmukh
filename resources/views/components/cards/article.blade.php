@props(['article' => config('info.articles')[0], 'id' => 0])
<article
class="py-8 sm:flex lg:flex-col xl:flex-row xl:items-center"
>
<!-- Image -->
<a
    href="{{ url('/blog') }}"
    class="order-2 w-full sm:w-2/5 lg:order-1 lg:w-full xl:w-2/5"
>
    <div
    class="group aspect-h-9 aspect-w-16 relative z-10 animate-pulse overflow-hidden rounded-2xl bg-rose-100 dark:bg-rose-800"
    >
    <img
        data-src="images/featured-article-01.jpg"
        class="lazy rounded-2xl object-cover object-center opacity-0 transition duration-300 ease-in-out group-hover:scale-110"
    />
    </div>
</a>

<!-- Content -->
<div
    class="order-1 mt-5 w-full px-2 sm:mt-0 sm:max-w-sm sm:pl-0 sm:pr-5 lg:order-2 lg:mt-4 xl:ml-5 xl:mt-0 xl:flex-1"
>
    <a
    href="{{ url('/projects/'.Str::of($article['category'])->lower()) }}"
    class="transition-color text-xs font-medium uppercase tracking-widest text-rose-700 dark:text-rose-300 duration-300 ease-in-out hover:text-gray-600 dark:hover:text-gray-200"
    >
    {{ __($article['category']) }}
    </a>

    <a href="{{ url('/blog/' . $id) }}">
    <h3
        class="mt-2 text-xl font-medium leading-normal tracking-normal text-rose-900 dark:text-rose-100 decoration-rose-800 decoration-2 transition duration-300 ease-in-out hover:underline"
    >
        {{ $article['title']}}
    </h3>
    </a>

    <!-- Author -->
    <div class="mt-4 flex items-center justify-between">
    <!-- Author meta -->
    <div class="flex items-center justify-center">
        <a
        href="{{ url('/about') }}"
        class="mr-3 animate-pulse rounded-lg bg-rose-50 dark:bg-rose-900"
        >
        <img
            class="lazy h-6 w-6 flex-shrink-0 rounded-lg object-cover object-center opacity-0 transition duration-300 ease-in-out"
            data-src="images/author.jpg"
            alt="Author 01"
        />
        </a>
        <div class="text-sm">
        <span class="text-rose-800">By </span>
        <a
            class="font-medium text-rose-700 dark:text-rose-200 hover:underline"
            href="{{ url('/blog') }}"
            >{{ __(config('info.sitename'))}}</a
        >
        <span class="text-rose-500 lg:hidden xl:inline-block">
            · {{__($article['date'])}}</span
        >
        </div>
    </div>
    </div>
</div>
</article>
