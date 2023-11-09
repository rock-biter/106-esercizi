<template>
  <div class="pasta">
    <img :src="src" alt="">

    <h3 @click="$emit('show',item)" class="title">{{ title }}</h3>
    <p @click="onClick">{{ cottura }}</p>
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
    computed: {
      title() {
        return this.item.titolo
      },  
      cottura() {
        return `${this.item.cottura} min`
      },
      src() {
        return this.item.src
      }
    },
    methods: {
      onClick() {
        // console.log(this.item.titolo)
        // this.item = {} NON POSSIAMO FARLO
        console.log(this.cottura, this.getTitle() )
      },
      getTitle() {
        return this.item.titolo
      }
    },
    // created() {
    //   console.log(this)
    // }
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