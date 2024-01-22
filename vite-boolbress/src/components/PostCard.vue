<template>
  <div class="card group card-post border rounded-lg p-2">
    <h3 class="group-hover:pl-4 md:lh-4">{{  title }}</h3>
    <p v-if="post.category">
      <router-link :to="{ name: 'categories.archive', params: { slug: post.category.slug }}" >
        {{ post.category.name }}
      </router-link>
    </p>
    <router-link class="lg:button" :to="{ name: 'posts.show', params: { slug: post.slug }}" >Leggi articolo...</router-link>
  </div>
</template>

<script>
export default {
  props: {
    post: {
      type: Object,
      required: true
    }
  },
  data() {
    return {
      count: 0
    }
  },
  watch: {
    title: function(val, oldValue) {
      console.log(val)
    }
  },
  methods: {
    increment() {
      this.count += 1
    }
  },
  computed: {
    title() {
      return this.post.title
    }
  }
}
</script>

<style lang="scss" scoped>

</style>