<template>
  <main class="page-content">
    <div class="container">
      <div class="row">
        <div 
          v-for="(pasta, i) in store.paste" 
          :key="i" 
          class="col-3">
          <Product @delete="deleteProduct" @show="showModal" :item="pasta" />
        </div>
      </div>
    </div>

    <div v-if="open" class="modal">
      <div class="card">
        <div class="card__header">
          <span>
            {{ selectedPasta.titolo }}
          </span>
          <font-awesome-icon @click="closeModal" :icon="['far', 'circle-xmark']" />
        </div>
        <div class="card__body">
          <p>Tempo di cotture: {{ selectedPasta.cottura }} min</p>
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
        open: false,
        selectedPasta: {}
      }
    },
    computed: {
      paste: function() {
        // return this.store.paste
        console.log('computed paste')
        return store.paste
      }
    },
    methods: {
      showModal(pasta) {
        console.log('show modal',pasta)
        this.selectedPasta = pasta
        this.open = true
      },
      deleteProduct() {
        console.log('delete prod')
      },
      closeModal() {
        this.open = false
        this.selectedPasta = {}
      },
      pasteFn() {
        console.log('paste fn')
        return store.paste
      }
    }
  }
</script>

<style lang="scss" scoped>

.modal::after {
  content: '';
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  z-index: 40;
  background-color: rgba(0,0,0,0.5);
}
.modal .card {
  position: fixed;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  z-index: 50;
  background-color: white;
  border-radius: 20px;
  padding: 20px;
  width: 100%;
  max-width: 500px;
  box-shadow: 0px 0px 20px rgba(0,0,0,0.2);

  .card__header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    font-size: 22px;
    font-weight: 700;
  }

}

</style>