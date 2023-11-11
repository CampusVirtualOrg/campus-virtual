<script setup>
import { Link } from '@inertiajs/vue3';
import Logo from '@/Components/Logo.vue';

const props = defineProps({
    nome: String,
    imagem: String
})
</script>

<template>
    <aside>

        <div class="perfil" v-if="imagem">
            <img :src="imagem" alt="" class="img-perfil mx-2" />
            <p class="text-white">Olá, <span style="color: white; font-weight: 600;">{{ nome }}</span></p>
        </div>
        <div class="perfil" v-else>
            <img src="../../../public/assets/img/perfil-default.png" alt="" class="img-perfil mx-2" />
            <p class="text-white">Olá, <span style="color: white; font-weight: 600;">{{ nome }}</span></p>
        </div>


        <div class="anchors">
            <Link :href="route('usuarios')" class="a-asclasse"><i class="bi bi-people-fill"></i>Alunos</Link>

            <Link :href="route('dashboardRequerimentos')" class="a-asclasse"><i
                class="bi bi-file-earmark-text-fill"></i>Requerimentos</Link>

            <Link :href="route('turmas')" class="a-asclasse"><i class="bi bi-easel2-fill"></i>Turmas</Link>

            <Link :href="route('disciplinas')" class="a-asclasse"><i class="bi bi-book-half"></i>Disciplinas</Link>

            <Link :href="route('cursos')" class="a-asclasse"><i class="bi bi-c-square-fill"></i>Cursos</Link>

            <Link :href="route('welcome')" class="logoAsclasse">
                <Logo />
            </Link>
        </div>
    </aside>
</template>

<style scoped>
aside {
    display: inline-block;
    flex-direction: column;
    gap: 4rem;
    padding: 1rem;
    background-color: #3065ac;
    height: 100vh;
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap');
    font-family: 'Inter', sans-serif;
}

.header-asclasse {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-decoration: none;
    line-height: 1;
    color: var(--white);
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

.h2-asclasse {
    color: #140D4F;
    font-size: 16pt;
    font-weight: 600;
}

.h3-asclasse {
    font-size: 20pt;
    font-weight: 700;
}

.anchors {
    display: flex;
    flex-direction: column;
    gap: 0.5rem;
    padding: 1rem;
    margin-top: 2rem;
    display: flex;
    align-items: center;
    font-size: 16pt;
    font-weight: 500;
}

.a-asclasse {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    text-decoration: none;
    color: var(--white);
    padding: 0.5rem;
    padding-left: 1rem;
    border-radius: 0 2rem 2rem 0;
    transition: 0.3s;
}

.logoAsclasse {
    width: 30%;
    margin-top: 20%;
}
</style>
