<header class="bg-rose-600 p-4 dark:bg-rose-700">
<button id="dark-mode-toggle">Toggle Dark Mode</button>

<script>
    document.getElementById('dark-mode-toggle').addEventListener('click', () => {
        document.documentElement.classList.toggle('dark');
    });
</script>

    <nav class="container mx-auto">
        <ul class="flex space-x-4">
            <li><a href="/" class="text-rose-50">Home</a></li>
            <li><a href="/about" class="text-rose-50">About</a></li>
            <li><a href="/projects" class="text-rose-50">Projects</a></li>
            <li><a href="/contact" class="text-rose-50">Contact</a></li>
        </ul>
    </nav>
</header>
