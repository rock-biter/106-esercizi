<template>
  <span class="badge">
    <slot>
      {{  name  }}
    </slot>
  </span>
</template>

<script>
  export default {
    data() {
      return {
        name: 'mamma'
      }
    }
  }
</script>

<style lang="scss" scoped>
</style>