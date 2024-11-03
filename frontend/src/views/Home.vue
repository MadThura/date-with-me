<script setup>
import Aside from '@/components/Aside.vue';
import MenuNav from '@/components/MenuNav.vue';
import Matches from '@/components/Matches.vue';
import Messages from '@/components/Messages.vue';
import Main from '@/components/Main.vue';
import { ref } from 'vue';

let current = ref("matches");

let navTo = (data) => {
  current.value = data;
}

</script>

<template>
    <Aside>
      <MenuNav @navTo="navTo" :current="current"></MenuNav>
      <div v-if="current === 'matches'">
        <Matches></Matches>
      </div>
      <div v-else>
        <Messages></Messages>
      </div>
    </Aside>
    <Main>
      main
    </Main>
</template>

<style>

</style>