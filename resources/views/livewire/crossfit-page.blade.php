<div class="mt-8 ml-12">
    <h1 class="text-4xl w-11/12 pb-4 border-b border-slate-300 font-extrabold tracking-tight text-gray-900">
        Crossfit</h1>
    <form class="pt-4" wire:submit.prevent="submit">
        <div>
            <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
            <input type="text" name="name" wire:model="name" id="name" class="border w-72 rounded-md block">
            @error('name')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>

        <div class="mt-4">
            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
            <input type="text" name="email" wire:model="email" id="email" class="border w-72 rounded-md block">
            @error('email')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>

        <div class="mt-4">
            <label for="phone" class="block text-sm font-medium text-gray-700">Phone</label>
            <input type="text" name="phone" wire:model="phone" id="phone" class="border w-72 rounded-md block">
            @error('phone')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>

        <div class="mt-4">
            <label for="package" class="block text-sm font-medium text-gray-700">Package</label>
            <select class="border w-72 rounded-md block">
                <option>
                    A
                </option>
                <option>
                    B
                </option>
                <option>
                    C
                </option>
                <option>
                    D
                </option>
            </select>
        </div>
        <button type="submit"
            class="mt-10 w-72 bg-indigo-600 border border-transparent rounded-md py-3 px-8 flex items-center justify-center text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Add</button>
    </form>
</div>
