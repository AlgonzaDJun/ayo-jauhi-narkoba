<div class=" flex items-center justify-center p-4">
    <div class="bg-gradient-to-br from-teal-400 to-blue-500 rounded-lg shadow-lg p-8 max-w-md w-full text-center relative overflow-hidden">
        <div class="absolute top-0 left-0 w-full h-full opacity-10">
            <svg class="absolute top-0 left-0 w-16 h-16 text-white" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 3.5a1.5 1.5 0 013 0V4a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-.5a1.5 1.5 0 000 3h.5a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-.5a1.5 1.5 0 00-3 0v.5a1 1 0 01-1 1H6a1 1 0 01-1-1v-3a1 1 0 00-1-1h-.5a1.5 1.5 0 010-3H4a1 1 0 001-1V6a1 1 0 011-1h3a1 1 0 001-1v-.5z" />
            </svg>
            <svg class="absolute bottom-0 right-0 w-16 h-16 text-white transform rotate-180" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 3.5a1.5 1.5 0 013 0V4a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-.5a1.5 1.5 0 000 3h.5a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-.5a1.5 1.5 0 00-3 0v.5a1 1 0 01-1 1H6a1 1 0 01-1-1v-3a1 1 0 00-1-1h-.5a1.5 1.5 0 010-3H4a1 1 0 001-1V6a1 1 0 011-1h3a1 1 0 001-1v-.5z" />
            </svg>
        </div>
        <h1 class="text-4xl font-bold text-white mb-4">{{ $title }}</h1>
        <p class="text-xl text-white mb-6">{{ $message }}</p>
        <div class="bg-white bg-opacity-20 rounded-lg p-4 mb-6">
            <h2 class="text-2xl font-semibold ">{{ $subtitle }}</h2>
        </div>
        <div class="flex justify-center space-x-4 mb-6">
            @for ($i = 0; $i < $stars; $i++)
                <svg class="w-8 h-8 text-yellow-300" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                </svg>
            @endfor
        </div>
        <p class="text-lg text-white">{{ $footer }}</p>
    </div>
</div>
