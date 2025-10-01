<x-layout>
    <form action="{{ route('foldertest.store') }}" method="POST">
        @csrf

        <h2>Create a New Friend</h2>

        <div class="card">
            <div class="form-group">
                <label for="name">Friend Name:</label>
                <input type="text" id="name" name="name" value="{{ old('name') }}" required>
            </div>

            <div class="form-group">
                <label for="skill">Friend Skill (0-100):</label>
                <input type="number" id="skill" name="skill" value="{{ old('skill') }}" required>
            </div>

            <div class="form-group">
                <label for="bio">Biography:</label>
                <textarea rows="5" id="bio" name="bio" required>{{ old('bio') }}</textarea>
            </div>

            <div class="form-group">
                <label for="house_id">House:</label>
                <select id="house_id" name="house_id" required>
                    <option value="" disabled selected>Select a House</option>
                    @foreach($houses as $house)
                        <option value="{{ $house->id }}">
                            {{ $house->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn">Create</button>
        </div>
        
    </form>
</x-layout>