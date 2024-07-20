<script setup>
defineProps({
    name: String,
    age: Number,
    location: {
        type: String,
        default: 'India'
    },
    sex: {
        type: String,
        required: true
    }
});
</script>
<template>
    <div>
        <h1>About Page - {{ name }} - {{ age }}
         - {{ location }} -{{ sex }}
        </h1>
    </div>
</template>