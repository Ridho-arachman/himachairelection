@if (session('success'))
    <div id="success-popup"
        class="fixed z-20 bottom-20 right-5 bg-green-500 text-white px-4 py-2 rounded shadow-lg transition transform duration-300">
        {{ session('success') }}
    </div>
    <script>
        setTimeout(() => {
            const successPopup = document.getElementById('success-popup');
            if (successPopup) {
                successPopup.classList.add('hidden');
            }
        }, 3000);
    </script>
@endif
