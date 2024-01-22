<template>
  <div>
    <h2>{{  title  }}</h2>
    {{ count }}
    <button @click="increment">incrementa</button>
    <Badge class="bg-amber-400">Anche io sono un badge</Badge>
  </div>
</template>

<script setup>
import { computed, onBeforeMount, onMounted, ref, watch } from 'vue';
import Badge from './Badge.vue';

const count = ref(0)

const emit = defineEmits()

const props = defineProps({
  slug: String,
  post: {
    type: Object,
    required: true
  }
})

const title = computed(() => props.post.title)

watch([count,title],(val, oldValue) => {
  console.log('count è cambiato',val, oldValue, count.value)
})

function increment() {
  count.value++ 
  console.log(count.value)
}

onBeforeMount(() => {
  increment()
  console.log('before mount',count.value)
})

onMounted(() => {
  console.log(props.slug)
  emit('onMounted', props.post)
})

</script>

<style lang="scss" scoped>

</style>