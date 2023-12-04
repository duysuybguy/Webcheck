import Vue from 'vue'
import { BootstrapVue, IconsPlugin } from 'bootstrap-vue'

import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'
import Ads from 'vue-google-adsense'

Vue.use(require('vue-script2'))

Vue.component('user-answer-form', require('./components/Ui/UserAnswerForm').default);
Vue.use(BootstrapVue)
Vue.use(IconsPlugin)
Vue.use(Ads.Adsense)
Vue.use(Ads.InArticleAdsense)
Vue.use(Ads.InFeedAdsense)

new Vue({
    el: '#user-form'
});
