<script setup>
let props = defineProps(["current"]);
let emit = defineEmits(["navTo"]);

let navTo = (data) => {
    emit("navTo", data);
}

</script>

<template>
    <nav class="menu-nav">
        <button @click="navTo('matches')" :class="{active: current === 'matches'}">Matches</button>
        <button @click="navTo('messages')" :class="{active: current === 'messages'}">Messages</button>
    </nav>
</template>

<style>
.menu-nav {
    display: flex;
    justify-content: space-around;
    padding: 10px 0;
}

.menu-nav button {
    background-color: transparent;
    font-weight: bold;
    font-size: 15px;
    color: black;
    border: none;
    padding: 3px;
}

.menu-nav button.active {
    border-bottom: 3.5px solid #e56b6b;
}
</style>