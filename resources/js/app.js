import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/vue3';
import Main from "./Layouts/Main.vue";
import Toast, { POSITION } from 'vue-toastification';
import "vue-toastification/dist/index.css";

createInertiaApp({
    resolve: name => {
        const pages = import.meta.glob('./Pages/**/*.vue', { eager: true });
        let page = pages[`./Pages/${name}.vue`];
        page.default.layout = page.default.layout || Main; // Assign default layout if not set
        return page.default; // Return the resolved page
    },
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(Toast, { // Register Toast plugin with options
                position: POSITION.TOP_RIGHT, // Position of the toast
                timeout: 5000,               // Toast duration in milliseconds
                closeOnClick: true,          // Close toast on click
                pauseOnHover: true,          // Pause timer when hovering over a toast
                draggable: true,             // Allow dragging to dismiss
                draggablePercent: 0.6,       // Dragging sensitivity
                showCloseButtonOnHover: false, // Show close button on hover
            })
            .mount(el);
    },
});

