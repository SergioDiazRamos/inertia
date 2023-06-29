<template>
    <div :class="$style.wrapper">
        <Menu :auth="auth" />

        <div :class="$style.container">
            <slot />
        </div>
    </div>
</template>

<script setup>
import Menu from "@/Ui/Menu/Menu.vue";

defineProps({
    auth: Object,
});
</script>

<style module>
@import "./Layout.css";
</style>
