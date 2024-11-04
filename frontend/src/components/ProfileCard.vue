<script setup>
import { ref } from 'vue';
import InfoTag from './InfoTag.vue';

// Profile data
const profile = {
    name: 'John Doe',
    age: '20',
    title: 'Web Developer',
    description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum.'
};

// Image array for the slider
const images = [
    'https://images.rawpixel.com/image_social_portrait/cHJpdmF0ZS9sci9pbWFnZXMvd2Vic2l0ZS8yMDIzLTExL3Jhd3BpeGVsb2ZmaWNlMTBfZGVlcF9waW5lX2ZvcmVzdF9iYWNrZ3JvdW5kX19oaW50X29mX3ByZWNpc2lvbl9hMTRmMjkzNy1mZDM2LTQyMzQtYmI5MS1kMjMyZmQ5Njk3OTFfMS5qcGc.jpg',
    'https://images.rawpixel.com/image_800/cHJpdmF0ZS9sci9pbWFnZXMvd2Vic2l0ZS8yMDIzLTEyL3Jhd3BpeGVsb2ZmaWNlOV9hX3ByaW50ZWRfaW1hZ2Vfb2ZfdGhlX3N0eWxlX29mX2xpbm9jdXRfcHJpbnRzX182MTllYzNlMC1hZjMxLTQxOGEtOWZjOS0zZjU0ZjgyYTNkZDlfMS5qcGc.jpg',
    'https://images.rawpixel.com/image_social_portrait/cHJpdmF0ZS9sci9pbWFnZXMvd2Vic2l0ZS8yMDIzLTExL3Jhd3BpeGVsb2ZmaWNlMTBfZGVlcF9waW5lX2ZvcmVzdF9iYWNrZ3JvdW5kX19oaW50X29mX3ByZWNpc2lvbl9hMTRmMjkzNy1mZDM2LTQyMzQtYmI5MS1kMjMyZmQ5Njk3OTFfMS5qcGc.jpg',
    'https://images.rawpixel.com/image_800/cHJpdmF0ZS9sci9pbWFnZXMvd2Vic2l0ZS8yMDIzLTEyL3Jhd3BpeGVsb2ZmaWNlOV9hX3ByaW50ZWRfaW1hZ2Vfb2ZfdGhlX3N0eWxlX29mX2xpbm9jdXRfcHJpbnRzX182MTllYzNlMC1hZjMxLTQxOGEtOWZjOS0zZjU0ZjgyYTNkZDlfMS5qcGc.jpg',
];

const currentSlide = ref(0);
let currentTab = ref(0);
// Function to show the next slide
let nextSlide = () => {
    currentSlide.value = (currentSlide.value + 1) % images.length;
    currentTab.value++;
}

// Function to show the previous slide
let prevSlide = () => {
    currentSlide.value = (currentSlide.value - 1 + images.length) % images.length;
    currentTab.value--;
}

let handleTabClick = (index) => {
    currentSlide.value = index;
    currentTab.value = index;
}

</script>

<template>
    <div class="profile-card">
        <div class="slider">
            <div class="tab-container">
                <button :class="{ active: currentTab === index }" @click="handleTabClick(index)"
                    v-for="(image, index) in images" :key="index"
                    :style="{ width: `${100 / images.length}%` }"></button>
            </div>
            <div class="slides" :style="{ transform: `translateX(-${currentSlide * 100}%)` }">
                <img v-for="image in images" :key="image" :src="image" :alt="image">
            </div>
            <button v-if="currentSlide" class="prev" @click="prevSlide">&#10094;</button>
            <button v-if="currentSlide != images.length - 1" class="next" @click="nextSlide">&#10095;</button>
        </div>
        <div class="infos-container profile-info">
            <h2>{{ profile.name }} {{ profile.age }}</h2>
            <p><span class="material-symbols-outlined">
                    school
                </span>University</p>
            <p><span class="material-symbols-outlined">
                    man
                </span>Gender</p>
        </div>
        <hr>
        <div class="infos-container">
            <h2>Basic</h2>
            <div class="tags-container">
                <InfoTag></InfoTag>
                <InfoTag></InfoTag>
                <InfoTag></InfoTag>
                <InfoTag></InfoTag>
            </div>
        </div>
        <hr>
        <div class="infos-container">
            <h2>Lifestyle</h2>
            <div class="tags-container">
                <InfoTag></InfoTag>
                <InfoTag></InfoTag>
                <InfoTag></InfoTag>
                <InfoTag></InfoTag>
            </div>
        </div>
    </div>
</template>

<style scoped>
.profile-card {
    width: 360px;
    height: 600px;
    border-radius: 5px;
    overflow: hidden;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    background-color: #ffffff;
    overflow-y: scroll;
    scroll-behavior: smooth;
}

.slider {
    position: relative;
    width: 100%;
    height: 450px;
    overflow: hidden;
}

.slides {
    display: flex;
    width: 100%;
    transition: transform 0.5s ease-in-out;
}

.slides img {
    width: 100%;
    object-fit: cover;
    border-bottom: 2px solid #ddd;
}

.prev,
.next {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background-color: rgba(0, 0, 0, 0.5);
    color: #ffffff;
    border: none;
    padding: 10px;
    cursor: pointer;
    border-radius: 50%;
    opacity: 0;
    transition: transform 0.3s ease, opacity 0.3s ease;
}

.prev {
    left: 10px;
}

.next {
    right: 10px;
}

.tab-container {
    position: absolute;
    top: 1%;
    width: 100%;
    background-color: rgb(0, 0, 0);
    display: flex;
    padding: 3px 5px;
}

.tab-container button {
    height: 5px;
    border-radius: 5px;
    border: 1px solid;
    z-index: 3;
    margin-right: 2px;
    cursor: pointer;
    background-color: white;
}

.tab-container button.active {
    background-color: #505965;
}

.tab-container button:hover {
    background-color: white;
}

.infos-container {
    padding: 15px;
}

.profile-info h2 {
    font-size: 26px;
    color: #333;
}

.profile-info p {
    font-size: 17px;
    color: #666;
}

.profile-info p span {
    font-size: 16px;
    margin-right: 5px;
}

.profile-card::-webkit-scrollbar {
    display: none;
}

.profile-card {
    scrollbar-width: none;
}

.tags-container {
    display: flex;
    flex-wrap: wrap;
    padding: 5px 0;
}

.slider:hover .next,
.slider:hover .prev {
    opacity: 1;
}
</style>