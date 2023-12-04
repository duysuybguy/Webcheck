import Vue from 'vue'
import Element from 'element-ui';
import { BootstrapVue, IconsPlugin } from 'bootstrap-vue'

import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'
Vue.component('chapter-manager', require('./components/pages/chapterManagerment').default);

Vue.use(BootstrapVue)
Vue.use(Element)
Vue.use(IconsPlugin)

new Vue({
    el: '#app',
});