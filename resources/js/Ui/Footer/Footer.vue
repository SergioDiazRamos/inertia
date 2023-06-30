<template>
  <footer :class='$style.container'>
    <div :class='$style.inner'>
      <Logo />
    </div>

    <div :class='$style.copyright'>
      ©{{ new Date().getFullYear() }} Todos los derechos reservados
    </div>
  </footer>
</template>

<script setup>
import Logo from '@/Ui/Logo/Logo.vue';
</script>

<style module>
@import './Footer.css';
</style>
