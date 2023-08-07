@props(['on', 'color' => 'text-green-600'])

<div x-data="{ shown: false, timeout: null }" x-init="@this.on('{{ $on }}', () => {
    clearTimeout(timeout);
    shown = true;
    timeout = setTimeout(() => { shown = false }, 3000);
})" x-show.transition.out.opacity.duration.1500ms="shown"
    x-transition:leave.opacity.duration.1500ms style="display: none;"
    {{ $attributes->merge(['class' => "text-sm $color"]) }}>
    {{ $slot->isEmpty() ? 'Saved.' : $slot }}
</div>
