import './bootstrap';

import Alpine from 'alpinejs';
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

Alpine.start();

