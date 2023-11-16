<script setup>
import { Head, Link } from "@inertiajs/vue3";

defineProps({ post: Object });
</script>

<template>
  <header>
    <a href="aviso/create">criar aviso</a>
  </header>
  <section>
    <div class="container-post" v-for="(item, i) in post" :key="i">
    <div class="imagen">
		<img @src="item['url']" alt="img" />
	</div>
      <h1>{{ item["titulo"] }}</h1>
      <h2>{{ item["subtitulo"] }}</h2>
      <p>{{ item["descr"] }}</p>
    </div>
  </section>
</template>

<style scoped>
section {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: space-evenly;
  height: 100vh;
  width: 100vw;
}

.imagen{
	height: 100px;
	width: 100%;
	overflow: hidden;
	background-size: cover;
}


.container-post {
  display: flex;
  flex-direction: column;
  align-items: center;
  width: 100%;
}
</style>
