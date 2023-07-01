<template>
  <Link v-if="isLink" :href="href ? href : '/'" :class="$style.logo"
    >{{ siteData.title }}
  </Link>
  <div v-else :class="$style.logo">{{ siteData.title }}</div>
</template>

<script setup>
import { api } from '@';
import { onMounted, ref } from 'vue';

const siteData = ref([]);

defineProps({
  isLink: Boolean,
  href: String,
});

const getSiteData = async () => {
  try {
    const { data } = await api.get('/site');
    siteData.value = data;
  } catch (error) {
    console.log(error);
  }
};

onMounted(() => getSiteData());
</script>

<style module>
@import './Logo.css';
</style>
