<script>
export default {
  data() {
    return {
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
      <ul class="menu">
        <li class="menu-item" v-for="(link,i) in menu" :key="i">
          <a :class="{
            'active': link.active
          }" :href="link.href">{{ link.text }}
          <font-awesome-icon v-if="link.icon" :icon="link.icon" bounce size="2xs" />  
        </a>
          
        </li>
      </ul>
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

.menu {
  display: flex;
  justify-content: center;

  .menu-item:hover {
    color: white;
  }

  a {
    line-height: 48px;
    display: block;
    padding: 0 24px;

    &.active,
    &:hover {
      background-color: $main-color;
    }
    
  }
  

}

.container {
  max-width: 900px;
}
</style>