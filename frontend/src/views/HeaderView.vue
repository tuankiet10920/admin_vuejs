<script setup>
import { RouterLink } from 'vue-router'

</script>

<template>
    <header>
        <RouterLink to="/">Home</RouterLink>
        <RouterLink to="/about">About</RouterLink>
    </header>
</template>

<style scoped>
header{
    width: 100%;
}
</style>