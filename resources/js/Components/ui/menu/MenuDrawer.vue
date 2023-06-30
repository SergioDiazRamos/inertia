<template>
  <Transition @before-enter="onBeforeEnter" @enter="onEnter" @leave="onLeave">
    <div :class="$style.container" v-if="menu.isMenuOpen"></div>
  </Transition>
</template>

<script setup>
import gsap from 'gsap';

import { useMenuStore } from '@';

const menu = useMenuStore();

// TODO: Refactory
function onBeforeEnter(el) {
  gsap.set(el, {
    top: '-50vh',
    left: '50vw',
    scaleX: 0.25,
    scaleY: 0.25,
    opacity: 1,
    borderRadius: '50%',
  });
}

function onEnter(el, done) {
  gsap.to(el, {
    top: '0',
    left: '0',
    duration: 1,
    scaleX: 3,
    scaleY: 3,
    opacity: 1,
    // ease: 'elastic.inOut(2.5, 1)',
    onComplete: done,
  });
}

function onLeave(el, done) {
  gsap.to(el, {
    top: '-50vh',
    left: '50vw',
    duration: 0.6,
    scaleX: 0.25,
    scaleY: 0.25,
    // ease: 'elastic.inOut(1, 5)',
  });
  gsap.to(el, {
    duration: 0.2,
    delay: 0.3,
    opacity: 0,
    onComplete: done,
  });
}
</script>

<style module>
@import './MenuDrawer.css';
</style>
