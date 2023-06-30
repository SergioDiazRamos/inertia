<template>
  <Link v-if='isLink' :href="href ? href : '/'" :class='$style.logo'>{{
      site.siteTitle
    }}
  </Link>
  <div v-else :class='$style.logo'>{{ site.siteTitle }}</div>
</template>

<script setup>
import { site } from '@data/site.js';

defineProps({
  isLink: Boolean,
  href: String,
});
</script>

<style module>
@import './Logo.css';
</style>
