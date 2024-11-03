<template>
    <div class="msgsBox">
        <div>
            <span class="material-symbols-outlined">
                all_match
            </span>
        </div>
        <h1>Start Matching</h1>
        <p>Matches will appear here once you start to Like people. You can message them directly from here when you’re
            ready to spark up the conversation.</p>
    </div>
</template>

<style>
.msgsBox {
    height: 100vh;
    display: flex;
    align-items: center;
    flex-direction: column;
    padding: 50px 20px;
}

.msgsBox .material-symbols-outlined {
    font-size: 100px;
}

.msgsBox p {
    margin-top: 10px;
    text-align: center;
}
</style>