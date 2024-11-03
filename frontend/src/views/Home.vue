<script setup>
import Aside from '@/components/Aside.vue';
import Main from '@/components/Main.vue';
</script>

<template>
  <div class="home">
    <Aside></Aside>
    <Main></Main>
  </div>
</template>

<style>
.home {
  display: grid;
  grid-template-columns: 1fr 3fr;
}
</style>