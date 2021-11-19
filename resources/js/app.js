import Vue from 'vue'
import { createInertiaApp } from '@inertiajs/inertia-vue'
import 'vue-sidebar-menu/dist/vue-sidebar-menu.css'

import Vuetify from 'vuetify'


require('./bootstrap');
Vue.use(Vuetify);

const el = document.getElementById('app')

createInertiaApp({
  resolve: name => require(`./Pages/${name}`),
  setup({ el, App, props }) {
    new Vue({
      vuetify: new Vuetify(),
      render: h => h(App, props),
    }).$mount(el)
  },
})

