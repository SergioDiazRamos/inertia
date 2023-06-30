import { defineStore } from 'pinia';

export const useMenuStore = defineStore('menu', {
  // data
  state() {
    return {
      isMenuOpen: false,
    };
  },

  // methods
  actions: {
    toggle() {
      this.isMenuOpen = !this.isMenuOpen;
    },
  },

  // computed
  getters: {},
});
