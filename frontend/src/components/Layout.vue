<script setup>
import Aside from './Aside.vue';
import Main from './Main.vue';
</script>

<template>
    <div class="layout">
        <Aside>
            <slot></slot>
        </Aside>
        <Main></Main>
    </div>
</template>

<style>
.layout {
    display: grid;
    grid-template-columns: 1fr 3fr;
}
</style>