<script setup>
import { Link } from '@inertiajs/vue3';

// const props = defineProps({
//     route: String,
// })
</script>

<template>
  <div class="header-section">

    <div class="perfil">
      <span style="color: #3065ac; font-weight: 700; font-size: 16pt;" class="mx-3">Painel Administrativo</span>
    </div>

    <div class="create">
      <!-- <Link :href="route">Cadastrar Usuario</Link> -->
    </div>

    <div class="box">
      <form name="search">
        <input type="text" class="input" name="txt" />
        <i class="bi bi-search"></i>
      </form>
    </div>

    <div class="buttons">
      <i class="bi bi-bell-fill"></i>
      <i class="bi bi-caret-down-square-fill"></i>
      <Link :href="route('logout')" method="post" as="button">
      <i class="bi bi-door-open-fill"></i>
      </Link>
    </div>
  </div>
</template>

<style scoped>
.header-section {
  @import url('https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap');
  font-family: 'Inter', sans-serif;
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-top: 1rem;
  padding: 0rem 1rem;
}

.perfil {
  display: flex;
  justify-content: center;
  align-items: center;
  font-size: 15pt;
}

.perfil img {
  width: 3rem;
  border-radius: 50%;
  background-color: #3065ac;
}

.box {
  position: relative;
}

.box .input {
  padding: 10px;
  width: 70px;
  height: 40px;
  background: none;
  border: 2px solid #3065ac;
  border-radius: 50px;
  box-sizing: border-box;
  font-weight: 400;
  font-size: 12pt;
  color: #000000;
  outline: none;
  transition: 0.6s;
}

.box:hover input {
  width: 350px;
  background: #ffffff;
  border-radius: 10px;
}

.box input:focus {
  width: 350px;
  background: #ffffff;
  border-radius: 10px;
}

.box i {
  position: absolute;
  top: 50%;
  right: 15px;
  transform: translate(-50%, -50%);
  font-size: 20px;
  color: #3065ac;
  transition: 0.2s;
}

.box:hover i {
  opacity: 0;
  z-index: -1;
}

.buttons {
  display: flex;
  gap: 1rem;
}

.buttons i {
  font-size: 18pt;
  color: #3065ac;
}
</style>
