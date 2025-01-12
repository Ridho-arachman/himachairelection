<!-- Tombol Dark Mode -->
<button id="darkModeToggle"
    class="text-2xl p-2 rounded-lg border dark:bg-white border-gray-300 hover:bg-gray-100 dark:hover:bg-slate-200 focus:outline-none">
    🌞
</button>


<script>
    // Script untuk Toggle Dark Mode
    const darkModeToggle = document.getElementById("darkModeToggle");
    const html = document.documentElement;

    // Periksa mode yang tersimpan di Local Storage
    const currentTheme = localStorage.getItem("theme");
    if (currentTheme === "dark") {
        html.classList.add("dark");
        darkModeToggle.textContent = "🌙"; // Ubah emoji ke bulan
    }

    darkModeToggle.addEventListener("click", () => {
        if (html.classList.contains("dark")) {
            html.classList.remove("dark");
            darkModeToggle.textContent = "🌞"; // Emoji matahari
            localStorage.setItem("theme", "light");
        } else {
            html.classList.add("dark");
            darkModeToggle.textContent = "🌙"; // Emoji bulan
            localStorage.setItem("theme", "dark");
        }
    });
</script>
