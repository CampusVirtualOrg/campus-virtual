<script setup>
import Notificações from '@/Components/Notificacoes.vue';
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <div class="header-left">
        <img src="/assets/users/caio.png" alt='Imagem do perfil' class='img-perfil' />
        <div class="ml-5">
            <p>Olá, <span class='user_name'>Caio</span></p>
        </div>
    </div>


    <div class="box">
        <form name="search">
            <input type="text" class="input" name="txt" />
        </form>
        <i class="bi bi-search"></i>
    </div>

    <Notificações />

    <!-- <Link :href="route('login')">
        <i class="bi bi-box-arrow-left fs-1"></i>
    </Link> -->
    <div class="select-wrapper"></div>

</template>

<style scoped>
.header-left {
  display: flex;
  align-items: center;
  margin-left: 5%;
}

.box {
  position: relative;
}
.img-perfil {
  border-radius: 50%;
  width: 4.5rem;
  height: 4.5rem;
  object-fit: cover;
  border: 1px solid #c2c2c2;
  cursor: pointer;
}

.user_name {
  color: #3065ac;
  font-weight: 900;
}

.input {
  padding: 10px;
  width: 70px;
  height: 40px;
  background: none;
  border: 2px solid #3065ac;
  border-radius: 50px;
  box-sizing: border-box;
  font-family: Comic Sans MS;
  font-size: 20px;
  color: #000000;
  outline: none;
  transition: 0.6s;
}

i {
  padding: 5px;
  font-size: 25px;
  color: #000;
  cursor: pointer;
}

i:hover {
  color: #555555;
}

.box:hover input {
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

i {
  padding: 5px;
  font-size: 25px;
  color: #000;
  cursor: pointer;
}

i:hover {
  color: #555555;
}

.bi-caret-down {
  font-size: 30px;
}

.select-wrapper {
  position: absolute;
  top: 100%;
  left: 0;
  display: none;
  text-align: center;
}

</style>
