<template>
  <div>

    <img v-if="item.poster_path" :src="basePath + item.poster_path" alt="">
    <img v-else src="https://image.tmdb.org/t/p/w342/wwemzKWzjKYJFfCeiB57q3r4Bcm.png" alt="">

    <ul>
      <!-- <li>{{ item.title !== undefined ? item.title : item.name }}</li> -->
        <li>{{ item.title }}</li>
      <!-- <li>{{ item.title || item.name }}</li> -->
      <!-- <li>{{ item.title ?? item.name }}</li> -->
      <!-- <li>{{ originalTitle }}</li> -->
        <li>{{ item.original_title }}</li>
      <li>
        <img height="10" v-if="store.flags[item.original_language]" :src="store.flags[item.original_language]" alt="">
        <!-- <img height="10" v-if="srcFlag" :src="srcFlag" alt=""> -->
        <p v-else>{{ item.original_language }}</p>
      </li>
      <!-- <li>{{ Math.round(item.vote_average / 2) }}</li> -->
        <li>{{ vote }}</li>
        <li>
          <font-awesome-icon v-for="n in vote" :key="n" :icon="['fas', 'star']" />
          <font-awesome-icon v-for="n in 5 - vote" :key="n" :icon="['far', 'star']" />
        </li>
        <li>
          <font-awesome-icon v-for="n in 5" :key="n" :icon="[n <= vote ? 'fas' : 'far', 'star']" />
        </li>
        <template v-for="n in 5" :key="n">
          <font-awesome-icon v-if="n <= vote" :icon="['fas', 'star']" />
          <font-awesome-icon v-else :icon="['far', 'star']" />
        </template>

    </ul>

  </div>
</template>

<script>
import { store } from '../store'

  export default {
    props: {
      item: {
        type: Object,
        required: true
      }
    },
    data() {
      return {
        store,
        basePath: 'https://image.tmdb.org/t/p/w342'
      }
    },
    computed: {
      srcFlag() {
        return this.store.flags[this.item.original_language]
      },
      vote() {
        return Math.round(this.item.vote_average / 2)
      }
      // originalTitle() {
      //   if(this.item.original_title) {
      //     return this.item.original_title
      //   } else {
      //     return this.item.original_name
      //   }    
      // }
    }
  }
</script>

<style lang="scss" scoped>

</style>