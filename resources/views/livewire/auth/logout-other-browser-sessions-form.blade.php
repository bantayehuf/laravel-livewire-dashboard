<div>
    <h4 class="text-lg font-medium text-gray-900">
        {{ __('Manage Your Sessions') }}
    </h4>

    <p class="mt-1 text-sm text-gray-600">
        {{ __('If necessary, you may log out of all of your other browser sessions across all of your devices. Some of your recent sessions are listed below; however, this list may not be exhaustive. If you feel your account has been compromised, you should also update your password.') }}
    </p>

    <div class="mt-4 col-span-4 w-full xl:w-3/4" wire:submit.prevent="updateProfileInformation" method="POST">
        @if (count($this->sessions) > 0)
            @foreach ($this->sessions as $session)
                <div class="flex items-center mt-3">
                    <div>
                        @if ($session->agent->isDesktop())
                            <i class="fa-solid fa-display fa-xl text-gray-500"></i>
                        @else
                            <i class="fa-solid fa-mobile-screen-button fa-xl text-gray-500"></i>
                        @endif
                    </div>

                    <div class="ml-3">
                        <div class="text-sm text-gray-600">
                            {{ $session->agent->platform() ? $session->agent->platform() : __('Unknown') }} -
                            {{ $session->agent->browser() ? $session->agent->browser() : __('Unknown') }}
                        </div>

                        <div>
                            <div class="text-xs text-gray-500">
                                {{ $session->ip_address }},

                                @if ($session->is_current_device)
                                    <span class="text-success font-semibold">{{ __('This device') }}</span>
                                @else
                                    {{ __('Last active') }} {{ $session->last_active }}
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

            <div class="mt-5">
                <div class="fd-lex align-items-center mt-4">
                    <x-inputs.button-danger class="btn btn-primary" wire:click="confirmLogout"
                        wire:loading.attr="disabled" wire:target="confirmLogout">
                        <i class="fa-solid fa-arrow-right-from-bracket mr-2" wire:loading.class="fa-beat-fade"
                            wire:target="confirmLogout"></i>
                        {{ __('Log Out Other Browser Sessions') }}
                    </x-inputs.button-danger>
                </div>
            </div>

            <!-- Log Out Other Devices Confirmation Modal -->
            <x-modal.modal-dialog wire:model="confirmingLogout">
                {{-- <x-modal.modal-dialog show="@entangle('confirmingLogout')"> --}}
                <x-slot name="title">
                    {{ __('Log Out Other Browser Sessions') }}
                </x-slot>

                <x-slot name="content">
                    {{ __('Please enter your password to confirm you would like to log out of your other browser sessions across all of your devices.') }}

                    <div class="mt-4" x-data="{}"
                        x-on:confirming-logout-other-browser-sessions.window="setTimeout(() => $refs.password.focus(), 250)">
                        <x-inputs.input type="password" class="mt-1 block w-3/4" autocomplete="current-password"
                            placeholder="{{ __('Password') }}" x-ref="password" wire:model.defer="password"
                            wire:keydown.enter="logoutOtherBrowserSessions" />

                        <x-inputs.input-error for="password" class="mt-2" />
                    </div>
                </x-slot>

                <x-slot name="footer">
                    <x-inputs.button-outlined wire:click="$toggle('confirmingLogout')" wire:loading.attr="disabled">
                        {{ __('Cancel') }}
                    </x-inputs.button-outlined>

                    <x-inputs.button-secondary class="ml-3" wire:click="logoutOtherBrowserSessions"
                        wire:loading.attr="disabled" wire:target="logoutOtherBrowserSessions">
                        <i class="fa-solid fa-arrow-right-from-bracket mr-2" wire:loading.class="fa-beat-fade"
                            wire:target="logoutOtherBrowserSessions"></i>
                        {{ __('Log Out Other Browser Sessions') }}
                    </x-inputs.button-secondary>
                </x-slot>
            </x-modal.modal-dialog>
        @endif
    </div>
</div>
