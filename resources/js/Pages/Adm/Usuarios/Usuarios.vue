<script setup>
import { Head, Link } from '@inertiajs/vue3';
import Aside from '@/Components/Aside.vue';
import Card from '@/Components/Card.vue';
import Header from '@/Components/Header.vue';

defineProps({ user: Object, users: Object })

</script>


<template>
    <Head title="Paniel Administrador" />

    <main class="mainAdmin">
        <Aside :nome="user.name" />

        <section>
            <Header/>
            <div class="content">
                <div class="myTable">
                    <table class="styled-table">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Email</th>
                                <th>Tipo</th>
                                <!-- <th>Matricula</th> -->
                                <th>Telefone</th>
                                <th>CPF</th>
                                <th>Sexo</th>
                                <th>Data</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody v-for="usuario in users">
                            <tr>
                                <td>{{ usuario.name }}</td>
                                <td>{{ usuario.email }}</td>
                                <td>{{ usuario.tipo }}</td>
                                <!-- <td>{{ usuario.matricula }}</td> -->
                                <td>{{ usuario.telefone }}</td>
                                <td>{{ usuario.cpf }}</td>
                                <td>{{ usuario.sexo }}</td>
                                <td>{{ usuario.data_nasc }}</td>
                                <td><a href="/requerimentos/edit/{id}">E</a><a href="/requerimentos/remove/{id}">D</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </main>
</template>

<style scoped>
.mainAdmin {
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap');
    font-family: 'Inter', sans-serif;
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
    width: 100%;
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


table {
    width: 75vw;
    border: 1px solid #000;
    border-collapse: collapse;
}

tr,
td,
th {
    border: 1px solid black;
    text-align: center;
    padding: 0.4rem;
}

th {
    padding: 0.6rem;
    background-color: #3065ac;
    color: #ffffff;
    font-size: 14pt;
}
</style>
