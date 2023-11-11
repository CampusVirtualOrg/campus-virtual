<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';
import { render } from 'vue';

const props = defineProps(['user']);

const form = useForm({
    usuario_id: props.user.id,
    nome_usuario: props.user.name,
    email_usuario: props.user.email,
    matricula_usuario: props.user.matricula || "nada",
    tipo_requerimento: '',
    observacoes: '',
    status: "Pendente",
});

const submit = () => {
    form.post(route('enviarRequerimento'), {
        onFinish: () => alert("Requerimento Enviado com Sucesso!!!"),
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

            <div class="mt-4">
                <InputLabel for="nome" value="Nome" />

                <TextInput id="nome" type="text" class="mt-1 block w-full" v-model="form.nome_usuario" required readonly/>

                <InputError class="mt-2" :message="form.errors.password" />
            </div>

            <div class="mt-4">
                <InputLabel for="email" value="Email" />

                <TextInput id="email" type="email" class="mt-1 block w-full" v-model="form.email_usuario" required readonly />

                <InputError class="mt-2" :message="form.errors.email" />
            </div>

            <!-- MATRICULA TA NULL POR ENQUANTO -->

            <div class="mt-4" v-if="user.matricula == null" hidden>
                <InputLabel for="matricula_usuario" value="Matricula" />

                <TextInput id="matricula_usuario" type="text" class="mt-1 block w-full" v-model="form.matricula_usuario"
                    required />

                <InputError class="mt-2" :message="form.errors.email" />
            </div>

            <div class="mt-4" v-else>
                <InputLabel for="matricula_usuario" value="matricula_usuario" hidden />

                <TextInput id="matricula_usuario" type="text" class="mt-1 block w-full" v-model="form.matricula_usuario"
                    required :value="user.matricula" />

                <InputError class="mt-2" :message="form.errors.email" />
            </div>

            <!-- SEGUE O FLUXO -->

            <div class="mt-4">
                <InputLabel for="tipo" value="Tipo do Requerimento" />

                <select id="tipo" class="mt-1 block w-full" v-model="form.tipo_requerimento" required>
                    <option value="Admissão por Transferência e Análise Curricular">Admissão por Transferência e Análise
                        Curricular</option>
                    <option value="Ajuste de Matrícula Semestral">Ajuste de Matrícula Semestral</option>
                    <option value="Autorização para cursar disciplinas em outras Instituições de Ensino Superior">
                        Autorização para cursar disciplinas em outras Instituições de Ensino Superior</option>
                    <option value="Cancelamento de Matrícula">Cancelamento de Matrícula</option>
                    <option value="Cancelamento de Disciplina">Cancelamento de Disciplina</option>
                    <option value="Certificado de Conclusão">Certificado de Conclusão</option>
                    <option value="Certidão - Autencidade">Certidão - Autencidade</option>
                    <option value="Complementação de Matrícula">Complementação de Matrícula</option>
                    <option value="Cópia Xerox de Documento">Cópia Xerox de Documento</option>
                    <option value="Declaração de Colação de Grau e Tramitação de Diploma">Declaração de Colação de Grau e
                        Tramitação de Diploma</option>
                    <option value="Declaração de Matrícula ou Matrícula Vínculo">Declaração de Matrícula ou Matrícula
                        Vínculo</option>
                    <option value="Declaração de Monitoria">Declaração de Monitoria</option>
                    <option value="Declaração para Estágio">Declaração para Estágio</option>
                    <option value="Diploma 1ºvia/2º">Diploma 1ºvia/2º</option>
                    <option value="Dispensa da prática de Educação Física">Dispensa da prática de Educação Física"</option>
                    <option value="Declaração Tramitação de Diploma">Declaração Tramitação de Diploma</option>
                    <option value="Ementa de disciplina">Ementa de disciplina</option>
                    <option value="Guia de Transferência">Guia de Transferência</option>
                    <option value="Histórico Escolar">Histórico Escolar</option>
                    <option value="Isenção de disciplinas cursadas">Isenção de disciplinas cursadas</option>
                    <option value="Justificativa de falta(s) ou prova 2º chamada">Justificativa de falta(s) ou prova 2º
                        chamada</option>
                    <option value="Matriz curricular">Matriz curricular</option>
                    <option value="Reabertura de Matrícula">Reabertura de Matrícula</option>
                    <option value="Reintegração para Cursar">Reintegração para Cursar</option>
                    <option value="Solicitação de Conselho de Classe">Solicitação de Conselho de Classe</option>
                    <option value="Trancamento de Matrícula">Trancamento de Matrícula</option>
                    <option value="Transferência de Turno">Transferência de Turno</option>
                    <option value="Lançamento de Nota">Lançamento de Nota</option>
                    <option value="Revisão de Nota">Revisão de Nota</option>
                    <option value="Revisão de Faltas">Revisão de Faltas</option>
                    <option value="Tempo de escolaridade">Tempo de escolaridade</option>
                    <option value="Outros">Outros</option>
                </select>


                <InputError class="mt-2" :message="form.errors.email" />
            </div>


            <div class="mt-4">
                <InputLabel for="observacoes" value="Observações do requerimento" />

                <TextInput id="observacoes" type="text" class="mt-1 block w-full" v-model="form.observacoes" required />

                <InputError class="mt-2" :message="form.errors.email" />
            </div>

            <div class="mt-4" hidden>
                <TextInput id="status" type="text" class="mt-1 block w-full" v-model="form.status" required
                    value="Pendente" />

                <InputError class="mt-2" :message="form.errors.email" />
            </div>

            <div class="flex items-center justify-end mt-4">

                <PrimaryButton class="ml-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    Enviar
                </PrimaryButton>
            </div>
        </form>
    </GuestLayout></template>
