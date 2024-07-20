<script setup>
defineProps({
    services: Array
});
</script>
<template>
    <div>
        <h1>Services Page</h1>
        <!--  itterate over the services array -->
        <!-- ['services' => ['Web Development', 'Mobile Development', 'SEO']] -->
        <ul v-for="service in services" :key="service">
            <li>{{ service }}</li>
        </ul>
    </div>
</template>