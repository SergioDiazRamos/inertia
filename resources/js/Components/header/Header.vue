<template>
  <div :class="$style.container">
    <transition appear @before-enter="beforeFadeY" @enter="enterFadeY">
      <h1 :class="$style.title" v-html="title" />
    </transition>
  </div>
</template>

<script setup>
import { beforeFadeY, enterFadeY } from '@';

defineProps({
  title: { type: String },
});
</script>

<style module>
@import './Header.css';
</style>
