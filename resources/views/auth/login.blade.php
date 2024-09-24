<x-guest-layout>
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <div class="flex justify-center w-full">
        <x-application-logo class="text-4xl" />
    </div>
    <form method="POST" action="{{ route('login') }}" class="flex flex-col space-y-4">
        @csrf
        <div>
            <x-input-label for="login" :value="'Login'" />
            <x-text-input id="login" type="text" name="login" :value="old('login')" required autofocus
                autocomplete="username" />
            <x-input-error :messages="$errors->get('login')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="block w-full mt-1" type="password" name="password" required
                autocomplete="current-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>
        <div>
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="checkbox checkbox-sm" name="remember">
                <span class="text-sm text-gray-600 ms-2">{{ __('Remember me') }}</span>
            </label>
        </div>
        <div class="flex items-center justify-end">
            <x-primary-button>
                {{ __('Log in') }}
            </x-primary-button>
        </div>
        @if (Route::has('password.request'))
            <div class="flex justify-center mt-4">
                <a class="text-sm text-gray-600 underline rounded-md hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            </div>
        @endif
    </form>
</x-guest-layout>
