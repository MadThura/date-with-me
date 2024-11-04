<script setup></script>

<template>
    <input type="range" min="1" max="100" value="50" class="slider">
</template>

<style scoped>
.slider {
    margin: 20px auto;
    -webkit-appearance: none;
    width: 100%;
    height: 5px;
    border-radius: 5px;
    background: #d3d3d3;
    outline: none;
    opacity: 0.7;
    -webkit-transition: .2s;
    transition: opacity .2s;
}

.slider:hover {
    opacity: 1;
}

.slider::-webkit-slider-thumb {
    -webkit-appearance: none;
    appearance: none;
    width: 20px;
    height: 20px;
    background: #e56b6b;
    cursor: pointer;
    border-radius: 50%;
}

.slider::-moz-range-thumb {
    width: 25px;
    height: 25px;
    background: red;
    cursor: pointer;
}
</style>