import Vue from 'vue'
import Router from 'vue-router'
Vue.use(Router)


import firstPage from './components/pages/myFirstVuePage.vue';

const routes = [

    {
path:'/my-new-vue-roue',
component:firstPage
    }
]
export default new router({
    mode:'history',
    routes
    })
