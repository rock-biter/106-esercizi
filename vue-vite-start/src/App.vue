<script>
import axios from 'axios'

export default {
  data() {
    return {
      counter: 0,
      API_KEY: 'e99307154c6dfb0b4750f6603256716d',
      query: 'Ritornoalfuturo'
    }
  },
  methods: {
    fetchMovies() {
      // axios.get(`https://api.themoviedb.org/3/search/movie?api_key=${this.API_KEY}&query=${this.query}&language=it_IT`)
      // .then(res => {
      //   console.log(res.data.results)
      // })
      axios.get('https://api.themoviedb.org/3/search/movie',{
        params: {
          api_key: this.API_KEY,
          query: this.query,
          language: 'it_IT'
        }
      }).then(res => {
        console.log(res.data.results)
      })
    }
  },
  // beforeCreate() {
  //   console.log('BEFORE CREATE',this.counter)
  // },
  created() {
    console.log('CREATED')
    this.fetchMovies()
  },
  // beforeMount() {
  //   console.log('BEFORE MOUNT')
  // },
  // mounted() {
  //   console.log('MOUNTED')
  // },
  // beforeUpdate() {
  //   console.log('BEFORE UPDATE')
  // },
  // updated() {
  //   console.log('UPDATED')
  // },
  // beforeUnmount() {
  //   console.log('BEFORE UNMOUNT')
  // },
  // unmounted() {
  //   console.log('UNMOUNTED')
  // }
}

</script>

<template>
  <div>
    <div class="counter">
      {{ counter }}
    </div>
    <button @click="counter++">incrementa</button>
  </div>
</template>

<style scoped>
.counter {
  font-size: 5rem;
}
</style>
