<template>
  <div class="pasta">
    <img :src="item.src" alt="">

    <h3 @click="onClick" class="title">{{ item.titolo }}</h3>
    <p>{{ item.cottura }} min</p>
  </div>
  
</template>

<script>
  export default {
    props: {
      item: {
        type: Object,
        // default: () => ({})
        required: true
      }
      // title: {
      //   type: String,
      //   default: 'Titolo pasta'
      // },
      // src: {
      //   type: String,
      //   required: true
      // }
    },
    methods: {
      onClick() {
        console.log(this.item.titolo)
        // this.item = {} NON POSSIAMO FARLO
      }
    }
  }
</script>

<style lang="scss" scoped>
.pasta {
  padding: 20px;
  background-color: white;
  text-align: center;
  height: 100%;
  border-radius: 8px;

  .title {
    margin-bottom: 8px;
  }
}
</style>