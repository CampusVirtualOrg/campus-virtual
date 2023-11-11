<script setup>
import HeaderAluno from '@/Components/HeaderAluno.vue';
import Button from '@/Components/Button.vue';

defineProps({ user: Object })
</script>

<template>
    <header>
        <HeaderAluno :nome="user.name"/>
    </header>

    <section>
        <Button
            title="Avisos"
            description="Veja e publique seus avisos mais recentes!"
            route=""
            icon="bi bi-app-indicator"
        />

        <Button
            title="Disciplina"
            description="Veja quais turmas você está!"
            route=""
            icon="bi bi-layout-text-window"
        />

        <Button
            title="Boletim"
            description="Publique as notas dos seus alunos!"
            route=""
            icon="bi bi-receipt"
        />

        <Button
            title="Registro"
            description="Seus registros estão aqui!"
            route=""
            icon="bi bi-check-square"
        />

        <Button
            title="Requerimentos"
            description="Faça seus requerimentos pro bloco administrativo!"
            route="requerimento"
            icon="bi bi-pencil-square"
        />
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
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 1rem;
  margin-top: 1rem;
}
</style>

<!-- <script setup>
import HeaderAluno from '@/Components/HeaderAluno.vue';
import Button from '@/Components/Button.vue';
import AsideProf from '@/Components/AsideProf.vue';

defineProps({ user: Object })
</script>

<template>
    <main class="mainAdmin">
            <div class="aside">
                <AsideProf :nome="user.name"/>
            </div>

        <section>
            <HeaderAluno :nome="user.name"/>

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
</style> -->
