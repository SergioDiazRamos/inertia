<template>
    <button
        @click="menu.toggle()"
        class="hamburger hamburger--collapse"
        :class="menu.isMenuOpen ? 'is-active' : ''"
        type="button"
        aria-label="Menu"
        aria-controls="navigation"
        aria-expanded="true/false"
    >
        <span class="hamburger-box">
            <span class="hamburger-inner"></span>
        </span>
    </button>
</template>

<script setup>
import { useMenuStore } from '@/Store';
const menu = useMenuStore();
</script>

<style>
@import './MenuButton.css';
</style>
