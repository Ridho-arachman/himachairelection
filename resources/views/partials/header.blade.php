<header class="bg-white dark:bg-gray-800  shadow-md py-6">
    <div class="container mx-auto px-6 flex justify-between items-center">
        <h1 class="text-xl font-semibold text-gray-800 dark:text-white">HIMAChairElection 🗳️</h1>
        <div class="flex items-center justify-center gap-10">
            @include('partials.dark-mode-button')
            @if (Auth::check())
                @include('partials.logout')
            @endif
        </div>
    </div>
</header>
