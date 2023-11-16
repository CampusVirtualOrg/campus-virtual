<script setup>


defineProps({ post: Object });
</script>

<template>
  <header>
    <a href="aviso/create">criar aviso</a>
  </header>
  <section>
    <div class="container-post" v-for="(item, i) in post" :key="i">
    <div class="imagen">
		<a :href="'aviso'+'/'+item['id']"><img :src="'assets/img/' + item['url']" alt="img" /></a>
	</div>
     <div class="text">
		<button hidden>{{item['id']}}</button>
		<h1>{{ item["titulo"] }}</h1>
		<h2>{{ item["subtitulo"] }}</h2>
		<p>{{ item["descr"] }}</p>

	 </div>
    </div>
  </section>
</template>

<style scoped>

section {
  display: flex;
  flex-direction: row;
  flex-wrap: wrap;
  align-items: center;
  justify-content: space-evenly;
  height: 100%;
  width: 100vw;
background-color: white;
  gap: 30px;

}

.imagen{

	height: 300px;
	width: 300px;


}
h1{
	font-size: 32px;
	font-weight: 800;


}
h2{
	font-size: 24px;
	font-weight: 200;

}
p{
	font-size: 16px;

}
.text{
	display: flex;
	flex-direction: column;
	align-items: center;
}


.container-post {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
gap: 10px;
  width: 400px;
}
</style>
