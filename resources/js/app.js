import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/vue3';
import Main from "./Layouts/Main.vue";

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
            .mount(el);
    },
});

