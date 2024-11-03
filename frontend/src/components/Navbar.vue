<template>
    <nav class="main-nav">
        <a href="">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTF5-3YjBcXTqKUlOAeUUtuOLKgQSma2wGG1g&s"
                alt="profile">
            <h4>John</h4>
        </a>
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