import Vue from 'vue'
import VueRouter from 'vue-router'
Vue.use(VueRouter);

import index from './content/index.vue'
import team from './content/team.vue'
import brand from './content/brand.vue'
import archi from './content/archi.vue'
import engrg from './content/engrg.vue'
import life from './content/life.vue'
import plan from './content/plan.vue'

//const index    = (resolve) => require(['./page/index.vue'],resolve)

//路由指向
const routes = [
  // { path: '/', redirect: '/index' },
  { name:'index',path: '/', component: index },
  { name:'team',path: '/team', component: team },
  { name:'brand',path: '/brand', component: brand },
  { name:'archi',path: '/archi', component: archi },
  { name:'engrg',path: '/engrg', component: engrg },
  { name:'life',path: '/life', component: life },
  { name:'plan',path: '/plan', component: plan }
  
  
];
export default new VueRouter({
  routes: routes,
  mode: 'history',
  // mode: 'hash',
  // base: __dirname
})