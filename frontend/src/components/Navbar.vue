<script setup>
import router from '@/router';

let currentRoute = router.currentRoute.value.name;
</script>

<template>
    <nav class="main-nav">
        <router-link v-if="currentRoute != 'Profile'" :to="{ name: 'Profile' }">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTF5-3YjBcXTqKUlOAeUUtuOLKgQSma2wGG1g&s"
                alt="profile">
            <h4>John</h4>
        </router-link>
        <router-link class="back" v-if="currentRoute === 'Profile'" :to="{ name: 'Home' }">
            <span class="material-symbols-outlined">
                home
            </span>
        </router-link>
        <div>
            <button><span class="material-symbols-outlined">
                    explore
                </span></button>
            <button>
                <span class="material-symbols-outlined">
                    location_on
                </span>
            </button>
        </div>
    </nav>
</template>

<style>
.main-nav {
    display: flex;
    justify-content: space-between;
    background-color: #e56b6b;
    padding: 25px 15px;
}

.main-nav a {
    display: flex;
    justify-content: center;
    align-content: center;
    padding: 5px;
    text-decoration: none;
    border-radius: 30px;
    transition: 0.5s;
}

.main-nav .back{
    border-radius: 50%;
    background-color: #0000008f;
    color: #e56b6b;
    transition: padding 1s;
}

.main-nav .back span {
    font-size: 30px;
}

.main-nav h4 {
    color: white;
    margin: 5px;
}

.main-nav img {
    width: 36px;
    border-radius: 50%;
}

.main-nav button {
    width: 44px;
    height: 44px;
    padding: 10px;
    border-radius: 50%;
    color: white;
    background-color: #0000008f;
    border: none;
    margin-right: 15px;
}

.main-nav a:hover {
    background-color: black;
}

.main-nav button:hover {
    background-color: #391A21;
    color: #e56b6b;
}
</style>