import { createApp } from "vue";
import App from "./App.vue";

// VueRouter
import router from "./router";

// Vuetify
import 'vuetify/styles';
import { createVuetify } from "vuetify";
import * as components from 'vuetify/components';
import * as directives from 'vuetify/directives';

// @mdi/font
import '@mdi/font/css/materialdesignicons.css'; // 追加

const vuetify = createVuetify({
  components,
  directives,
  icons: {
    defaultSet: 'mdi', // This is already the default value - only for display purposes
  },
}) // 追加

createApp(App).use(vuetify).use(router).mount('#app');
