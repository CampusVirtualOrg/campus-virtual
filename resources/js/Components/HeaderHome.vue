<script setup>
import { Head, Link } from '@inertiajs/vue3';
</script>
<template>
    <a href="/">
        <img src="assets/img/portal.png" alt="Logo Campus Virtual">
    </a>
    <div class="options">
        <ul>
            <li><a href="">Ajuda</a></li>
            <li><a href="">Sobre nós</a></li>
            <li><a href="">Contato</a></li>
        </ul>
    </div>
    <Link :href="route('login')" id="Button-body-Enter" class="entrarHeader">Entrar</Link>
</template>

<style scoped>
img {
    width: 5rem;
}

ul {
    display: flex;
    gap: 2rem;
    list-style: none;
}

a {
    text-decoration: none;
    font-weight: 500;
    font-size: 15pt;
    color: var(--main-blue);
}

.options {
    display: flex;
    align-items: center;
    justify-content: right;
    gap: 2rem;
}

.entrarHeader {
    background: none;
    text-align: center;
    font-size: 16pt;
    font-weight: 600;
    color: var(--main-blue);
    border-radius: 6px;
    border: 2px solid var(--main-blue);
    padding: 0.6rem;
    width: 10rem;
    margin-top: 1rem;
    margin-bottom: 1rem;
    transition: all 0.2s;
}

.entrarHeader:hover {
    color: var(--white);
    background-color: var(--main-blue);
    cursor: pointer;
}
</style>
