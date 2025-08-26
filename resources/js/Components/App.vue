<template>
  <header-menu />
    <router-view v-slot="{ Component }">
        <component :is="Component" />
        <pre> {{ Component.name }}</pre>
    </router-view>
    <footer-menu />
</template>

<script setup>
import HeaderMenu from '@/Components/HeaderMenu.vue'
import FooterMenu from '@/Components/Footer.vue'
</script>

<style scoped>
/* Keep your styles */
</style>
