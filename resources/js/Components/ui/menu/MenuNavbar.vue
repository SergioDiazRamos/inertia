<template>
  <div :class="$style.container">
    <Logo
      isLink
      :class="[$style.logo, menu.isMenuOpen ? $style.logoIsMenuOpen : '']"
    />

    <div v-if="!menu.isMenuOpen" :class="$style.inner">
      <Link
        v-for="item in mainMenu"
        :key="item.id"
        :active="$page.component === item.component"
        :href="item.slug"
      >
        {{ item.name }}
      </Link>

      <Link v-if="!auth.user" :href="route('login')">Log in</Link>
      <Link v-if="!auth.user" :href="route('register')">Register </Link>
    </div>
  </div>
</template>

<script setup>
import { onMounted, ref } from 'vue';

import { MenuNavLink as Link, Logo, useMenuStore, api } from '@';

const mainMenu = ref([]);

const menu = useMenuStore();

const props = defineProps({
  auth: Object,
});

// TODO: Move to lib
const getMainMenu = async () => {
  try {
    const { data } = await api.get('/main-menu');
    mainMenu.value = data;
  } catch (error) {
    console.log(error);
  }
};

onMounted(() => getMainMenu());
</script>

<style module>
@import './MenuNavbar.css';
</style>
