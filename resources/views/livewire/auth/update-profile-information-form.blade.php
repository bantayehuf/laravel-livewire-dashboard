<div>
    <h4 class="text-lg font-medium text-gray-900">
        {{ __('Your profile Information') }}
    </h4>

    <p class="mt-1 text-sm text-gray-600">
        {{ __('Update your account\'s profile information and email address.') }}
    </p>

    <form class="mt-6 col-span-4 w-full xl:w-3/4" wire:submit.prevent="updateProfileInformation" method="POST">
        @csrf

        <x-inputs.form-input type="text" id="name" label="Name" placeholder="Enter your name" required
            extra="wire:model.defer='state.name'" />

        <x-inputs.form-input type="email" id="email" label="Email" placeholder="Enter your email" required
            extra="wire:model.defer='state.email'" />

        @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::emailVerification()) &&
                !$this->user->hasVerifiedEmail())
            <p class="text-sm mt-2">
                {{ __('Your email address is unverified.') }}

                <button type="button"
                    class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    wire:click.prevent="sendEmailVerification">
                    {{ __('Click here to re-send the verification email.') }}
                </button>
            </p>

            @if ($this->verificationLinkSent)
                <p class="mt-2 font-medium text-sm text-green-600">
                    {{ __('A new verification link has been sent to your email address.') }}
                </p>
            @endif
        @endif

        <x-inputs.button-primary class="mt-4" wire:loading.attr="disabled" wire:target="updateProfileInformation">
            <i class="fa-solid fa-pen-to-square mr-2" wire:loading.class="fa-beat-fade"
                wire:target="updateProfileInformation"></i>
            {{ _('Change') }}
        </x-inputs.button-primary>
    </form>
</div>
