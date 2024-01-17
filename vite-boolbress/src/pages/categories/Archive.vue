<template>
  <div v-if="category">
    <div class="container">
      <h1>{{ category.name }}</h1>
    </div>

    <div class="container">
      <ul>
        <li v-for="post in posts" :key="post.id" class="post-list-item">
          <h3>{{ post.title }}</h3>
          <p>
            {{ post.tags.map((tag) => tag.name ).join(', ') }}
          </p>
        </li>
      </ul>
    </div>
  </div>
</template>

<script>
import axios from 'axios';

  export default {
    props: {
      slug: String
    },
    data() {
      return {
        category: null,
        posts: [],
        BASE_URL: 'http://127.0.0.1:8000/api'
      }
    },
    methods: {
      fetchCategorizedPosts() {
        axios.get(`${ this.BASE_URL }/categories/${ this.slug }`)
        .then(res => {
          console.log(res.data)
          this.category = res.data.category
          this.posts = res.data.category.posts
        })
      }
    },
    created() {
      this.fetchCategorizedPosts()
    }
    
  }
</script>

<style lang="scss" scoped>

</style>