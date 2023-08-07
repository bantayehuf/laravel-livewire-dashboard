<div>
    <x-global-spinner />

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

        <x-action-message class="mt-3" on="saved">
            {{ __('Changed successfully.') }}
        </x-action-message>

        <x-inputs.button-primary class="w--auto mt-4" wire:loading.attr="disabled">
            <i class="fa-solid fa-pen-to-square mr-2"></i>{{ _('Change') }}
        </x-inputs.button-primary>
    </form>
</div>
