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
                    Login in to start your session
                </h3>

                @if (session('status'))
                    <div class="mt-6 font-medium text-md text-green-600">
                        {{ session('status') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <x-inputs.form-input type="email" id="email" label="Email" :value="old('email')"
                        placeholder="Enter your email" required autofocus />

                    <x-inputs.form-input type="password" id="password" label="Password"
                        placeholder="Enter your password" required />

                    <div class="flex flex-col sm:flex-row mt-4">
                        <div class="block">
                            <label for="remember_me" class="flex items-center">
                                <x-inputs.checkbox id="remember_me" name="remember" />
                                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                            </label>
                        </div>

                        <div class="ml-auto mt-3 sm:mt-0">
                            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        </div>
                    </div>

                    <x-inputs.button-primary class="w-full mt-8" wire:loading.attr="disabled">
                        <i class="fa-solid fa-right-to-bracket mr-2"></i>{{ __('Login') }}
                    </x-inputs.button-primary>

                    <div class="mt-4  flex justify-center">
                        <a class="underline text-gray-600 text-sm" href="{{ route('register') }}">
                            Don't have an account?
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
