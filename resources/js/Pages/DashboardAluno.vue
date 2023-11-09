<script setup>
import HeaderAluno from '@/Components/HeaderAluno.vue';
import Button from '@/Components/Button.vue';
</script>

<template>
    <header>
        <HeaderAluno />
    </header>

    <section>
        <Button
            title="Avisos"
            description="Veja aqui os avisos mais recentes publicados pelos professores."
            route=""
            icon="bi bi-app-indicator img-section"
        />

        <Button
            title="Disciplina"
            description="Aqui estão notas de atividades, trabalhos e etc."
            route=""
            icon="bi bi-layout-text-window img-section"
        />

        <Button
            title="Boletim"
            description="Notas e faltas do semestre aparecerão aqui."
            route=""
            icon="bi bi-layout-text-window img-section"
        />

        <Button
            title="Registro"
            description="Seus registros estão aqui."
            route=""
            icon="bi bi-layout-text-window img-section"
        />

        <Button
            title="Requerimentos"
            description="Faça seus requerimentos pro bloco administrativo."
            route=""
            icon="bi bi-layout-text-window img-section"
        />
    </section>

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
