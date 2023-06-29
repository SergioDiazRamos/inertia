<template>
    <nav :class="$style.container" aria-label="Main navigation">
        <Navbar :auth="auth" />
        <!-- <button @click="menu.toggle()" class="pr-4">Menu</button> -->
        <MenuButton />
    </nav>
</template>

<script setup>
import { useMenuStore } from '@/store';
import Navbar from '@/Ui/Menu/Navbar.vue';
import MenuButton from './MenuButton.vue';

const menu = useMenuStore();

defineProps({
    auth: Object,
});
</script>

<style module>
@import './Menu.css';
</style>
