
<div class="flex items-center justify-center w-full min-h-screen mx-auto overflow-hidden bg-white shadow-md rounded- dark:bg-gray-800">
    <div class="px-6 py-4">
        <img src="/image/fathulgif.gif" class="flex items-center justify-center h-72" />

        @if(session()->has('fail'))
        <span class="flex items-center justify-center mt-1 text-sm text-red-400">{{ session('fail') }}</span>
    @endif

    <form wire:submit.prevent="login">
@csrf
        <div class="w-full mt-4">
            <label for="email">Email</label>
            <input class="block w-full px-4 py-2 mt-2 text-gray-700 placeholder-gray-500 bg-white border border-gray-300 rounded dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring @error('name') border-red-500 @enderror" wire:model="email" type="text" id="email" name="email">

            @error('email')
                <span class="mt-1 text-sm text-red-400">{{ $message }}</span>
            @enderror
        </div>

        <div class="w-full mt-4">
            <label for="password">Password</label>
            <input class="block w-full px-4 py-2 mt-2 text-gray-700 placeholder-gray-500 bg-white border border-gray-300 rounded dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring @error('name') border-red-500 @enderror" wire:model.lazy="password" type="password" id="password" name="password">

            @error('password')
                <span class="mt-1 text-sm text-red-400">{{ $message }}</span>
            @enderror
        </div>

        <div class="flex items-center justify-center pt-6 pb-8">
            <input  class="px-4 py-2 leading-5 text-white transition-colors duration-200 transform bg-gray-700 rounded hover:bg-gray-600 focus:outline-none" type="submit" value="Login">
        </div>

    </form>
    </div>
</div>
