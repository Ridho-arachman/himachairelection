<header class="bg-white fixed top-0 w-full dark:bg-gray-800  shadow-md py-6">
    <div class="container mx-auto px-6 flex justify-between items-center">
        <a href="/" class="text-xl font-semibold text-gray-800 dark:text-white">HIMAChairElection 🗳️</a>
        <div class="flex items-center justify-center gap-10">
            @include('partials.dark-mode-button')
            @if (Auth::check())
                @include('partials.logout')
            @endif
        </div>
    </div>
</header>
