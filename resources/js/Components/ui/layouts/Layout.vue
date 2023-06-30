<template>
  <div :class="$style.wrapper">
    <Menu :auth="auth" />

    <div :class="$style.container">
      <slot />
    </div>
    <Footer />
  </div>
</template>

<script setup>
import { Menu, Footer } from '@';

defineProps({
  auth: Object,
});
</script>

<style module>
@import './Layout.css';
</style>
