<div>
    <a href="{{ $href }}" class="block group">
        <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition-shadow h-full border border-gray-200">
            <div class="flex items-center gap-2 mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $iconPath }}" />
                </svg>
                <h3 class="text-lg font-semibold">{{ $title }}</h3>
            </div>
            <p class="text-sm text-gray-600">{{ $description }}</p>
        </div>
    </a>

</div>
