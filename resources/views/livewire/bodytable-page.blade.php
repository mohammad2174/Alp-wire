<div class="mt-8 ml-12" x-data="{ open: false }">
    <h1 class="w-11/12 pb-4 text-4xl font-extrabold tracking-tight text-gray-900 border-b border-slate-300">
        SignUp</h1>
    <div x-show="open" class="px-4 py-3 text-teal-900 bg-teal-100 border-t-4 border-teal-500 rounded-b shadow-md"
        role="alert">
        <div class="flex">
            <div class="py-1"><svg class="w-6 h-6 mr-4 text-teal-500 fill-current"
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path
                        d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z" />
                </svg></div>
            <div>
                <p class="font-bold">User Successfuly Saved!</p>
            </div>
        </div>
    </div>
    <div class="flex">
        <form class="pt-4" wire:submit.prevent="submit" @submit.prevent="open = true">
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                <input required type="text" name="name" wire:model="name" id="name"
                    class="block border rounded-md w-72">
                @error('name')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div class="mt-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input required type="text" name="email" wire:model="email" id="email"
                    class="block border rounded-md w-72">
                @error('email')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div class="mt-4">
                <label for="phone" class="block text-sm font-medium text-gray-700">Phone</label>
                <input required type="text" name="phone" wire:model="phone" id="phone"
                    class="block border rounded-md w-72">
                @error('phone')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div class="mt-4">
                <label for="package" class="block text-sm font-medium text-gray-700">Package</label>
                <select wire:model="package" name="package" class="block border rounded-md w-72">
                    <option>
                        choose one package
                    </option>
                    <option value="5">
                        5 days in week
                    </option>
                    <option value="4">
                        4 days in week
                    </option>
                    <option value="3">
                        3 days in week
                    </option>
                    <option value="2">
                        2 days in week
                    </option>
                </select>
            </div>
            <button type="submit"
                class="flex items-center justify-center px-8 py-3 mt-10 text-base font-medium text-white bg-indigo-600 border border-transparent rounded-md w-72 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Add</button>
        </form>
        <div class="max-w-2xl mx-auto" x-show="open">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg" x-data="{
                search: '',
                @foreach ($users as $user) items: ['{{ $user->name }}'], @endforeach
                get filteredItems() {
                    return this.items.filter(
                        i => i.startsWith(this.search)
                    )
                }
            }">
                <div class="p-4">
                    <label for="table-search" class="sr-only">Search</label>
                    <div class="relative mt-1">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <input type="text" id="table-search" x-model="search"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-80 pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Search for items">
                    </div>
                </div>
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                email
                            </th>
                            <th scope="col" class="px-6 py-3">
                                phone
                            </th>
                            <th scope="col" class="px-6 py-3">
                                package
                            </th>
                            <th scope="col" class="px-6 py-3">
                                <span class="sr-only">Edit</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <template x-for="item in filteredItems" :key="item">
                                <tr
                                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <td scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                        {{ $user->name }}
                                        <span class="invisible" x-text="item"></span>
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $user->email }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $user->phone }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $user->package }}
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <a href="#"
                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                    </td>
                                </tr>
                            </template>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <script src="https://unpkg.com/flowbite@1.3.4/dist/flowbite.js"></script>
        </div>
    </div>
</div>
