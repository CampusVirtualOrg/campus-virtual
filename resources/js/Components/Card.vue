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
    <Link class="card" :href="route">
        <div class="head">
        <i :class="icon"></i>
        <span class="card-title">{{ title }}</span>
        </div>
        <div class="texts">
        <p>{{ description }}</p>
        </div>
    </Link>
</template>

<style scoped>
* {
  @import url('https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap');
  font-family: 'Inter', sans-serif;
}
.card {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: start;
  width: 280px;
  height: 100px;
  background-color: #f2f2f2;
  border: 1px solid #cccccc;
  border-radius: 12px;
  padding: 1rem;
}

.card .head {
  display: flex;
  align-items: center;
  gap: 0.4rem;
}

.card i {
  color: #3065ac;
  font-size: 26pt;
}

.card .card-title {
  font-size: 16pt;
  text-decoration: none;
  color: #3065ac;
  font-weight: 600;
}
.card .texts {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: start;
  height: 120px;
  font-weight: 500;
  font-size: 14pt;
  color: #252627;
}


.card p {
  font-size: 12pt;
}
</style>
