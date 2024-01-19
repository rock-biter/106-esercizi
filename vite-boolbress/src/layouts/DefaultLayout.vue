<template>
  <AppHeader />
  <main>
    <slot></slot>
  </main>
  <footer id="footer">
    <!-- ... -->
  </footer>
</template>

<script>
import AppHeader from '../components/AppHeader.vue'
  export default {
    components: {
      AppHeader
    }
  }
</script>

<style lang="scss" scoped>

</style>