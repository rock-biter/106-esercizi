<script>
import AppMain from './components/AppMain.vue';
import AppHeader from './components/AppHeader.vue';
import { store } from './store'
import axios from 'axios'

export default {
  components: {
    AppMain,
    AppHeader,
  },
  data() {
    return {
      store: store
    }
  },
  methods: {
    fetchData() {

      if(this.store.searchText === '') {
        store.movies = []
        store.series = []
        return
      }

      axios.get('https://api.themoviedb.org/3/search/movie',{
        params: {
          api_key: this.store.API_KEY,
          query: this.store.searchText,
          language: 'it-IT'
        }
      })
      .then(res => {
        const movies = res.data.results
        this.store.movies = movies
      })

    }
  }
}
</script>

<template>
  <AppHeader @search="fetchData" />
  <AppMain />
</template>

<style lang="scss">
@use './style/general.scss';

</style>
