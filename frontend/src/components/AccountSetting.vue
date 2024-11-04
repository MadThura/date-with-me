<script setup>
import RangeSlider from './RangeSlider.vue';
import ToggleBtn from './ToggleBtn.vue';

</script>

<template>
    <div class="container">
        <h4>Account Settings</h4>
        <div class="menuItem">
            <h5>Email</h5>
            <p>john@gamil.com
                <span class="material-symbols-outlined">
                    chevron_right
                </span>
            </p>
        </div>
        <div class="menuItem">
            <h5>Phone Number</h5>
            <p>09755049532
                <span class="material-symbols-outlined">
                    chevron_right
                </span>
            </p>
        </div>
        <h4>discovery settings</h4>
        <div class="menuItem">
            <h5>Location</h5>
            <p>Yangon<span class="material-symbols-outlined">
                    chevron_right
                </span></p>
        </div>
        <div class="menuItem">
            <h5>Distance Preference</h5>
            <p>41 mi</p>
            <RangeSlider></RangeSlider>
        </div>
        <div class="menuItem">
            <h5>Age Preference</h5>
            <p>18 - 25</p>
            <RangeSlider></RangeSlider>
        </div>
        <div class="menuItem">
            <h5>Looking for</h5>
            <p>Women <span class="material-symbols-outlined">
                    chevron_right
                </span></p>
        </div>
        <div class="menuItem">
            <h5>Global</h5>
            <ToggleBtn></ToggleBtn>
        </div>
        <h4>Appearance</h4>
        <div class="menuItem">
            <h5>Light Mode</h5>
            <p></p>
        </div>
        <div class="menuItem">
            <h5>Dark Mode</h5>
            <p><span class="material-symbols-outlined">
                    check
                </span></p>
        </div>
        <h4>Display preference</h4>
        <div class="menuItem">
            <h5>Language</h5>
            <p>English</p>
        </div>
        <div class="menuItem center">
            <h5>Logout</h5>
        </div>
        <div class="menuItem center">
            <h5>Delete Account</h5>
        </div>
    </div>
</template>

<style scoped>
.container {
    height: 100vh;
    overflow: hidden;
    overflow-y: scroll;
    scroll-behavior: smooth;
}

.container::-webkit-scrollbar {
    display: none;
}

h4 {
    text-transform: uppercase;
    padding: 14px;
    margin-top: 5px;
}

.menuItem {
    width: 100%;
    padding: 14px;
    background-color: white;
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    align-items: center;
    border: 0.05px solid #80808063;
    cursor: pointer;
}

.menuItem h5 {
    font-weight: normal;
    font-size: 16px;
}

.menuItem p {
    display: flex;
    justify-content: center;
    align-items: center;
}

.menuItem p span {
    color: #e56b6b;
}

.menuItem.center {
    justify-content: center;
    margin: 25px auto;
}
</style>