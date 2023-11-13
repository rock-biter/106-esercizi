<template>
  <main>
    <div class="container">
      <h2>Movies</h2>

      <div class="grid">
        <Card v-for="movie in store.movies" :key="movie.id" :item="movie"/>

        <div v-if="!store.movies.length">
          Nessun film da mostrare
        </div>
      </div>
      
    </div>
  </main>
</template>

<script>
  import { store } from '../store'
  import Card from './Card.vue';

  export default {
    components: {
      Card,
    },
    data() {
      return {
        store: store
      }
    },
    // computed: {
    //   movies() {
    //     return store.movies
    //   },
    //   series() {
    //     return store.series
    //   }
    // }
  }
</script>

<style lang="scss" scoped>

main {
  padding: 20px;
}

.grid {
  display: grid;
  grid-template-columns: repeat(4,1fr);
  gap: 40px;
}

</style>