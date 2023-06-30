import { defineStore } from 'pinia';

// TODO: Move to dir store
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
