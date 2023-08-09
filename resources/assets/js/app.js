import './bootstrap';

import { Livewire, Alpine } from '../../../vendor/livewire/livewire/dist/livewire.esm.js';
import focus from '@alpinejs/focus';


window.Alpine = Alpine;

document.addEventListener('alpine:init', () => {
    Alpine.store('showSidebar', {
        on: true,

        toggle() {
            this.on = !this.on
        }
    });
});

Alpine.plugin(focus);

Livewire.start()

