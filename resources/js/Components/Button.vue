<script setup>
import { Link } from '@inertiajs/vue3';
import { defineProps } from 'vue';


const props = defineProps({
    title: String,
    description: String,
    route: String,
    icon: String,
});

</script>

<template>
    <button class="button-section">
        <i :class="icon"></i>
        <Link :href="route">
        <p class="text-slate-700">
            <span class="title">
                {{ title }}
            </span>
            {{ description }}
        </p>
        </Link>
    </button>
</template>

<style scoped>
.button-section {
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap');
    font-family: 'Inter', sans-serif;
    display: flex;
    align-items: center;
    width: 55%;
    padding: 0.8rem;
    cursor: pointer;
    border-radius: 12px;
    border: none;
    border: 2px #dfdfdf solid;
    background-color: #f9f9f9;
}

.button-section:hover {
    background-color: #e9e9e9;
}

p {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    margin-left: 10px;
    font-size: 16px;
    font-weight: 500;
}

.title {
    color: #3065ac;
    font-size: 25px;
    font-weight: 700;
}

i {
    font-size: 40px;
    color: #3065ac;
}
</style>

