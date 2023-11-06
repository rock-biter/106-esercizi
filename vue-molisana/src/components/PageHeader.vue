<script>
export default {
  data() {
    return {
      title: 'Molisana',
      menu: []
    }
  }
}

</script>

<template>
  <header class="page-header">
    <nav class="container">
      <img src="/img/la-molisana-logo.png" alt="">
      <ul class="menu">
        <li>
          <a href="#">Home</a></li>
        <li>
          <a class="active" href="#">Prodotti</a></li>
        <li>
          <a href="#">Chi siamo</a></li>
        <li>
          <a href="#">Contatti</a></li>
      </ul>
    </nav>
  </header>
</template>

<style lang="scss" scoped>
@use '../styles/partials/varibles' as *;

.page-header {
  // background-color: $main-color;
  padding: 20px;
  text-align: center;
}

.menu {
  display: flex;
  justify-content: center;

  a {
    line-height: 48px;
    display: block;
    padding: 0 24px;

    &.active,
    &:hover {
      background-color: $main-color;
    }
    
  }
  

}

.container {
  max-width: 900px;
}
</style>