<x-blank-layout :title="$view->name">
    <main class='bg-slate-100 dark:bg-slate-900 py-8 h-screen overflow-x-hidden overflow-y-auto'>
        <section id="content-container" class='w-full lg:w-3/5 mx-auto px-5'>
            <h1 class='text-5xl text-blue-950 font-bold dark:text-white text-center mb-10 title-ita'>{{ $view->name }}</h1>
            <h1 class='text-5xl text-blue-950 font-bold dark:text-white text-center mb-10 title-en hidden'>{{ $view->name_en }}</h1>

            <div class="ita text-justify">
                {!! $view->body !!} 
                <p class='text-lg text-ks text-blue-950 dark:text-white'><strong>Sitografia:</strong> <a href="{{ $view->link }}" class='underline'>{{ $view->link }}</a></p>
            </div>

            <div class="en text-justify hidden">
                {!! $view->body_en !!}
                <p class='text-lg text-ks text-blue-950 dark:text-white'><strong>Website:</strong> <a href="{{ $view->link }}" class='underline'>{{ $view->link }}</a></p>
            </div>
        </section>
    </main>

<!-- Contenitore Menù Fluttuante -->
    <div class="fixed bottom-8 right-8 flex flex-col-reverse items-center gap-3 z-50" role="region" aria-label="Menù opzioni rapide">
        
        <!-- Pulsante Principale (Toggle) -->
        <button id="menu-toggle" 
                aria-expanded="false" 
                aria-controls="floating-menu"
                aria-label="Apri menù delle opzioni"
                class="w-16 h-16 bg-blue-600 hover:bg-blue-700 text-white rounded-full shadow-xl flex items-center justify-center transition-colors relative z-10 focus:outline-none focus:ring-4 focus:ring-blue-400 focus:ring-offset-2 dark:focus:ring-offset-gray-900">
            Menù
        </button>

        <!-- Contenitore Opzioni Menù -->
        <div id="floating-menu" class="flex flex-col-reverse gap-3 items-center">
            
            <!-- Icona 1: Dark / Light Mode -->
            <button id="btn-theme" 
                    role="menuitem"
                    aria-label="Attiva tema scuro"
                    class="menu-item w-12 h-12 bg-white dark:bg-gray-800 text-gray-800 dark:text-white rounded-full shadow-lg flex items-center justify-center hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors focus:outline-none focus:ring-4 focus:ring-blue-400 hidden">
                <svg aria-hidden="true" class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path>
                </svg>
            </button>

            <!-- Icona 2: Accessibilità (Dimensione Font) -->
            <button id="btn-font" 
                    role="menuitem"
                    aria-pressed="false"
                    aria-label="Ingrandisci il testo"
                    class="menu-item w-12 h-12 bg-white dark:bg-gray-800 text-gray-800 dark:text-white rounded-full shadow-lg flex items-center justify-center hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors focus:outline-none focus:ring-4 focus:ring-blue-400 hidden">
                <span aria-hidden="true" class="font-bold text-lg">Aa</span>
            </button>

            <!-- Icona 3: Lingua (IT / EN) -->
            <button id="btn-lang" 
                    role="menuitem"
                    aria-label="Cambia lingua in inglese"
                    class="menu-item w-12 h-12 bg-white dark:bg-gray-800 text-gray-800 dark:text-white rounded-full shadow-lg flex items-center justify-center hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors font-bold focus:outline-none focus:ring-4 focus:ring-blue-400 hidden">
                IT
            </button>
            
        </div>
    </div>

    <script src="{{ asset('js/view-js.js') }}"></script>
</x-blank-layout>