<template>
  <div class="card card-post">
    <h3>{{  post.title }}</h3>
    <p v-if="post.category">
      <router-link :to="{ name: 'categories.archive', params: { slug: post.category.slug }}" >
        {{ post.category.name }}
      </router-link>
    </p>
    <router-link :to="{ name: 'posts.show', params: { slug: post.slug }}" >Leggi articolo...</router-link>
  </div>
</template>

<script>
export default {
  props: {
    post: {
      type: Object,
      required: true
    }
  }
}
</script>

<style lang="scss" scoped>
  .card.card-post {
    padding: 20px;
    border-radius: 8px;
    background: #dedede;
  }
</style>