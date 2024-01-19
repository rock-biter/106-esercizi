<template>
  <AppHeader />
  <div class="flex container  ">
    <sidebar class="sidebar">
      <h2>Sidebar</h2>
      <ul>
        <li>chi siamo</li>
          <li>shop</li>
          <li>mailing list</li>
      </ul>
      <slot name="sidebar"></slot>
    </sidebar>
    <main class="main-content">
      <slot></slot>
    </main>
  </div>
  
  <footer id="footer">
    <slot name="footer"></slot>
  </footer>
</template>

<script>
import AppHeader from '../components/AppHeader.vue'
export default {
  components: {
    AppHeader
  }
}
</script>

<style lang="scss" scoped>
.flex {
  display: flex;
}

.sidebar {
  width: 280px;
  flex-shrink: 0;
}

.main-content {
  flex-grow: 1;
}
</style>