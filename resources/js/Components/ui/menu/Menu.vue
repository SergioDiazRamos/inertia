<template>
  <MenuDrawer />
  <nav :class="$style.container" aria-label="Main navigation">
    <MenuNavbar :auth="auth" />
    <MenuButton />
  </nav>
</template>

<script setup>
import { MenuNavbar, MenuButton, MenuDrawer } from '@';

defineProps({
  auth: Object,
});
</script>

<style module>
@import './Menu.css';
</style>
