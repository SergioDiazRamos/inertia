<template>
  <Drawer />
  <nav :class="$style.container" aria-label="Main navigation">
    <Navbar :auth="auth" />
    <MenuButton />
  </nav>
</template>

<script setup>
import { Navbar, MenuButton, Drawer } from '@';

defineProps({
  auth: Object,
});
</script>

<style module>
@import './Menu.css';
</style>
