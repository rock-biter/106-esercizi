<template>
  <div>
    <div class="container">
      <h1>{{  title }}</h1>
      <h2>{{  jobTitle }}</h2>
      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nisi molestias earum, sint repudiandae voluptates veniam sequi facilis repellendus repellat animi ipsa quibusdam necessitatibus doloribus alias harum, culpa qui expedita quod.</p>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      title: 'Gianluca',
      jobTitle: 'Creative Develper'
    }
  },
  mounted() {
    console.log('home page montata')
  },
  unmounted() {
    console.log('unmount home page')
  }
}
</script>

<style lang="scss" scoped>

</style>