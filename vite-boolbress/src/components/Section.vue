<template>
  <section class="section">
    <div class="container">
      <div class="row">
        <slot />
      </div>
    </div>
  </section>
</template>

<script>
  export default {
    
  }
</script>

<style lang="scss" scoped>
.section {
  padding: 0 24px;
  margin-bottom: 24px;
  margin-top: 24px;
}

.row {
  display: flex;
  flex-wrap: wrap;
}
</style>