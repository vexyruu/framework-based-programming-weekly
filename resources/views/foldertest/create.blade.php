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
                <label for="frenpoint">Frenpoint (0-100):</label>
                <input type="number" id="frenpoint" name="frenpoint" value="{{ old('frenpoint') }}" required>
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
                        <option value="{{ $house->id }}" {{ $house->id == old('house_id') ? 'selected' : '' }}>
                            {{ $house->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn">Create</button>
        </div>

    @if ($errors->any())
      <ul class="px-4 py-2 bg-red-100">
        @foreach ($errors->all() as $error)
          <li class="my-2 text-red-500">{{ $error }}</li>
        @endforeach
      </ul>
    @endif
        
    </form>
</x-layout>