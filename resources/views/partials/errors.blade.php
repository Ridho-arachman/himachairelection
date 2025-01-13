@if ($errors->any())
    <div id="error-popup"
        class="fixed  z-20 bottom-20 right-5 bg-red-500 text-white px-4 py-2 rounded shadow-lg transition transform duration-300">
        <ul class="list-disc list-inside">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    <script>
        setTimeout(() => {
            const errorPopup = document.getElementById('error-popup');
            if (errorPopup) {
                errorPopup.classList.add('hidden');
            }
        }, 5000); // Tampilkan error lebih lama, 5 detik
    </script>
@endif
