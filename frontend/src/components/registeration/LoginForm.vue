<script setup>
import PopupLayout from '../PopupLayout.vue';

let emit = defineEmits(['hide']);

let hide = (data) => {
    emit('hide', data);
}

</script>
<template>
    <PopupLayout @hide="hide">
        <div class="login-form">
            <span @click="hide(false)" class="material-symbols-outlined">
                close
            </span>
            <form>
                <h1>Welcome back</h1>
                <label>Email</label>
                <input type="email" required>
                <label>Password</label>
                <input type="password" required>
                <div>
                    <button>Login</button>
                </div>
            </form>
        </div>
    </PopupLayout>
</template>

<style>
.login-form {
    position: inherit;
    background-color: white;
    padding: 30px;
    border-radius: 10px;
    z-index: 1;
    min-width: 350px;
}

.login-form span {
    position: absolute;
    top: 5%;
    right: 5%;
    font-size: 35px;
    color: #656E7B;
    cursor: pointer;
}

form {
    display: flex;
    flex-direction: column;
}

form h1 {
    margin-top: 10px;
}

form label {
    font-weight: bold;
    margin: 5px;
}

form input {
    border: 0.05px solid skyblue;
    outline: none;
    font-size: 16px;
    background-color: #F0F2F4;
    padding: 10px;
    border-radius: 10px;
}

form button {
    margin-top: 20px;
    padding: 10px 30px;
    border: none;
    border-radius: 20px;
    font-size: 16px;
    color: #7C8591;
    font-weight: bold;
}
</style>