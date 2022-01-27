window.Vue = require('vue');

import Router from 'vue-router';
Vue.use(Router)
import Main from './components/layouts/Main';

export default new Router({
  mode: 'history',
  routes: [
    {
      path: '/',
      component: Main
    },
    ]
})
