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

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Nama')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Konfirmasi Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Sudah punya akun?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Daftar') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
