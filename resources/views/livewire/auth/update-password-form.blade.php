<div>
    <h4 class="text-lg font-medium text-gray-900">
        {{ __('Change Your Passsword') }}
    </h4>

    <p class="mt-1 text-sm text-gray-600">
        {{ __('Ensure your account is using a long, random password to stay secure.') }}
    </p>

    <form class="mt-6 col-span-4 w-full xl:w-3/4" wire:submit.prevent="updatePassword" method="POST">
        @csrf

        <x-inputs.form-input type="password" id="current_password" label="Current Password"
            placeholder="Enter current password" required extra="wire:model.defer='state.current_password'" />

        <x-inputs.form-input type="password" id="password" label="New Password" placeholder="Enter current password"
            required extra="wire:model.defer='state.password'" />

        <x-inputs.form-input type="password" id="password_confirmation" label="Confirm Password"
            placeholder="Enter current password" required extra="wire:model.defer='state.password_confirmation'" />

        <x-inputs.button-primary class="w--auto mt-4" wire:loading.attr="disabled" wire:target="updatePassword">
            <i class="fa-solid fa-pen-to-square mr-2" wire:loading.class="fa-beat-fade"
                wire:target="updatePassword"></i>{{ _('Change') }}
        </x-inputs.button-primary>
    </form>
</div>
