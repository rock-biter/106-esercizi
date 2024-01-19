<template>
  <header>
    <div class="container">
      <nav>
        <ul>

            <li :class="{
              'active': $route.name === 'home'
            }">
              <router-link :to="{ name: 'home' }">Home</router-link>
            </li>
            <li :class="{
              'active': $route.name === 'posts.index'
            }">
              <router-link :to="{ name: 'posts.index' }">Blog</router-link>
            </li>
            <li>
              <router-link :to="{ name: 'contacts' }">Contatti</router-link>
            </li>
            <template v-if="!authenticated">
              <li >
                <router-link :to="{ name: 'contacts' }">Login</router-link>
              </li>
              <li>
                <router-link :to="{ name: 'contacts' }">Registrati</router-link>
              </li>
            </template>
            
        </ul>
      </nav>
    </div>
  </header>
</template>

<script>
export default {
  data(){ 
    return {
      authenticated: false
    }
  },   
  mounted() {
    console.log('app header montato',this.$route)
  },
  unmounted() {
    console.log('app header unmounted')
  }
}
</script>

<style lang="scss" scoped>

.active {
  color: tomato;
  font-weight: 700;
}

</style>