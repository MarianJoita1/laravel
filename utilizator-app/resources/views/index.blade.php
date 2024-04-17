<!DOCTYPE html>
<nav class="navbar navbar-light bg-light">
    
    <div class="container-fluid">
      <a class="navbar-brand" href="/">Home</a>
      
      @auth
      <li class="nav-item">
        <span class="font-bold uppercase"> Hi {{auth()->user()->name}}</span>
      </li>

      <li class="nav-item">
        <form class="inline" method="POST" action="/logout">
            @csrf
            <button type="submit">
                <i class="fa-solid fa-door-closed"></i>Logout
            </button>
        </form>      
      </li>

      @else
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="/register">Register</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="/login">Login</a>
      </li>
      @endauth
    </div>
</nav>
    <h1>Useri</h1>
    <form action="/">
    <div>
        <input type="text" name="search" placeholder="Search...">
        <button type="submit">
            Search
        </button>
    </div>
    </form>
    <div>
        @if(count($users) == 0)
            <p>No posts found</p>
        @endif

        <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">
        @foreach ($users as $user)
            <div class="flex-container">
                <h3 class="text-2xl">
                    {{$user->name}} ---  {{$user->email}}
                </h3>
                @auth
                    <div>
                        <form method="POST" action="/delete/{{$user->id}}">
                            @csrf
                            @method('DELETE')
                            <button >Delete</button>
                        </form>
                    </div>
                @endauth
            </div>
        @endforeach
        </div>

    </div>
</html>
