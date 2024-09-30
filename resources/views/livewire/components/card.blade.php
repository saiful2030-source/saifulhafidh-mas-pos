<div class="bg-white overflow-hidden shadow rounded-lg">
    @if($imageUrl)
        <img class="w-full h-48 object-cover" src="{{ $imageUrl }}" alt="{{ $title }}">
    @endif
    <div class="px-4 py-5 sm:p-6">
        <h3 class="text-lg leading-6 font-medium text-gray-900">
            {{ $title }}
        </h3>
        <div class="mt-2 max-w-xl text-sm text-gray-500">
            <p>{{ $content }}</p>
        </div>
    </div>
</div>