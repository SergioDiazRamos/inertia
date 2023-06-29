<template>
    <div :class="$style.logo">{{ site.siteTitle }}</div>
</template>

<script setup>
import { site } from "@data/site.js";
</script>

<style module>
@import "./Logo.css";
</style>
