<template>
  <Link :class="[active ? $style.active : '', $style.link]">
    <slot />
  </Link>
</template>

<script setup>
defineProps({
  active: Boolean,
});
</script>

<style module>
@import './MenuNavLink.css';
</style>
