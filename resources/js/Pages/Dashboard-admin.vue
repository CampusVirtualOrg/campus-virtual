<script setup>
import { Head } from '@inertiajs/vue3';
import Aside from '@/Components/Aside.vue';
import Card from '@/Components/Card.vue';
import Header from '@/Components/Header.vue';

</script>


<template>
    <main class="mainAdmin">

        <Head title="Paniel Administrador" />
            <div class="aside">
                <Aside />
            </div>

        <section>
            <Header />
            <div class="content">
                <!-- Passar atributos dos componentes -->
                <Card />
                <Card />
                <Card />
                <Card />
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
