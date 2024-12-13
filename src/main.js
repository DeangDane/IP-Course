import './assets/main.css'

import { createApp } from 'vue'
import { createPinia } from 'pinia'

import App from './App.vue'
import router from './router'

import '@fortawesome/fontawesome-free/css/all.css';
import 'material-design-icons-iconfont/dist/material-design-icons.css';
import "@fortawesome/fontawesome-free/js/all.js";


const app = createApp(App)
const pinia = createPinia();

app.use(createPinia())
app.use(router)

app.mount('#app')
app.use(pinia);
