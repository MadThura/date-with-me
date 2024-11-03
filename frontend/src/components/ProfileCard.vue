<script setup>
import { ref } from 'vue';

// Profile data
const profile = {
    name: 'John Doe',
    title: 'Web Developer',
    description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum.'
};

// Image array for the slider
const images = [
    'https://images.rawpixel.com/image_social_portrait/cHJpdmF0ZS9sci9pbWFnZXMvd2Vic2l0ZS8yMDIzLTExL3Jhd3BpeGVsb2ZmaWNlMTBfZGVlcF9waW5lX2ZvcmVzdF9iYWNrZ3JvdW5kX19oaW50X29mX3ByZWNpc2lvbl9hMTRmMjkzNy1mZDM2LTQyMzQtYmI5MS1kMjMyZmQ5Njk3OTFfMS5qcGc.jpg',
    'https://images.rawpixel.com/image_social_portrait/cHJpdmF0ZS9sci9pbWFnZXMvd2Vic2l0ZS8yMDIzLTExL3Jhd3BpeGVsb2ZmaWNlMTBfZGVlcF9waW5lX2ZvcmVzdF9iYWNrZ3JvdW5kX19oaW50X29mX3ByZWNpc2lvbl9hMTRmMjkzNy1mZDM2LTQyMzQtYmI5MS1kMjMyZmQ5Njk3OTFfMS5qcGc.jpg',
    'https://images.rawpixel.com/image_social_portrait/cHJpdmF0ZS9sci9pbWFnZXMvd2Vic2l0ZS8yMDIzLTExL3Jhd3BpeGVsb2ZmaWNlMTBfZGVlcF9waW5lX2ZvcmVzdF9iYWNrZ3JvdW5kX19oaW50X29mX3ByZWNpc2lvbl9hMTRmMjkzNy1mZDM2LTQyMzQtYmI5MS1kMjMyZmQ5Njk3OTFfMS5qcGc.jpg',
];

const currentSlide = ref(0);
// Function to show the next slide
let nextSlide = () => {
    currentSlide.value = (currentSlide.value + 1) % images.length;
}

// Function to show the previous slide
let prevSlide = () => {
    currentSlide.value = (currentSlide.value - 1 + images.length) % images.length;
}


</script>

<template>
    <div class="profile-card">
        <div class="slider">
            <div class="slides" :style="{ transform: `translateX(-${currentSlide * 100}%)` }">
                <img v-for="image in images" :key="image" :src="image" :alt="image">
            </div>
            <button v-if="currentSlide" class="prev" @click="prevSlide">&#10094;</button>
            <button v-if="currentSlide != images.length - 1" class="next" @click="nextSlide">&#10095;</button>
        </div>
        <div class="profile-info">
            <h2>{{ profile.name }}</h2>
            <p>{{ profile.title }}</p>
            <p>{{ profile.description }}</p>
        </div>
    </div>
</template>

<style scoped>
.profile-card {
    width: 350px;
    height: 500px;
    border-radius: 5px;
    overflow: hidden;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    background-color: #ffffff;
    text-align: center;
    overflow-y: scroll;
    scroll-behavior: smooth;
}

.slider {
    position: relative;
    width: 100%;
    height: 400px;
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
}

.prev {
    left: 10px;
}

.next {
    right: 10px;
}

.profile-info {
    padding: 15px;
}

.profile-info h2 {
    font-size: 1.5em;
    color: #333;
}

.profile-info p {
    font-size: 0.9em;
    color: #666;
    margin: 5px 0;
}

.profile-card::-webkit-scrollbar {
    display: none;
}

.profile-card {
    scrollbar-width: none;
}
</style>