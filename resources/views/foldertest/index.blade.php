    <x-layout>
        <h1>current friend network</h1>
        @if($greeting == "hello")
            <p>who up finding friends to hangout with rn</p>
        @endif
        <p>{{$greeting}}</p>
        <ul>
            @foreach($friends as $friend)
            <li>
                <x-card :highlight="$friend['skill'] > 70" href="{{ route('foldertest.show', $friend->id) }}">
                    <div>
                        <h3>{{ $friend->name }}</h3>
                        <p>{{ $friend->house->name }}</p>
                    </div>
                    <p>Fren Level: {{ $friend['frenpoint'] }}</p>
                </x-card>
            </li>
            @endforeach
        </ul>
        {{ $friends->links() }}
    </x-layout>