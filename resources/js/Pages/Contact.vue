<script setup>
defineProps({
    email: String,
    default: 'm@gmail.com'
});
</script>
<template>
    <div>
        <h1>Contact Page</h1>
        <p>Email: {{ email }}</p>
        <p>follow us : <a href="https://www.facebook.com/">Facebook</a></p>
    </div>
</template>