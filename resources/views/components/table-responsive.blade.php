<div class="flex flex-col justify-center h-full">
    <!-- Table -->
    <div class="w-full mx-auto bg-white shadow-lg rounded-sm border border-gray-200 mt-14">
        <header class="px-5 py-4 border-b border-gray-100">
            <h2 class="font-semibold text-gray-800">{{ $title }}</h2>
        </header>
        <div class="p-3">
            <div class="overflow-x-auto">
                {{ $slot }}
            </div>
        </div>
    </div>
</div>
