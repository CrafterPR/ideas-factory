// resources/js/main.js
import { createApp } from 'vue';
import App from '@/Components/App.vue';
import router from '@/routes/';

console.log("🚀 Vue app mounted...")
createApp(App)
    .use(router)
    .mount('#app');
