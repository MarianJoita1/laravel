<x-layout class="">
    <div class="absolute bg-gray-50 border border-gray-200 rounded p-6 w-1/2 justify-center">
    
    <form method="POST" action="/users">
        @csrf
        <div class="mb-6">
            <label for="name" class="inline-block text-lg mb-2">
                Name
            </label>
            <input
                type="text"
                class="border border-gray-200 rounded p-2 w-full"
                name="name"
            />
    
        </div>
    
        <div class="mb-6">
            <label for="email" class="inline-block text-lg mb-2"
                >Email</label
            >
            <input
                type="email"
                class="border border-gray-200 rounded p-2 w-full"
                name="email"
    
            />
    
        </div>
    
        <div class="mb-6">
            <label
                for="password"
                class="inline-block text-lg mb-2"
            >
                Password
            </label>
            <input
                type="password"
                class="border border-gray-200 rounded p-2 w-full"
                name="password"
    
            />
    
        </div>
    
        <div class="mb-6">
            <label
                for="password2"
                class="inline-block text-lg mb-2"
            >
                Confirm Password
            </label>
            <input
                type="password"
                class="border border-gray-200 rounded p-2 w-full"
                name="password_confirmation"
    
            />
    
        </div>
    
        <div class="mb-6">
            <button
                type="submit"
                class="bg-laravel text-black border border-red-800 rounded py-2 px-4 hover:bg-red-500"
            >
                Sign Up
            </button>
        </div>
    
        <div class="mt-8">
            <p>
                Already have an account?
                <a href="/login" class="text-laravel"
                    >Login</a
                >
            </p>
        </div>
    </form>
    </div>
</x-layout>