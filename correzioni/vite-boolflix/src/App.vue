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

      // recuperato i film
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
      .catch(err => {
        console.log(err,err.response)
        store.movies = []
      })

      // recupera le serie
      axios.get('https://api.themoviedb.org/3/search/tv',{
        params: {
          api_key: this.store.API_KEY,
          query: this.store.searchText,
          language: 'it-IT'
        }
      })
      .then(res => {
        const series = res.data.results

        series.forEach(serie => {
          serie.title = serie.name
          serie.original_title = serie.original_name
          // serie.vote = Math.random(serie.vote_average / 2)
        });

        console.log(series)

        this.store.series = series
      })
      .catch(() => {
        store.series = []
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
