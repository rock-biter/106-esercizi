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
.badge {
  border-radius: 8px;
  padding: 0 16px;
  line-height: 22px;
  color: white;
  background: cornflowerblue;
}
</style>