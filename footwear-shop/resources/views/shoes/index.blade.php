<x-layout>
        @include('partials/_search',['request' => request()])

    
    <div class="lg:grid lg:grid-cols-4 gap-4 space-y-4 md:space-y-0 mx-4">
        @if(count($shoes) == 0)
            <p>No posts found</p>
        @endif
        @foreach ($shoes as $shoe)
            <x-card :shoe="$shoe"></x-card>
        @endforeach
    </div>

</x-layout>