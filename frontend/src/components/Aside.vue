<script setup>
import Navbar from './Navbar.vue';
import Matches from './Matches.vue';
import Messages from './Messages.vue';
import MenuNav from './MenuNav.vue';
import { ref } from 'vue';

let current = ref("matches");

let navTo = (data) => {
    current.value = data;
}

</script>
<template>
    <aside>
        <Navbar></Navbar>
        <MenuNav @navTo="navTo" :current="current"></MenuNav>
        <div v-if="current === 'matches'">
            <Matches></Matches>
        </div>
        <div v-else>
            <Messages></Messages>
        </div>
    </aside>
</template>