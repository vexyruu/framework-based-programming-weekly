<x-layout>
    <h2>{{ $friend->name }}</h2>

    <div class="bg-gray-200 p-4 rounded">
        <p><strong>Fren level:</strong> {{ $friend->frenpoint }}</p>
        <p><strong>About me:</strong></p>
        <p>{{ $friend->bio }}</p>
    </div>
    <div class="border-2 border-dashed bg-white px-4 pb-4 my-4 rounded">
        <h3>House Information</h3>
        <p><strong>House name:</strong> {{ $friend->house->name }}</p>
        <p><strong>Location:</strong> {{ $friend->house->location }}</p>
        <p><strong>About the House:</strong></p>
        <p>{{ $friend->house->description }}</p>
    </div>

</x-layout>