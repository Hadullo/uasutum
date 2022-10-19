require('./bootstrap');

import { createApp } from 'vue'

import Role from './components/Role.vue';

import router from './router'

const app = createApp({});

app.component('role', Role);

app.mount('#app');
router





