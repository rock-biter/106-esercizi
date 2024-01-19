<template>
  <main>
    <div class="container">
      <slot></slot>
    </div>
  </main>
</template>

<script>
  export default {
    
  }
</script>

<style lang="scss" scoped>
  main {
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
  }
</style>