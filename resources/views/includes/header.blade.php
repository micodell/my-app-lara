<nav id="header" class="bg-white bg-opacity-0 shadow-md transition-all duration-400 ease-in-out text-slate-300 p-4 h-20 flex items-center sticky top-0 z-50">
    <div class="flex flex-row justify-between w-full mx-4">
        <a href="" class="font-bold text-2xl hover:scale-105 transition-all duration-500 ease-in-out">GENTA UNIVERSITY</a>
        <a href="mailto:c14240169@john.petra.ac.id" 
        class="font-semibold text-xl hover:text-blue-400 hover:border-b-2 border-blue-400 transition-all duration-100 ease-in-out">Contact</a>
    </div>
</nav>

<script>
    const header = document.getElementById('header');

    window.addEventListener('scroll', ()=> {
        if (window.scrollY > 0) {
            header.classList.remove('bg-opacity-0');
            header.classList.add('backdrop-blur-lg', 'bg-opacity-5');
        } else {
            header.classList.add('bg-opacity-0');
            header.classList.remove('backdrop-blur-lg', 'bg-opacity-5');
        }
    })
</script>
