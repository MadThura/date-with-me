<script setup>
import LoginForm from './registeration/LoginForm.vue';
import { ref } from 'vue';

let showLoginForm = ref(false);
let hide = (data) => {
    showLoginForm.value = data;
}
</script>
<template>
    <div class="welcome">
        <nav>
            <router-link to="/">
                <h1>Date with me</h1>
            </router-link>
            <button class="logBtn" @click="showLoginForm = !showLoginForm">Log in</button>
        </nav>
        <div class="main-content">
            <h1>Swipe Right</h1>
            <button class="createBtn">Create account</button>
        </div>
    </div>

    <LoginForm v-if="showLoginForm" @hide="hide"></LoginForm>

</template>

<style scoped>
.welcome {
    position: relative;
}

nav {
    background-color: #e56b6b;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 18px 30px;
}

nav h1 {
    color: white;
}

.main-content {
    height: 70vh;
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}

.main-content h1 {
    font-weight: 900;
    font-size: 100px;
    color: black;
}

button {
    font-weight: bold;
    font-size: 18px;
    padding: 12px 20px;
    border-radius: 30px;
    border: none;
}

.logBtn {
    background-color: white;
}

.main-content .createBtn {
    color: white;
    background-color: #e56b6b;
}
</style>