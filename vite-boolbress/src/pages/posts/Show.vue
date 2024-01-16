<template>
  <div v-if="post">
    <div class="container">
      <h1>{{  post.title }}</h1>
      <p>{{ post.slug }}</p>
      <p >{{ post.category?.name }}</p>
      <ul class="tags">
        <li v-for="tag in post.tags" :key="tag.id">
          {{ tag.name }}
        </li>
      </ul>
    </div>

    <div class="container" v-html="post.content">
    </div>
  </div>
</template>

<script>
import axios from 'axios'
export default {
  props: {
    slug: String
  },
  data() {
    return {
      post: null,
      BASE_URL: 'http://127.0.0.1:8000/api'
    }
  },
  methods: {
    fetchPost() {
      // axios.get(`${this.BASE_URL}/posts/${this.$route.params.slug}`)
      axios.get(`${this.BASE_URL}/posts/${this.slug}`)
      .then(res => {
        // console.log(res.data.post)
        this.post = res.data.post
      }).catch((error) => {
        console.log('post not found',error.response)

        if(error.response.status === 404) {
          this.$router.push({ name: 'not-found' })
        }
      })
    }
  },
  created() {
    // const slug = this.$route.params.slug
    // console.log('rotta:',this.$route)
    // console.log(slug)
    this.fetchPost()
  }
}
</script>

<style lang="scss" scoped>

.tags {
  padding: 10px 0;
  display: flex;
  gap: 24px;
}
</style>