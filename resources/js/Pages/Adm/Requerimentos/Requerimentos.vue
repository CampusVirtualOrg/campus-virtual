<script setup>
import { Head, Link } from '@inertiajs/vue3';
import Aside from '@/Components/Aside.vue';
import Header from '@/Components/Header.vue';
import { RiEdit2Fill } from "oh-vue-icons/icons";

const props = defineProps({
    user: Object,
    requerimentos: Object
})

</script>


<template>
    <Head title="Paniel Administrador" />

    <main class="mainAdmin">
        <Aside :nome="user.name" />

        <section>
            <Header />
            <div class="content">
                <div class="myTable">
                    <table class="styled-table">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Email</th>
                                <th>Matricula</th>
                                <th>Tipo</th>
                                <th>Observações</th>
                                <th>Status</th>
                                <!-- <th>Data</th> -->
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody  v-for="requerimento in requerimentos">
                            <tr>
                                <td>{{ requerimento.nome_usuario }}</td>
                                <td>{{ requerimento.email_usuario }}</td>
                                <td>{{ requerimento.matricula_usuario }}</td>
                                <td>{{ requerimento.tipo_requerimento }}</td>
                                <td>{{ requerimento.observacoes }}</td>
                                <td>{{ requerimento.status }}</td>
                                <!-- <td>{{ requerimento.created_at }}</td> -->
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
