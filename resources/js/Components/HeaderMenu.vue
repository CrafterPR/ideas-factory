<template>
    <div v-if="!showMenu" class="top-menu" id="top-menu">
        <div class="top-menu-container custom-container">
            <!-- Left logo -->
            <div class="left">
                <router-link to="/">
                    <img class="logo" :src="`${baseUrl}/img/logo-square.png`"  alt=""/>
                    <p>A 360° <span class="green-text">events</span> agency</p>
                </router-link>
            </div>

            <!-- Right navigation -->
            <div class="right">
                <nav>
                    <router-link class="text-link" to="/what-we-do">
                        <p><span class="green-text">what</span> we do</p>
                    </router-link>
                    <router-link class="text-link" to="/how">
                        <p><span class="green-text">how</span> we do it</p>
                    </router-link>
                    <router-link class="text-link" to="/who">
                        <p><span class="green-text">who</span> we are</p>
                    </router-link>
                    <router-link class="text-link" to="/what-we-done">
                        <p><span class="green-text">what</span> we've done</p>
                    </router-link>
                    <a href="javascript:;" @click.prevent="openCloseMenu">
                        <img class="burger" :src="`${baseUrl}/img/burger.png`"  alt=""/>
                    </a>
                </nav>
            </div>
        </div>
    </div>

    <!-- Full Menu -->
    <div v-show="showMenu" class="full-menu" id="full-menu">
        <div class="close-button-container custom-container">
            <a class="close-button" href="javascript:;" @click.prevent="openCloseMenu">
                <img :src="`${baseUrl}/img/close.png`"  alt=""/>
            </a>
        </div>

        <div class="full-menu-container custom-container">
            <div class="right">
                <nav>
                    <router-link to="/" @click="openCloseMenu">
                        <img class="logo" :src="`${baseUrl}/img/logo-square.png`"  alt=""/>
                    </router-link>
                    <router-link to="/what-we-do" @click="openCloseMenu"><span class="green-text">what</span> we do</router-link>
                    <router-link to="/how" @click="openCloseMenu"><span class="green-text">how</span> we do it</router-link>
                    <router-link to="/who" @click="openCloseMenu"><span class="green-text">who</span> we are</router-link>
                    <router-link to="/what-we-done" @click="openCloseMenu"><span class="green-text">what</span> we've done</router-link>
                    <router-link to="/join" @click="openCloseMenu"><span class="green-text">join</span> us</router-link>
                    <router-link to="/contact" @click="openCloseMenu"><span class="green-text">get</span> in touch</router-link>

                    <div class="social-links" >
                        <router-link to="ig-aidias" target="_blank" @click="openCloseMenu">
                            <img :src="`${baseUrl}/img/instagram.png`"  alt=""/>
                        </router-link>
                        <router-link to="fb-aidias" target="_blank" @click="openCloseMenu">
                            <img :src="`${baseUrl}/img/facebook.png`"  alt=""/>
                        </router-link>
                    </div>
                </nav>
            </div>

            <!-- News Section -->
            <div class="left">
                <div class="news-stories-container">
                    <div class="news-story">
                        <div class="news-left">
                            <img :src="`${baseUrl}/img/case-studies/thumbs/175b1d829551283f0ecf72c075cf00a3.jpg`"  alt=""/>
                        </div>
                        <div class="news-right">
                            <h3>Co-op Store Openings</h3>
                            <p>Delivering new store launches with impact</p>
                            <router-link to="/">Read more</router-link>
                        </div>
                    </div>

                    <div class="news-story">
                        <div class="news-left">
                            <img :src="`${baseUrl}/img/case-studies/thumbs/01ef3f0836c0618ae0bf19d144676319.jpg`"  alt=""/>
                        </div>
                        <div class="news-right">
                            <h3>Samsung</h3>
                            <p>Galaxy AI Roadshow</p>
                            <router-link to="/">Read more</router-link>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import {onMounted, ref, watch} from 'vue'

const baseUrl = '';
let showMenu = ref(false);
const openCloseMenu = () => {
    showMenu.value = !showMenu.value;
}
onMounted(() => {
    watch(showMenu, (val) => {
        const topMenu = document.getElementById("top-menu")
        const fullMenu = document.getElementById("full-menu")
        console.log(fullMenu)
        // fullMenu.style.backgroundColor = "black"

        if (!topMenu || !fullMenu) return  // prevent null error

        if (val) {
            topMenu.style.display = "none"
            fullMenu.style.display = "block"
        //    document.body.style.overflow = "hidden"
        } else {
            topMenu.style.display = "block"
            fullMenu.style.display = "none"
            document.body.style.overflow = "auto"
        }

    })
})

</script>

<style scoped>

</style>
