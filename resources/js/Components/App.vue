<!-- /resources/js/Components/app.vue -->
<template>
  <div class="app-container">
    <header-menu class="header" />

    <main class="main-content">
      <router-view v-slot="{ Component }">
        <component :is="Component" />
      </router-view>
    </main>

    <footer-menu class="footer" />
  </div>
</template>

<script setup>
import HeaderMenu from '@/Components/HeaderMenu.vue'
import FooterMenu from '@/Components/Footer.vue'
</script>

<style scoped>
/* Keep your styles */
.app-container {
  display: flex;
  flex-direction: column;
  min-height: 100vh;
}

.header {
  position: relative; /* keep in normal flow */
  z-index: 10;
}

.main-content {
  flex: 1; /* take up space between header & footer */
  padding-top: 80px; /* 👈 add this if header is fixed */
}

.footer {
  position: relative;
}
</style>
