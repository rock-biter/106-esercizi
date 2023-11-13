<template>
  <div>
    <ul>
      <li>{{ item.title }}</li>
      <li>{{ item.original_title }}</li>
      <li>
        <img height="10" v-if="store.flags[item.original_language]" :src="store.flags[item.original_language]" alt="">
        <!-- <img height="10" v-if="srcFlag" :src="srcFlag" alt=""> -->
        <p v-else>{{ item.original_language }}</p>
      </li>
      <li>{{ item.vote_average }}</li>
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
      }
    },
    computed: {
      srcFlag() {
        return this.store.flags[this.item.original_language]
      }
    }
  }
</script>

<style lang="scss" scoped>

</style>