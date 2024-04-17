<form action="/">
    <div class="relative border-2 border-gray-100 m-4 rounded-lg">
        <div class="absolute top-4 left-3">
            <i
                class="fa fa-search text-gray-400 z-20 hover:text-gray-500"
            ></i>
        </div>
        <input
            type="text"
            name="search"
            class="h-14 w-1/4 pl-10 pr-20 rounded-lg z-0 shadow focus:outline-none focus:bg-gray-100"
            placeholder="..."
            value="{{request('search')}}"
            
        />
        <label for="lowest" class="rounded-lg z-0 focus:shadow focus:outline-none bg-gray-100">Lowest price ></label>
        <input
            type="number"
            name="lowest"
            class="h-14 w-24 pl-5 pr-5 rounded-lg z-0 focus:shadow focus:outline-none bg-gray-100"
            placeholder="0"
            value="{{request('lowest',0)}}"
        />

        <label for="highest" class="rounded-lg z-0 focus:shadow focus:outline-none bg-gray-100">Highest price ></label>
        <input
            type="number"
            name="highest"
            class="h-14 w-24 pl-5 pr-5 rounded-lg z-0 focus:shadow focus:outline-none bg-gray-100"
            placeholder="500"
            value="{{request('highest',500)}}"
        />

        <label for="lowest" class="rounded-lg z-0 focus:shadow focus:outline-none bg-gray-100">Gender ></label>
        <select name="gender" class="h-14 w-48 pl-5 pr-5 rounded-lg z-0 focus:shadow focus:outline-none bg-gray-100">
            <option value="">select gender...</option>
            <option {{$request['gender'] == 'M' ? 'selected' : 'class=""'}} value="M">M</option>
            <option {{$request['gender'] == 'F' ? 'selected' : 'class=""'}} value="F">F</option>
        </select>

        <div class="absolute top-2 right-2">
            <button
                type="submit"
                class="h-10 w-20 text-white rounded-lg bg-red-500 hover:bg-red-600"
            >
                Search
            </button>
        </div>
    </div>
</form>