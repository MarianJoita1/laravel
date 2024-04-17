<x-layout class="">

        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">
                Add footwear
            </h2>
            <p class="mb-4">add shoes, sandals or anything you want!</p>
        </header>
        <div class="absolute bg-gray-50 border border-gray-200 rounded p-6 w-1/2">

        <form method="POST" action="/shoes" enctype="multipart/form-data">
            @csrf
            <div class="mb-6">
                <label
                    for="brand"
                    class="inline-block text-lg mb-2"
                    >Brand Name</label
                >
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="brand"
                    value="{{old('brand')}}"
                />
                @error('brand')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="price" class="inline-block text-lg mb-2"
                    >Price</label
                >
                <input
                    type="number"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="price"
                    value="{{old('price')}}"
                />
                @error('price')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="logo" class="inline-block text-lg mb-2">
                    Add an image
                </label>
                <input
                    type="file"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="logo"
                />
                @error('logo')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="gender" class="inline-block text-lg mb-2">
                    Gender
                </label>
                <select name="gender" class="border border-gray-200 rounded p-2 w-full">
                    <option value="M">M</option>
                    <option value="F">F</option>
                </select>
                @error('gender')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>
            

            <div class="mb-6">
                <button
                    class="bg-teal-400 text-black rounded py-2 px-4 hover:bg-teal-500"
                >
                    Add
                </button>

                <a href="/" class="text-black ml-4"> Back </a>
            </div>
        </form>
    </div>

</x-layout>