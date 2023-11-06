<script>
// 1) importazione del componente
import PageHeader from './components/PageHeader.vue';
import PageFooter from './components/PageFooter.vue';
import Product from './components/Product.vue';

export default {
  components: {
    PageHeader: PageHeader, //2) registrazione del componente
    PageFooter,
    Product,
  },
  data() {
    return {
      message: 'Hello world!'
    }
  }
}

</script>

<template>
  <!-- 3) utilizzo del componente -->
  <PageHeader />
  <main class="page-content">
    <div class="container">
      <div class="row">
        <div v-for="n in 12" :key="n" class="col-3">
          <Product />
        </div>
      </div>
    </div>
  </main>
  <PageFooter />
</template>

<style lang="scss">
@use './styles/general.scss';

.page-content {
  padding: 80px 20px;
  background-image: url('/img/fondo-pag-speciali.jpg');
}

.row {
  row-gap: 10px;
}

</style>
