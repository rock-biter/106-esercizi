<template>
  <div>
    <h2>{{ title }}</h2>
    {{  count  }}
    <button @click="increment">incrementa</button>
    <Badge class="bg-blue-500 text-white">Sono un badge</Badge>
  </div>
</template>

<script>
import { ref, onBeforeMount } from 'vue'
import Badge from './Badge.vue'
import axios from 'axios'

export default {
  components: {
    Badge
  },
  props: {
    title: String,
    slug: String
  },
  emits: ['finish'],
  setup (props,{ emit }) {
    
    console.log(props.title,props.slug)

    const count = ref(0)

    function increment() {
      count.value += 1
      console.log(count.value)
    }

    function fetchPost() {
      emit('finish')
      // axios.get(`http://localhost:8000/posts/${props.slug}`)
      
      

    }

    onBeforeMount(() => {
      fetchPost()
    })

    return {
      count,
      increment,
      fetchPost,
    }
  }
}
</script>

<style lang="scss" scoped>

</style>