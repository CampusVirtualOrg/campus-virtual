<script setup>
import Notificações from '@/Components/Notificacoes.vue'
</script>

<template>
    <div class="header-left">
        <img src="#" alt='Imagem do perfil' class='img-perfil' />
        <div>
            <p>Olá, <span class='user_name'>Usuario</span></p>
        </div>
    </div>

    <Notificações />

    <div class="box">
      <form name="search">
        <input type="text" class="input" name="txt" />
      </form>
      <i class="bi bi-search"></i>
    </div>

    <button class="button-select">
        <i class="bi bi-caret-down"></i>
    </button>

    <a href="#"><i class="bi bi-box-arrow-left fs-1"></i></a>
    <div class="select-wrapper"></div>
</template>

<style scoped>

</style>
