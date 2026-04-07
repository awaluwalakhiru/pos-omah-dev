import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/vue3'
import './Themes/registerServiceWorker'

// Library Components
import VueSweetalert2 from 'vue-sweetalert2'
import VueApexCharts from 'vue3-apexcharts'
import BootstrapVue3 from 'bootstrap-vue-3'
import CounterUp from 'vue3-autocounter'
import 'aos/dist/aos.css'
import 'sweetalert2/dist/sweetalert2.min.css'

// Custom Components & Directives
import globalComponent from './Themes/plugins/global-components'
import globalDirective from './Themes/plugins/global-directive'
import globalMixin from './Themes/plugins/global-mixin'


createInertiaApp({
    resolve: name => {
        const pages = import.meta.glob('./Pages/**/*.vue', { eager: true })
        return pages[`./Pages/${name}.vue`]
    },
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)

            // Library Components
            .use(VueSweetalert2)
            .use(VueApexCharts)
            .use(BootstrapVue3)
            .component('counter-up', CounterUp)

            // Custom Components & Directives
            .use(globalComponent)
            .use(globalDirective)
            .mixin(globalMixin)
            .mount(el)
    },

    progress: {
        // The delay after which the progress bar will
        delay: 250,

        // The color of the progress bar.
        color: 'rgb(221, 34, 43)',

        // Whether to include the default NProgress styles.
        includeCSS: true,

        // Whether the NProgress spinner will be shown.
        showSpinner: true,
    },
});
