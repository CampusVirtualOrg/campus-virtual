<script setup>
import HeaderAluno from '@/Components/HeaderAluno.vue';
import Button from '@/Components/Button.vue';
import AsideProf from '@/Components/AsideProf.vue';
</script>

<template>
    <main class="mainAdmin">
            <div class="aside">
                <AsideProf />
            </div>

        <section>
            <HeaderAluno />

            <div class="content"></div>

        </section>
    </main>
</template>

<style scoped>
header {
  display: flex;
  align-items: center;
  width: 100vw;
  height: 120px;
  justify-content: space-between;
}

section {
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 1rem;
  margin-top: 2rem;
}
</style>
