<script>
// 1) importazione del componente
import PageHeader from './components/PageHeader.vue';
import PageFooter from './components/PageFooter.vue';
import PageMain from './components/Main.vue';
import axios from 'axios'
import { store } from './store'

export default {
  components: {
    PageHeader: PageHeader, //2) registrazione del componente
    PageFooter,
    PageMain,
  },
  data() {
    return {
      store: store,
      message: 'Hello world!',
    }
  },
  created() {
    // console.log(this.paste)
    axios.get('http://localhost:3000/paste')
    .then(res => {
      
      const paste = res.data
      console.log(res,paste)
      // this.store.paste = paste
      this.store.paste = paste

    })
  }
}

</script>

<template>
  <!-- 3) utilizzo del componente -->
  <PageHeader/>
  <PageMain/>
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
