<template>
  <div>
    <h4 class="menu-title">{{ title }}</h4>
    <ul>
      <li v-for="(link,i) in links" :key="i" >
        <a :href="link.href">{{ link.text }}</a>
      </li>
    </ul>
  </div>
</template>

<script>
  export default {
    props: ['title','links']
  }
</script>

<style lang="scss" scoped>
.menu-title {
  font-size: 20px;
  margin-bottom: 1rem;
}
</style>