<footer class="bg-rose-600 p-4 mt-8 dark:bg-rose-700">
    <div class="container mx-auto text-center">
        <ul class="flex justify-center space-x-4">
            <li><a href="{{ config('site.social.facebook') }}" class="text-rose-50">Facebook</a></li>
            <li><a href="{{ config('site.social.twitter') }}" class="text-rose-50">Twitter</a></li>
            <li><a href="{{ config('site.social.linkedin') }}" class="text-rose-50">LinkedIn</a></li>
        </ul>
        <p class="text-white">&copy; {{ date('Y') }} My Portfolio</p>
    </div>
</footer>
