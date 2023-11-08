<script>
import Nav from './Nav.vue';
import { store } from '../store'

export default {
  components: {
    Nav
  },
  data() {
    return {
      store: store,
      title: 'Molisana',
      menu: [
        {
          text: 'Home',
          href: '#',
          icon: 'fa-solid fa-user'
        },
        {
          text: 'Prodotti',
          href: '#',
          active: true,
          icon: 'fa-solid fa-cart-shopping'
        },
        {
          text: 'Chi siamo',
          href: '#',
          icon: 'fa-solid fa-heart'
        },
        {
          text: 'shop',
          href: '#'
        },
        {
          text: 'Contatti',
          href: '#'
        }
      ]
    }
  }
}

</script>

<template>
  <header class="page-header">
    <nav class="container">
      <img src="/img/la-molisana-logo.png" alt="">
      <Nav :menu="menu"></Nav>
      <input type="text" v-model="store.message">
    </nav>
  </header>
</template>

<style lang="scss" scoped>
@use '../styles/partials/varibles' as *;

.page-header {
  // background-color: $main-color;
  padding: 20px;
  text-align: center;
}



.container {
  max-width: 900px;
}
</style>