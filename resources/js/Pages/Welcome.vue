<script setup>
import HeaderHome from '@/Components/HeaderHome.vue';
import Carousel from '@/Components/Carousel.vue';
import { Head, Link } from '@inertiajs/vue3';

</script>

<template>
  <main>
    <Head title="Welcome" />
    <header>
      <HeaderHome />
    </header>
    <div class="mainLanding">
      <section class="content">
        <h1>Campus Virtual</h1>
        <div class="subtitle">
          <h3>Ajudando estudantes a</h3>
          <h2>Gerenciar seus estudos</h2>
        </div>
        <p>
          Bem vindo ao Campus Virtual, um site que irá lhe ajudar a gerenciar
          os estudos!
        </p>
          <Link :href="route('login')" id="Button-body-Enter" class="entrar">Entrar</Link>
      </section>
      <Carousel />
    </div>
  </main>
</template>

<style scoped>
* {
  @import url('https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap');
  font-family: 'Inter', sans-serif;
}

main {
  margin-left: 4rem;
  margin-right: 4rem;
}

.mainLanding {
  height: 60vh;
  display: flex;
  flex-direction: row;
  justify-content: center;
  align-items: center;
  gap: 4rem;
  margin-top: 2rem;
}

header {
  width: 100%;
  height: 6rem;
  display: flex;
  justify-content: space-between;
  align-items: center;
  overflow-x: none;
}

.content {
  display: grid;
  width: 100%;
}

h1 {
  font-size: 42pt;
  font-weight: 700;
  color: var(--main-blue);
}

h3 {
  font-size: 30pt;
  font-weight: 500;
  color: var(--mid-black);
}

h2 {
  font-size: 32pt;
  color: var(--mid-black);
}

p {
  font-size: 18pt;
  margin-top: 1rem;
  max-width: 24rem;
}


.subtitle {
  line-height: 2.4rem;
}

.entrar {
  background-color: var(--main-blue);
  text-align: center;
  font-size: 18pt;
  font-weight: 600;
  color: var(--white);
  border-radius: 6px;
  border: none;
  padding: 0.6rem;
  width: 12rem;
  margin-top: 1rem;
  margin-bottom: 1rem;
  transition: all 0.2s;
}

.entrar:hover {
  background-color: #1d1d96;
  -webkit-transform: translateY(-7px);
  -moz-transform: translateY(-7px);
  -ms-transform: translateY(-7px);
  -o-transform: translateY(-7px);
  transform: translateY(-7px);
  border: none;
  cursor: pointer;
}
</style>
