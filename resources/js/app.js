// resources/js/App.js
import './main.js'
import './script.js'



import { createApp } from 'vue'
import App from './Components/App.vue'
import router from './routes'

const app = createApp(App)
app.use(router)
app.mount('#app')


