<template>
  <main class="page-content">
      <div class="container">
        <div class="row">
          <div 
            v-for="(pasta, i) in paste" 
            :key="i" 
            class="col-3">
            <Product :item="pasta" />
          </div>
        </div>
      </div>
    </main>
</template>

<script>
// import pasteJson from '../la-molisana.json'
import Product from './Product.vue';
import { store } from '../store.js'

  export default {
    components: {
      Product
    },
    data() {
      return {
        store: store,
        paste: store.paste
      }
    }
  }
</script>

<style lang="scss" scoped>

</style>