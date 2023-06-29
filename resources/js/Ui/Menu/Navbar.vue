<template>
    <div :class="$style.container">
        <Link href="/">
            <Logo />
        </Link>
        <div :class="$style.inner">
            <NavLink
                v-for="item in menu"
                :key="item.id"
                :active="$page.component === item.component"
                :href="item.href"
            >
                {{ item.name }}
            </NavLink>

            <NavLink v-if="!auth.user" :href="route('login')">Log in</NavLink>
            <NavLink v-if="!auth.user" :href="route('register')"
                >Register</NavLink
            >
        </div>
    </div>
</template>

<script setup>
import axios from "axios";
import { ref, onMounted } from "vue";

import NavLink from "@/Ui/Menu/NavLink.vue";
import Logo from "@/Ui/Logo/Logo.vue";

const menu = ref([]);

const props = defineProps({
    auth: Object,
});

const getMenu = () => {
    axios
        .get("/api/menu")
        .then((res) => (menu.value = res.data))
        .catch((error) => console.log(error));
};

onMounted(() => getMenu());
</script>

<style module>
@import "./Navbar.css";
</style>
