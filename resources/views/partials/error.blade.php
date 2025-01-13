@if ($errors->any())
    <div id="error-message"
        class="fixed top-4 left-1/2 transform -translate-x-1/2 bg-red-500 text-white text-sm font-medium px-4 py-2 rounded shadow-md opacity-100 transition-opacity duration-500">
        @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>

    <script>
        setTimeout(function() {
            const errorMessage = document.getElementById('error-message');
            if (errorMessage) {
                errorMessage.classList.add('opacity-0');
                setTimeout(function() {
                    errorMessage.style.display = 'none';
                }, 500); // Waktu untuk transisi
            }
        }, 5000); // Tampilkan selama 5 detik
    </script>
@endif
