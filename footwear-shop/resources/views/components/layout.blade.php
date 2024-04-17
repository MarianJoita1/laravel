<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
            integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />

        <script src="https://cdn.tailwindcss.com"></script>
        <script src="//unpkg.com/alpinejs" defer></script>
        <!-- Styles -->

    </head>
    <body class="font-sans antialiased m-0 p-0">
        <div class="relative">
        
                <header class="">
                    <nav class="py-5 flex justify-between items-center mb-4 bg-teal-400">
                        <a href="/"
                            ><img class="w-24 opacity-50" src="{{asset('images/logo.png')}}" alt="" class="logo"
                        /></a>
                        <h1 class="text-2xl">MySHOP</h1>
                        <ul class="flex space-x-6 mr-6 text-lg">
                            @auth
                            <li>
                                
                                <span class="font-bold uppercase">
                                    Welcome {{auth()->user()->name}}
                                </span>
                            </li>
                            <li>
                                <a href="/shoes/create" class="font-bold"><i class="fa-solid fa-pencil"></i>Add footwear</a>
                            </li>
                            <li>
                                <form class="inline" method="POST" action="/logout">
                                    @csrf
                                    <button type="submit">
                                        <i class="fa-solid fa-door-closed"></i>Logout
                                    </button>
            
                                </form>
                            </li>
                            @else
                            <li>
                                <a href="/register" class="hover:text-laravel"
                                    ><i class="fa-solid fa-user-plus"></i> Register</a
                                >
                            </li>
                            <li>
                                <a href="/login" class="hover:text-laravel"
                                    ><i class="fa-solid fa-arrow-right-to-bracket"></i>
                                    Login</a
                                >
                            </li>
                            
                            @endauth
                        </ul>
                    </nav>
                </header>

                {{$slot}}
                <footer class="py-16 text-center text-sm text-black">
                    <x-flash-message/>
                </footer>
        </div>
    </body>
</html>
