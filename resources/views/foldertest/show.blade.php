<x-layout>
    <h2>{{ $friend->name }}</h2>

    <div class="bg-gray-200 p-4 rounded">
        <p><strong>Skill level:</strong> {{ $friend->skill }}</p>
        <p><strong>About me:</strong></p>
        <p>{{ $friend->bio }}</p>
    </div>
</x-layout>