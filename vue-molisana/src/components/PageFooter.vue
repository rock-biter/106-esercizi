<script>
import FooterMenu from './FooterMenu.vue';
import { store } from '../store'

export default {
  components: {
    FooterMenu
  },
  data() {
    return {
      store: store,
      footerMenu1: {
        title: 'Il pastificio bello',
        links: [
          {
            text: 'Il pastificio',
            href: '#'
          },
          {
            text: 'Grano',
            href: '#'
          },
          {
            text: 'Filiera',
            href: '#'
          },
          {
            text: '100 anni di pasta',
            href: '#'
          },
          {
            text: 'Sartoria della pasta',
            href: '#'
          },
        ]
      },
      footerMenu2: {
        title: 'Le paste',
        links: [
          {
            text: 'Le classiche',
            href: '#'
          },
          {
            text: 'Le spseciali',
            href: '#'
          },
          {
            text: 'Le integrali',
            href: '#'
          },
          {
            text: 'Le biologiche',
            href: '#'
          },
          {
            text: 'Le gluten-free',
            href: '#'
          },
        ]
      }
    }
  }
}
</script>

<template>
  <footer class="page-footer">
    <div class="container">
      <div class="row">
        <div class="col">
          {{ store.message }}
        </div>
        <div class="col">
          <img src="/img/la-molisana-logo.png" alt="">
        </div>
        <FooterMenu class="col" :title="footerMenu1.title" :links="footerMenu1.links" />
        <FooterMenu class="col" :title="footerMenu2.title" :links="footerMenu2.links"/>
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