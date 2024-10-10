<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/" class="flex flex-col items-center justify-center p-4">
                <!-- Logo Image -->
                <div class="flex-shrink-0">
                    <img 
                        src="{{ Storage::url('images/logo.png') }}" 
                        alt="Logo" 
                        class="w-20 md:w-24 object-cover"
                    >
                </div>
        
                <!-- Klinik Title -->
                <div class="text-center">
                    <h1 class="text-2xl md:text-3xl font-extrabold text-gray-900 tracking-tight">
                        Klinik Utama CMI
                    </h1>
                    <p class="text-sm md:text-base text-gray-500 mt-1">
                        Pelayanan Kesehatan Terbaik Untuk Anda
                    </p>
                </div>
            </a>
        </x-slot>        

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox"
                        class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Ingat Saya') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900"
                        href="{{ route('password.request') }}">
                        {{ __('Lupa Password?') }}
                    </a>
                @endif

                <a href="{{ route('register') }}" class="ml-3 inline-flex items-center px-4 py-2 bg-white border border-sky-500 rounded-md font-semibold text-xs text-sky-500 uppercase tracking-widest hover:bg-gray-400 active:bg-gray-500 focus:outline-none focus:border-sky-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
                    Daftar
                </a>

                <x-button class="ml-3">
                    {{ __('Masuk') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
