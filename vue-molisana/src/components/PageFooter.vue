<script>
export default {
  data() {
    return {
      title: 'Footer'
    }
  }
}
</script>

<template>
  <footer class="page-footer">
    <div class="container">
      <div class="row">
        <div class="col">
          <img src="/img/la-molisana-logo.png" alt="">
        </div>
        <div class="col">
          <h4>Pastificio</h4>
          <ul>
            <li><a href="#">il pastificio</a></li>
            <li><a href="#">il pastificio</a></li>
            <li><a href="#">il pastificio</a></li>
            <li><a href="#">il pastificio</a></li>
            <li><a href="#">il pastificio</a></li>
          </ul>
        </div>
        <div class="col">
            <h4>Prodotti</h4>
            <ul>
              <li><a href="#">Le classiche</a></li>
              <li><a href="#">il pastificio</a></li>
              <li><a href="#">il pastificio</a></li>
              <li><a href="#">il pastificio</a></li>
              <li><a href="#">il pastificio</a></li>
            </ul>
        </div>
      </div>
    </div>
  </footer>
</template>

<style lang="scss" scoped>
.page-footer {
  // background-color: burlywood;
  background-image: url('/img/footer-montagne-bottom.jpg');
  background-position: bottom center;
  background-size: 100%;
  background-repeat: no-repeat;
  padding: 40px 20px 100px;
}

.col {
  flex-basis: 0;
  flex-grow: 1;
}

</style>