// The Vue build version to load with the `import` command
// (runtime-only or standalone) has been set in webpack.base.conf with an alias.
import Vue from 'vue'
import Vuex from 'vuex'
// import VueAwesomeSwiper from 'vue-awesome-swiper'
// import 'swiper/dist/css/swiper.css'
import Viewer from 'v-viewer'

import Index from './Index'
import stores from './stores.js'

// Vue.use(VueAwesomeSwiper)
Vue.use(Vuex)
Vue.use(Viewer)

const store = new Vuex.Store(stores)

/* eslint-disable no-new */
new Vue({
  el: '#app',
  template: '<Index/>',
  components: { Index },
  // 将store实例注入到根组件下的所有子组件中
  store

})
