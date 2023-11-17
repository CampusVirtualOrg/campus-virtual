<script setup>

import HeaderAluno from "@/Components/HeaderAluno.vue";
defineProps({ post: Object, user: Object });

</script>

<template>
  <header>
    <HeaderAluno :nome="user.name" />
  </header>
  <section>
    <div class="section-left">
      <a href="/aviso/create/view" class="buttonCriar"><span style="font-size: 24pt;">+</span>CRIAR POSTAGEM</a>
    </div>
    <div class="section-rigth">

      <a :href="'aviso' + '/' + item['id']" class="container-post" v-for="(item, i) in post" :key="i">
        <div class="text">
          <button hidden>{{ item['id'] }}</button>
          <h1>{{ item["titulo"] }}</h1>
          <h2>{{ item["subtitulo"] }}</h2>

          <div class="imagem" v-if="item.img != ''">
            <img :src="'assets/img/' + item['url']" alt="img" />
          </div>

          <p>{{ item["descr"] }}</p>
        </div>
      </a>
    </div>
  </section>
</template>

<style scoped>
header {
  display: flex;
  align-items: center;
  width: 100vw;
  justify-content: space-between;
  position: relative;
  top: 0;
  margin-top: 1rem;
}

section {
  @import url('https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap');
  font-family: 'Inter', sans-serif;
  display: grid;
  grid-template-columns: 20% 70%;
  align-items: center;
  gap: 1rem;
  margin-top: 1rem;
  margin: 1rem 4.5rem;
  height: 100%;
}

.section-left {
  align-self: start;
  display: flex;
  align-items: start;
  justify-content: start;
}

.buttonCriar {
  background-color: #3065ac;
  padding: 0.4rem 2rem;
  color: #fff;
  display: flex;
  align-items: center;
  gap: 0.4rem;
  font-weight: 600;
  border-radius: 50px;
}

.section-left a {
  width: 15rem;
}

.section-rigth {
  min-height: 80vh;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  gap: 1rem;
}


.container-post {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: start;
  width: 80%;
  height: auto;
  background-color: #fff;
  border: 2px solid #dfdfdf;
  border-radius: 8px;
  padding: 1rem 2rem;
}

.imagem img {
  max-width: 40%;
  max-height: 100%;
  margin: 1rem 0rem;
}

.text {
  display: flex;
  flex-direction: column;
  align-items: start;
  text-align: start;
}

.text h1 {
  font-size: 18pt;
  font-weight: 800;
  color: #3065ac;
}

.text h2 {
  font-size: 14pt;
  font-weight: 500;
  color: #252627;
}

.text p {
  font-size: 12pt;
  font-weight: 400;
  color: 252627;
}
</style>
