<x-app-layout>
    <section class="bg-cover" style="background-image: url({{ asset('images/bg/kids.jpg'); }})">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36">
            <div class="w-full md:w-3/4 lg:w-1/2">
                <h1 class="text-white font-bold text-4xl">La mejor formación para tus hijos!!!</h1>
                <p class="text-white text-lg mt-2 mb-4">Educacion al mejor nivel...</p>
                @livewire('search')
            </div>
        </div>
    </section>

    @livewire('course-index')

</x-app-layout>
