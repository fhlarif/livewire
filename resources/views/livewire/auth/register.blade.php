
<div class="flex items-center justify-center w-full min-h-screen mx-auto overflow-hidden bg-white shadow-md rounded- dark:bg-gray-800">
    <div class="px-6 py-4">
        <img src="/image/fathulgif.gif" class="flex items-center justify-center h-72" />


        <p class="mt-1 text-center text-gray-500 dark:text-gray-400">Login or create account</p>
    <form wire:submit.prevent="register">
@csrf
        <div class="w-full mt-4">
            <label for="email">Email</label>
            <input class="block w-full px-4 py-2 mt-2 text-gray-700 placeholder-gray-500 bg-white border border-gray-300 rounded dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring @error('name') border-red-500 @enderror" wire:model="email" type="text" id="email" name="email">

            @error('email')
                <span class="mt-1 text-sm text-red-400">{{ $message }}</span>
            @enderror
        </div>
        <div class="w-full mt-4">
            <label for="name">Name</label>
            <input class="block w-full px-4 py-2 mt-2 text-gray-700 placeholder-gray-500 bg-white border border-gray-300 rounded dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring @error('name') border-red-500 @enderror" wire:model.lazy="name" type="text" id="name" name="name">

            @error('name')
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

        <div class="w-full mt-4">
            <label for="passwordConfirmation">Retype Password</label>
            <input class="block w-full px-4 py-2 mt-2 text-gray-700 placeholder-gray-500 bg-white border border-gray-300 rounded dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring @error('name') border-red-500 @enderror" wire:model.lazy="passwordConfirmation" type="password" id="passwordConfirmation" name="passwordConfirmation">
        </div>

        <div class="flex items-center justify-center pt-6 pb-8">
            <input  class="px-4 py-2 leading-5 text-white transition-colors duration-200 transform bg-gray-700 rounded hover:bg-gray-600 focus:outline-none" type="submit" value="Register">
        </div>

    </form>
    <div class="flex items-center justify-center py-4 text-center bg-gray-100 dark:bg-gray-700">
        <span class="text-sm text-gray-600 dark:text-gray-200">By clicking "Register" you agree to our Terms of Service and Privacy Policy</span>

    </div>
    <div class="flex items-center justify-center py-4 text-center bg-gray-100 dark:bg-gray-700">
        <span class="text-sm text-gray-600 dark:text-gray-200"> Already have an account?  </span>
        <a href="#" class="mx-2 text-sm font-bold text-blue-600 dark:text-blue-400 hover:text-blue-500">Login</a>
    </div>
    </div>
</div>
