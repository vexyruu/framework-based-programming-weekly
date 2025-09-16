<x-layout>
    <h1>current friend network</h1>
    @if($greeting == "hello")
        <p>who up finding friends to hangout with rn</p>
    @endif
    <p>{{$greeting}}</p>
    <ul>
        @foreach($friends as $friend)
        <li>
            <x-card href="/test/{{$friend['id']}}" :highlight="$friend['frenpoint'] > 65">
                <h3>{{$friend['name']}}</h3>
            </x-card>
        </li>
        @endforeach
    </ul>
</x-layout>