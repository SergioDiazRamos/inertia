<template>
    <Drawer />
    <nav :class="$style.container" aria-label="Main navigation">
        <Navbar :auth="auth" />
        <MenuButton />
    </nav>
</template>

<script setup>
import { useMenuStore } from '@/Store';
import Navbar from '@/Ui/Menu/Navbar.vue';
import MenuButton from '@/Ui/Menu/MenuButton.vue';
import Drawer from '@/Ui/Menu/Drawer.vue';

const menu = useMenuStore();

defineProps({
    auth: Object,
});
</script>

<style module>
@import './Menu.css';
</style>
