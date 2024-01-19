<template>
  <LeftSidebarLayout>
    <template v-if="post">

      <Section>
        <div class="col-12">
          <h1>{{ post.title }}</h1>
          <p>{{ post.slug }}</p>
        </div>
      </Section>

      <Section class="bg-blue">
        <div class="col-12">
          <p >{{ post.category?.name }}</p>
          <ul class="tags">
            <li v-for="(tag, i) in post.tags" :key="tag.id">
              <Badge>
                <span @click="fetchPost" v-if="i % 2 === 0">({{ i }})</span>
                <strong >
                  {{ tag.name }} 
                </strong>
              </Badge>
            </li>
          </ul>
        </div>
        <div class="col-12" v-html="post.content"></div>
      </Section>

      <Section>
        <div class="col-12">
          <h2>Articoli correlati</h2>
        </div>
        <div class="col-4" v-for="n in 3" :key="n">
          <h4>Titolo articolo {{ n }}</h4>
        </div>
      </Section>
    </template>

    <template #sidebar>
      <h4>Categorie</h4>
      <ul class="categories">
        <li>DevOps</li>
        <li>Backend</li>
        <li>FrontEnd</li>
        <li>Design</li>
      </ul>
    </template>
  </LeftSidebarLayout>
  
</template>

<script>
import axios from 'axios'
import Badge from '../../components/Badge.vue'
import Section from '../../components/Section.vue'
import LeftSidebarLayout from '../../layouts/LeftSidebarLayout.vue'
export default {
  components: {
    Badge,
    Section,
    LeftSidebarLayout
  },
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
  flex-wrap: wrap;
  gap: 24px;
}

.bg-blue {
  background: dodgerblue;
  color: white;
}
</style>