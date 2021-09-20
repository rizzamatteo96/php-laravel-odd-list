<template>
  <div class="d-inline-block">
    <span class="badge bg-success text-white mx-1" v-for="(tag,i) in tagList" :key="i">{{tag.name}}</span>
  </div class="d-inline-block">
</template>

<script>
export default {
  name: 'Tags',
  props: ['tagList']
}
</script>

<style>

</style>