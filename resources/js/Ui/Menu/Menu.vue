<template>
    <nav :class="$style.container" aria-label="Main navigation">
        <Navbar :auth="auth" />
    </nav>
</template>

<script setup>
import Navbar from "@/Ui/Menu/Navbar.vue";

defineProps({
    auth: Object,
});
</script>

<style module>
@import "./Menu.css";
</style>
