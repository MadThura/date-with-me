<script></script>

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
h4 {
    text-transform: uppercase;
    padding: 14px;
}

.menuItem {
    width: 100%;
    padding: 14px;
    background-color: white;
    display: flex;
    justify-content: space-between;
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