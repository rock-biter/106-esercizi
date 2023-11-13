<template>
  <header>
    <nav class="nav container">
      <span>
        Boolflix
      </span>
      <input type="text" @keyup.enter="$emit('search')" v-model.trim="store.searchText" placeholder="Cerca film">
    </nav>
  </header>
</template>

<script>
  import { store } from '../store'

  export default {
    data() {
      return {
        store: store
      }
    }  
  }
</script>

<style lang="scss" scoped>

header {
  background-color: black;
  color: white;
  padding: 20px;
}
.nav {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

</style>