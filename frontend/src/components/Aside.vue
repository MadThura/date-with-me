<script setup>
import Navbar from './Navbar.vue';
</script>

<template>
    <aside>
        <Navbar></Navbar>
        <slot></slot>
    </aside>
</template>

<style>
aside {
    background-color: #F0F2F4;
    border-right: 0.5px solid #6e6e6e38;
}
</style>