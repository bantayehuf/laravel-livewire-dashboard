<x-guest-layout>
    <div class="flex flex-col items-center justify-center px-6 pt-8 mx-auto md:h-screen pt:mt-0 dark:bg-gray-900">
        <!-- Card -->
        <div class="w-full border-t-4 border-t-primary-500 max-w-xl bg-white rounded-lg shadow-md dark:bg-gray-800">

            <div class="border-b px-4 py-6">
                <a href="/"
                    class="flex items-center justify-center md:text-xl xl:text-2xl font-semibold dark:text-white">
                    <img src="/static/images/logo.png" class="mr-3 h-9 xl:h-11" alt="FlowBite Logo">
                    <span>AB Company</span>
                </a>
            </div>

            <div class=" px-6 pt-6 xl:pb-3 space-y-6 sm:px-8">
                <h3 class="text-lg xl:text-xl text--center font-medium text-gray-900 dark:text-white">
                    Create new password
                </h3>

                <form class="mt-6" method="POST" action="{{ route('password.update') }}">
                    @csrf

                    <input type="hidden" name="token" value="{{ $request->route('token') }}">

                    <x-inputs.form-input type="email" id="email" label="Email" :value="old('email', $request->email)"
                        placeholder="Enter your email" required autofocus />

                    <x-inputs.form-input type="password" id="password" label="Password"
                        placeholder="Create your password" required />

                    <x-inputs.form-input type="password" id="password_confirmation" label="Confirm Password"
                        placeholder="Confirm your password" required />

                    <x-inputs.button-primary class="w-full mt-5" wire:loading.attr="disabled">
                        <i class="fa-solid fa-power-off mr-2"></i>{{ _('Reset Password') }}
                    </x-inputs.button-primary>

                    <div class="mt-4  flex justify-center">
                        <a class="underline text-gray-600 text-sm" href="{{ route('login') }}">
                            Reset Password
                        </a>
                    </div>

                    <div class="flex justify-center text-sm text-gray-500 mt-6">
                        &copy 2023 <a class="ml-2 text-primary-500" href="">AB Company plc</a>.
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>


{{-- <x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <div class="block">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required
                    autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-input id="password_confirmation" class="block mt-1 w-full" type="password"
                    name="password_confirmation" required autocomplete="new-password" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('Reset Password') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout> --}}
