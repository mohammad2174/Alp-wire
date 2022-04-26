<div class="mt-8 ml-12" x-data="{ open: false }">
    <h1 class="w-11/12 pb-4 text-4xl font-extrabold tracking-tight text-gray-900 border-b border-slate-300">
        Fitness</h1>
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
    <form class="pt-4" @submit.prevent="open = true">
        <div>
            <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
            <input required type="text" name="name" wire:model="name" id="name" class="block border rounded-md w-72">
            @error('name')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>

        <div class="mt-4">
            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
            <input required type="text" name="email" wire:model="email" id="email" class="block border rounded-md w-72">
            @error('email')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>

        <div class="mt-4">
            <label for="phone" class="block text-sm font-medium text-gray-700">Phone</label>
            <input required type="text" name="phone" wire:model="phone" id="phone" class="block border rounded-md w-72">
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
</div>
