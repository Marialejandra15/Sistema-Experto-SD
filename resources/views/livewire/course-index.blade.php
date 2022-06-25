<div>
    <div class="bg-gray-200 py-4 mb-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex">
            <button class="bg-white shadow h-12 px-4 rounded-lg text-gray-700 mr-4" wire:click="resetFilters">
                <i class="fas fa-archway text-xs mr-2"></i>
                Todos los cursos
            </button>


            <div class="relative" x-data="{ open:false }">
                <button
                    class="block h-12 rounded-lg overflow-hidden focus:outline-none mr-4 bg-white text-gray-700 px-4"
                    x-on:click="open = !open">
                    <i class="fas fa-tags text-xs mr-2"></i>
                    Categorias
                    <i class="fas fa-angle-down text-xs ml-2"></i>
                </button>
                <div class="absolute right-0 w-40 mt-2 py-2 bg-white border rounded shadow-xl" x-show="open"
                    x-on:click.away="open = !open">
                    @foreach ($categories as $category)
                        <a class="cursor-pointer transition-colors duration-200 block px-4 py-2 text-normal text-gray-900 rounded hover:bg-green-500 hover:text-white" wire:click="$set('category_id', {{ $category->id }})" x-on:click="open = !open">{{ $category->name }}</a>
                    @endforeach
                </div>
            </div>

            <div class="relative" x-data="{ open:false }">
                <button
                    class="block h-12 rounded-lg overflow-hidden focus:outline-none mr-4 bg-white text-gray-700 px-4"
                    x-on:click="open = !open">
                    <i class="fas fa-level-up-alt text-xs mr-2"></i>
                    Niveles
                    <i class="fas fa-angle-down text-xs ml-2"></i>
                </button>
                <div class="absolute right-0 w-40 mt-2 py-2 bg-white border rounded shadow-xl" x-show="open"
                    x-on:click.away="open = !open">
                    @foreach ($levels as $level)
                        <a class="cursor-pointer transition-colors duration-200 block px-4 py-2 text-normal text-gray-900 rounded hover:bg-green-500 hover:text-white" wire:click="$set('level_id', {{ $level->id }})" x-on:click="open = !open">{{ $level->name }}</a>
                    @endforeach
                    <div class="py-2">
                </div>
            </div>
        </div>
    </div>

    <div
        class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8 my-16">
        @foreach ($courses as $course)
            <x-course-card :course="$course" />
        @endforeach
    </div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-24">
        {{ $courses->links() }}
    </div>

</div>
