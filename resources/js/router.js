window.Vue = require('vue');

import Router from 'vue-router';
Vue.use(Router)
import Main from './components/layouts/Main';
import Login from './components/auth/Login';
export default new Router({
  mode: 'history',
  routes: [
    {
      path: '/',
      component: Main
    },
    {
      path: '/login',
      component: Login
    },
    ]
})
