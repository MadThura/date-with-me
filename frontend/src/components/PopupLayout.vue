<script setup>
let emit = defineEmits(['hide']);

let handleClick = (event) => {
    if (event.target.classList.contains("layout")) {
        emit('hide', false);
    }
}
</script>
<template>
    <div @click="handleClick" class="layout">
        <slot></slot>
    </div>
</template>

<style scoped>
.layout {
    position: absolute;
    top: 0;
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
}

.layout::after {
    content: "";
    position: absolute;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    ;
}
</style>