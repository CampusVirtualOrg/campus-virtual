<script setup>
import { Head } from '@inertiajs/vue3';
import Aside from '@/Components/Aside.vue';
import Card from '@/Components/Card.vue';
import Header from '@/Components/Header.vue';

</script>


<template>
    <Head title="Paniel Administrador" />

    <main class="mainAdmin">
            <div class="aside">
                <Aside />
            </div>

        <section>
            <Header />

            <div class="content">
                <Card
                    title="Cursos"
                    description="Veja todos os cursos"
                    route=""
                    icon="bi bi-c-square-fill"
                />

                <Card
                    title="Turmas"
                    description="Veja todas as turmas"
                    route=""
                    icon="bi bi-book-half"
                />

                <Card
                    title="Disciplinas"
                    description="Veja todas as disciplinas"
                    route=""
                    icon="bi bi-file-earmark-text-fill"
                />

                <Card
                    title="Alunos"
                    description="Veja aqui tudo sobre alunos"
                    route=""
                    icon="bi bi-people-fill"
                />

                <Card
                    title="Requerimentos"
                    description="Veja os requerimentos"
                    route=""
                    icon="bi bi-file-earmark-text-fill"
                />
            </div>
        </section>
    </main>
</template>

<style scoped>
.mainAdmin {
    display: flex;
}

.content {
    display: flex;
    width: 100%;
    gap: 1rem;
    padding: 2rem;
    flex-wrap: wrap;
}

section {
    display: flex;
    gap: 2rem;
    flex-direction: column;
}

.buttonbox {
    width: 450px;
    height: 150px;
    flex-shrink: 0;
    background: #3065AC;
    box-shadow: 0px 1px 0px 0px rgba(0, 0, 0, 0.30), 0px 0px 1px 0px rgba(0, 0, 0, 0.15);
    color: #F7F2FA;
    border-radius: 25px;
    font-size: larger;
}
</style>
