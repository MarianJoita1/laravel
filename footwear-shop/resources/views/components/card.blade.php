@props(['shoe'])
<div class="bg-gray-50 border border-gray-200 rounded p-6">
    <div class="flex content-center relative">
        <img
            class="hidden w-48 mr-6 md:block self-center"
            src="{{$shoe->logo ? asset('storage/' . $shoe->logo) : asset('images/logo.png')}}"
            alt=""
        />
        
        <div class="flex-row flex-grow">
            @auth
            <form method="POST" action="/favorites" class=" float-right">
                @csrf
                <button class="fa-regular fa-heart text-red-300 z-20 hover:text-red-500"></button>
            </form>
            @endauth
            
            <div class="text-xl font-bold mb-4 text-green-600">{{$shoe->price}} RON</div>
                
            <div class="text-lg mt-4 font-semibold hover:text-red-600">
                {{$shoe->brand}} 
            </div>
            <div>
            @if ($shoe->gender === 'M')
                <i class="fa-solid fa-person fa-xl text-blue-500 pt-6"></i>
            @else
                <i class="fa-solid fa-person-dress fa-xl text-pink-500 pt-6"></i>
            @endif
            </div>
            <div class="mt-10">
                <a  href="/shoes/{{$shoe->id}}" class="h-10 w-20 text-white rounded-md bg-red-500 hover:bg-red-600  p-2"><i class="fa-solid fa-arrow-right"></i>
                    View
                </a>
            </div>
        </div>
    </div>
</div>