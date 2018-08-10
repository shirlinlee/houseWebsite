// The Vue build version to load with the `import` command
// (runtime-only or standalone) has been set in webpack.base.conf with an alias.
import Vue from 'vue'
import Vuex from 'vuex'

import Index from './Index'
import stores from './stores.js'
import router from './router'

Vue.use(Vuex)

const store = new Vuex.Store(stores)


/* eslint-disable no-new */
new Vue({
  el: '#app',
  template: '<Index/>',
  components: { Index },
  // 将store实例注入到根组件下的所有子组件中
  store,
  router
  // 子组件通过this.$store来方位store
})
