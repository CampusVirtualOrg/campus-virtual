<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';
import { render } from 'vue';

const props = defineProps(['requerimento']);

const form = useForm({
    usuario_id: props.requerimento.usuario_id,
    nome_usuario: props.requerimento.nome_usuario,
    email_usuario: props.requerimento.email_usuario,
    matricula_usuario: props.requerimento.matricula_usuario || "nada",
    tipo_requerimento: props.requerimento.tipo_requerimento,
    observacoes: props.requerimento.observacoes,
    status: props.requerimento.status,
});

const submit = () => {
    const id = props.requerimento.id;

    form.post(`/requerimentos/edit/${id}`, {
        onFinish: () => alert("Requerimento Editado com Sucesso!!!"),
    }).then(response => {
        // Lógica para lidar com a resposta após a edição do requerimento
        console.log(response.data); // A resposta do servidor após a edição
        // Redirecionamento ou atualização da interface após a edição
    }).catch(error => {
        // Lógica para lidar com erros, se houver algum
        console.error(error); // Mostra o erro no console
        alert("Houve um erro ao enviar o requerimento.");
    });
};
</script>

<template>
    <GuestLayout>

        <Head title="Enviar Requerimento" />
        <form @submit.prevent="submit">
            <div hidden>
                <TextInput id="usuario_id" type="number" class="mt-1 block w-full" v-model="form.usuario_id" required
                    autofocus />

                <InputError class="mt-2" :message="form.errors.name" />
            </div>

            <div class="mt-4" hidden>
                <InputLabel for="nome" value="Nome" />

                <TextInput id="nome" type="text" class="mt-1 block w-full" v-model="form.nome_usuario" required readonly />

                <InputError class="mt-2" :message="form.errors.password" />
            </div>

            <div class="mt-4" hidden>
                <InputLabel for="email" value="Email" />

                <TextInput id="email" type="email" class="mt-1 block w-full" v-model="form.email_usuario" required
                    readonly />

                <InputError class="mt-2" :message="form.errors.email" />
            </div>

            <!-- MATRICULA TA NULL POR ENQUANTO -->

            <div class="mt-4" hidden>
                <InputLabel for="matricula_usuario" value="Matricula do Usuario"/>

                <TextInput id="matricula_usuario" type="text" class="mt-1 block w-full" v-model="form.matricula_usuario"
                    required :value="form.matricula_usuario" />

                <InputError class="mt-2" :message="form.errors.email" />
            </div>

            <!-- SEGUE O FLUXO -->

            <div class="mt-4" hidden>
                <InputLabel for="tipo" value="Tipo do Requerimento" />

                <TextInput id="tipo" type="text" class="mt-1 block w-full" v-model="form.tipo_requerimento" required
                    :value="requerimento.tipo_requerimento" />

                <InputError class="mt-2" :message="form.errors.email" />
            </div>


            <div class="mt-4" hidden>
                <InputLabel for="observacoes" value="Observações do requerimento" />
                
                <TextInput id="observacoes" type="text" class="mt-1 block w-full" v-model="form.observacoes" required
                :value="requerimento.observacoes" />
                
                <InputError class="mt-2" :message="form.errors.email" />
            </div>
            
            <div class="mt-4">
                <InputLabel for="status" value="Status do Requerimento" />
                <select name="status" id="status" v-model="form.status">
                    <option value="Pendente">Pendente</option>
                    <option value="Aceito">Aceito</option>
                    <option value="Recusado">Recusado</option>
                </select>
                <InputError class="mt-2" :message="form.errors.email" />
            </div>

            <div class="flex items-center justify-end mt-4">

                <PrimaryButton class="ml-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    Enviar
                </PrimaryButton>
            </div>
        </form>
</GuestLayout></template>
