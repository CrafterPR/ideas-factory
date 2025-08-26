import { createRouter, createWebHistory } from 'vue-router'
import Home from "@/Components/Home.vue";
import WhatWeDo from "@/Components/WhatWeDo.vue";
import Who from "@/Components/Who.vue";
import How from "@/Components/How.vue";
import WhatWeDone from "@/Components/WhatWeDone.vue";
import Join from "@/Components/Join.vue";
import Contact from "@/Components/Contact.vue";


const routes = [
    { path: '/', name: 'Home', component: Home },
    { path: '/what-we-do', name: 'WhatWeDo', component: WhatWeDo },
    { path: '/how', name: 'How', component: How },
    { path: '/who', name: 'Who', component: Who },
    { path: '/what-we-done', name: 'WhatWeDone', component: WhatWeDone },
    { path: '/contact', name: 'Contact', component: Contact },
    { path: '/join', name: 'Join', component: Join },
    { path: '/:pathMatch(.*)*', name: 'NotFound', component: Home }
]

const router = createRouter({
    history: createWebHistory(),
    routes,
})
export default router
