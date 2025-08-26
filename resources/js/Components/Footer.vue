<template>
    <div>
        <div class="footer-menu" id="footer-menu">
            <div class="footer-menu-container custom-container">
                <div class="left">
                    <router-link to="/">
                        <img loading="lazy" class="logo" :src="`${baseUrl}img/logo-text.png`"  alt=""/>
                        <p>A 360° <span class="green-text">events</span> agency</p>
                    </router-link>
                    <div class="contact-details">
                        <a href="tel:+2540116000333">+254 0116000333</a> |
                        <a href="tel:+254 0116000444">+254 0116000444</a>
                        <a href="mailto:events@aidiasfactory.co.ke">events@aidiasfactory.co.ke</a>
                    </div>
                </div>
                <div class="right">
                    <nav class="row">
                        <div class="col-6 col-sm-3 col-md-3">
                            <h4>Head <span class="green-text">office</span></h4>
                            <p>fresh</p>
                            <p>Union</p>
                            <p>2-10 Albert Square</p>
                            <p>Nairobi</p>
                            <p>M2 6LW</p>

                        </div>
                        <div class="col-6 col-sm-3 col-md-3">
                            <h4>Edinburgh <span class="green-text">office</span></h4>
                            <p>fresh Edinburgh</p>
                            <p>1 St Colme Street</p>
                            <p>Edinburgh</p>
                            <p>EH3 6AA</p>

                        </div>
                        <!--<div class="col-6 col-sm-3 col-md-3">
                            <h4>Fresh <span class="green-text">warehouse</span></h4>
                            <p>Unit 6A</p>
                            <p>Arrow Trading Estate</p>
                            <p>Audenshaw</p>
                            <p>Manchester</p>
                            <p>M34 5LR</p>
                            <a href="https://w3w.co/handle.rarely.topic" target="_blank">
                                <p class="w3w"><span class="green-text">///</span>handle.<wbr>rarely.<wbr>topic</p>
                            </a>
                        </div>-->
                        <div class="col-6 col-sm-3 col-md-3">
                            <h4>Site <span class="green-text">map</span></h4>
                            <router-link to="what-we-do">
                                <p><span class="green-text">what</span> we do</p>
                            </router-link>
                            <router-link to="how">
                                <p><span class="green-text">how</span> we do it</p>
                            </router-link>
                            <router-link to="who">
                                <p><span class="green-text">who</span> we are</p>
                            </router-link>
                            <router-link to="what-we-done">
                                <p><span class="green-text">what</span> we've done</p>
                            </router-link>
                            <router-link to="join">
                                <p><span class="green-text">join</span> us</p>
                            </router-link>
                            <router-link to="contact">
                                <p><span class="green-text">get</span> in touch</p>
                            </router-link>

                        </div>
                        <div class="col-6 col-sm-3 col-md-3">
                            <h4><span class="green-text">Legal</span> bits</h4>
                            <router-link to="cookie" v-text="'cookie policy'" />
                            <router-link to="privacy" v-text="'privacy policy'" />
                            <router-link to="terms" v-text="'terms'" />
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="custom-container">
                <p>Copyright &copy; 2016 The Aidias Factory</p>
            </div>
        </div>
    </div>
</template>
<script setup>
import { ref, onMounted } from "vue";

// --- Cookie Helper ---
function getCookie(name) {
    const nameEQ = name + "=";
    const ca = document.cookie.split(";");
    for (let i = 0; i < ca.length; i++) {
        let c = ca[i];
        while (c.charAt(0) === " ") c = c.substring(1, c.length);
        if (c.indexOf(nameEQ) === 0) return c.substring(nameEQ.length, c.length);
    }
    return null;
}

// --- Google Analytics consent handling ---
onMounted(() => {
    window.dataLayer = window.dataLayer || [];
    function gtag() {
        window.dataLayer.push(arguments);
    }

    gtag("consent", "default", {
        ad_storage: "denied",
        ad_user_data: "denied",
        ad_personalization: "denied",
        analytics_storage: "denied",
    });

    if (getCookie("cookie-banner-hidden") == 1) {
        console.log("Cookie consent choice persisted: 1");
        gtag("consent", "update", {
            ad_user_data: "granted",
            ad_personalization: "granted",
            ad_storage: "granted",
            analytics_storage: "granted",
        });
    }

    gtag("js", new Date());
    gtag("config", "UA-11342327-11");
});

// --- Menu state ---
const isTopMenuVisible = ref(true);
const isFullMenuVisible = ref(false);
const baseUrl = '';

function showMenu() {
    isTopMenuVisible.value = false;
    isFullMenuVisible.value = true;
    document.body.style.overflow = "hidden";
}

function hideMenu() {
    isTopMenuVisible.value = true;
    isFullMenuVisible.value = false;
    document.body.style.overflow = "auto";
}
</script>

<style scoped>

</style>
