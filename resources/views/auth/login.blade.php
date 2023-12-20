<x-guest-layout >
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}" ">
        @csrf

        <!-- Email Address -->
        <div >
            <x-input-label for="email" :value="__('Email')" style="color: #393E46;margin:0%"  />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" style="background-color: white;margin:0%" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')"  style="color: #393E46;margin:0%"  />

            <x-text-input id="password" class="block mt-1 w-full"
            style="background-color: white;margin:0%" 
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div><br><br>

        <!-- Remember Me -->
        <div class="block mt-4">


        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 " href="{{ route('password.request') }}" >
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ml-3" style="background-color:#393E46">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
