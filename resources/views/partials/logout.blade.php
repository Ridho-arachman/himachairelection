<form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit" class="bg-red-500 text-white font-bold py-2 px-4 rounded hover:bg-red-600 transition">
        Logout
    </button>
</form>
