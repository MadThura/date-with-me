<script setup>
import Aside from '@/components/Aside.vue';
import Main from '@/components/Main.vue'
import ProfileCard from '@/components/ProfileCard.vue';
import AccountSetting from '@/components/AccountSetting.vue';

</script>

<template>
    <Aside>
        <AccountSetting></AccountSetting>
    </Aside>
    <Main>
        <ProfileCard></ProfileCard>
    </Main>  
</template>
