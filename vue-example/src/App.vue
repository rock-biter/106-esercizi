<script>
export default {
  data() {
    return {
      message: 'Ciao mondo'
    }
  },
  methods: {
    saluta() {
      console.log('ciao')
    }
  }
}

</script>

<template>
  <div class="messaggio" @click="saluta">
    {{ message }}
  </div>
</template>

<style scoped>

.messaggio {
  color: rebeccapurple;
}

</style>
