<x-guest-layout>
    <div class="flex flex-col items-center justify-center px-6 pt-8 mx-auto md:h-screen pt:mt-0 dark:bg-gray-900">
        <!-- Card -->
        <div class="w-full border-t-4 border-t-primary-500 max-w-xl bg-white rounded-lg shadow-md dark:bg-gray-800">

            <div class="border-b px-4 py-6">
                <a href="/" class="flex items-center justify-center text-2xl font-semibold dark:text-white">
                    <img src="/static/images/logo.png" class="mr-4 h-11" alt="FlowBite Logo">
                    <span>AB Company</span>
                </a>
            </div>

            <div class=" px-6 pt-6 pb-3 space-y-8 sm:px-8">
                <h3 class="text-xl text--center font-medium text-gray-900 dark:text-white">
                    Login in to start your session
                </h3>

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <x-inputs.form-input type="email" id="email" label="Email" :value="old('email')"
                        placeholder="Enter your email" required autofocus />

                    <x-inputs.form-input type="password" id="password" label="Password"
                        placeholder="Enter your password" required />

                    <x-inputs.primary-button class="w-full mt-4" wire:loading.attr="disabled">
                        {{ _('Login') }}
                    </x-inputs.primary-button>

                    <div class="flex justify-center text-sm text-gray-500 mt-6">
                        &copy 2023 <a class="ml-2 text-primary-500" href="">AB Company plc</a>.
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>
