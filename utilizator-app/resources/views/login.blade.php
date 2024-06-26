
<form method="POST" action="/users/authenticate">
    @csrf

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
        <button
            type="submit"
            class="bg-laravel text-white rounded py-2 px-4 hover:bg-black"
        >
            Login
        </button>
    </div>

    <div class="mt-8">
        <p>
            Don't have an account?
            <a href="/register" class="text-laravel"
                >Sign In</a
            >
        </p>
    </div>
</form>