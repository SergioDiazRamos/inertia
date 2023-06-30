<template>
  <div :class="$style.container">
    <Logo
      isLink
      :class="[$style.logo, menu.isMenuOpen ? $style.logoIsMenuOpen : '']"
    />

    <div v-if="!menu.isMenuOpen" :class="$style.inner">
      <Link
        v-for="item in menuItems"
        :key="item.id"
        :active="$page.component === item.component"
        :href="item.href"
      >
        {{ item.name }}
      </Link>

      <Link v-if="!auth.user" :href="route('login')">Log in</Link>
      <Link v-if="!auth.user" :href="route('register')">Register </Link>
    </div>
  </div>
</template>

<script setup>
import axios from 'axios';
import { onMounted, ref } from 'vue';

import { MenuNavLink as Link, Logo, useMenuStore } from '@';

const menuItems = ref([]);

const menu = useMenuStore();

const props = defineProps({
  auth: Object,
});

const getMenu = () => {
  axios
    .get('/api/menu')
    .then((res) => (menuItems.value = res.data))
    .catch((error) => console.log(error));
};

onMounted(() => getMenu());
</script>

<style module>
@import './MenuNavbar.css';
</style>
