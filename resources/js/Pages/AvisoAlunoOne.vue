<script setup>


defineProps({ post: Object });
</script>

<template>
  <header>

  </header>
  <section>
    <div class="container-post" v-for="(item, i) in post" :key="i">
    <div class="imagen">
		<img :src="'/assets/img/' + item['url']" alt="img" />
	</div>
     <div class="text">
		<button hidden>{{item['id']}}</button>
		<h1>{{ item["titulo"] }}</h1>
		<h2>{{ item["subtitulo"] }}</h2>
		<p>{{ item["descr"] }}</p>
		<a :href="'editar/'+item['id']">editar</a>
		<a :href="'remove/'+item['id']">deletar</a>

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

}


a{
	color: black;
	text-decoration: underline;
	text-transform: uppercase;
}
h1{
	font-size: 40px;
	font-weight: 800;


}
h2{
	font-size: 30px;
	font-weight: 200;

}
p{
	font-size: 20px;

}
.text{
	display: flex;
	flex-direction: column;

}


.container-post {
  display: flex;
  flex-direction: row;
  align-items: center;
  justify-content: center;
gap: 10px;
  width: 100%;
}
</style>
