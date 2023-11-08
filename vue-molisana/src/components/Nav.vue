<template>
  <ul class="menu">
        <li class="menu-item" v-for="(link,i) in menu" :key="i">
          <a :class="{
            'active': link.active
          }" :href="link.href">
          {{ link.text }}

          <span v-if="link.text === 'Prodotti'">
            ({{ store.paste.length }})
          </span>
          <font-awesome-icon v-if="link.icon" :icon="link.icon" bounce size="2xs" />  
        </a>
          
        </li>
      </ul>
</template>

<script>
  import { store } from '../store'

  export default {
    props: {
      menu: {
        type: Array,
        default: () => []
      },
    },
    data() {
      return {
        store: store
      }
    }
  }
</script>

<style lang="scss" scoped>
@use '../styles/partials/varibles' as *;
.menu {
  display: flex;
  justify-content: center;

  .menu-item:hover {
    color: blueviolet;
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
</style>