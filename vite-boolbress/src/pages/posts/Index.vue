<template>
  <DefaultLayout>
    <div class="container">
      <h1 class="mb-4">
        I nostri ultimi post
      </h1>
    </div>

    <div class="container">
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4">
        <PostCard class="card post-card" v-for="post in posts" :post="post" :key="post.id" />

        <NewPostCard @finish="onFinish" title="Un bel post" slug="ciao-mamma-come-stai" />
        <NewPostCardAPI @onMounted="onMounted" :post="{ title: 'Il mioglior modo di ...'}" slug="eccomi-sono-morto"/>

      </div>
    </div>
    <div class="container">
      <ul class="pagination">
        <li v-for="n in lastPage" :class="{
          'active': n === page
        }" :key="n" @click="setPage(n)" >{{ n }}</li>
      </ul>
    </div>
  </DefaultLayout>
</template>

<script>
import axios from 'axios';
import PostCard from '../../components/PostCard.vue';
import DefaultLayout from '../../layouts/DefaultLayout.vue';
import NewPostCard from '../../components/NewPostCard.vue';
import NewPostCardAPI from '../../components/NewPostCardAPI.vue';

export default {
  components: {
    PostCard,
    DefaultLayout,
    NewPostCard,
    NewPostCardAPI
  },
  data() {
    return {
      posts: [],
      page: 3,
      lastPage: 0,
      BASE_URL: 'http://127.0.0.1:8000/api'
    }
  },
  watch: {
    page: function() {
      this.posts = []
      this.fetchPosts()
    }
  },
  methods: {
    onFinish() {
      console.log('i dati sono arrivati')
    },
    onMounted(post) {
      console.log('carp post mounted!',post)
    },
    fetchPosts() {
      axios.get(`${this.BASE_URL}/posts`,{
        params: {
          page: this.page
        }
      })
      .then((res) => {
        // console.log(res)
        this.posts = res.data.results.data
        this.lastPage = res.data.results.last_page
      })
    },
    setPage(n) {
      this.page = n
      // this.posts = []
      // this.fetchPosts()
    }
  },
  created() {
    this.fetchPosts()
  },
  mounted() {
    console.log('posts.index montato')
  },
  unmounted() {
    console.log('unmount posts.index')
  }
}
</script>

<style lang="scss" scoped>

</style>