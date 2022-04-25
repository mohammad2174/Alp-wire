<div class="mt-8 ml-12">
    <h1 class="w-11/12 pb-4 text-4xl font-extrabold tracking-tight text-gray-900 border-b border-slate-300">
        Bodybuilding</h1>
    <form class="pt-4" wire:submit.prevent="submit">
        <div>
            <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
            <input type="text" name="name" wire:model="name" id="name" class="block border rounded-md w-72">
            @error('name')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>

        <div class="mt-4">
            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
            <input type="text" name="email" wire:model="email" id="email" class="block border rounded-md w-72">
            @error('email')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>

        <div class="mt-4">
            <label for="phone" class="block text-sm font-medium text-gray-700">Phone</label>
            <input type="text" name="phone" wire:model="phone" id="phone" class="block border rounded-md w-72">
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
