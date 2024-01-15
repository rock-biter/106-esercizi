<template>
  <div>
    <div class="container">
      <h1>
        I nostri ultimi post
      </h1>
    </div>

    <div class="container">
      <div class="grid">
        <PostCard class="card post-card" v-for="post in posts" :post="post" :key="post.id" />

      </div>
    </div>
  </div>
</template>

<script>
import axios from 'axios';
import PostCard from '../../components/PostCard.vue';

export default {
  components: {
    PostCard
  },
  data() {
    return {
      posts: [],
      BASE_URL: 'http://127.0.0.1:8000/api'
    }
  },
  methods: {
    fetchPosts() {
      axios.get(`${this.BASE_URL}/posts`)
      .then((res) => {
        console.log(res)
        this.posts = res.data.results.data
      })
    }
  },
  created() {
    this.fetchPosts()
  }
}
</script>

<style lang="scss" scoped>
.grid {
  display: grid;
  gap: 2rem;
  grid-template-columns: repeat(4,1fr);
}
</style>