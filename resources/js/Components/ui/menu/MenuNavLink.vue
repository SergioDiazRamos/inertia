<template>
  <Link :class="[$style.link, active ? $style.active : $style.inactive]">
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
