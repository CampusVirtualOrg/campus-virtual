<template>
	<div>
	  <form action="/enviaraviso" method="post">
		<!-- Inclua o token CSRF -->
		<input type="hidden" name="_token" :value="csrfToken">

		<label for="titulo">Título:</label>
		<input v-model="formData.titulo" type="text" id="titulo" name="titulo" required>

		<label for="subtitulo">Subtítulo:</label>
		<input v-model="formData.subtitulo" type="text" id="subtitulo" name="subtitulo" required>

		<label for="descr">Descrição:</label>
		<textarea v-model="formData.descr" id="descr" name="descr" required></textarea>

		<label for="url">URL:</label>
		<input v-model="formData.url" type="text" id="url" name="url" required>

		<button type="submit">Enviar</button>
	  </form>
	</div>
  </template>

  <script>
  export default {
	data() {
	  return {
		formData: {
		  titulo: '',
		  subtitulo: '',
		  descr: '',
		  url: ''
		},
		csrfToken: ''
	  };
	},
	mounted() {
	  // Recupere o token CSRF do cabeçalho da página
	  this.csrfToken = document.head.querySelector('meta[name="csrf-token"]').content;
	},
	methods: {
	  handleSubmit() {
		fetch('aviso/store', {
		  method: 'POST',
		  headers: {
			'Content-Type': 'application/json',
			'X-CSRF-TOKEN': this.csrfToken
		  },
		  body: JSON.stringify(this.formData)
		})
		.then(response => response.json())
		.then(data => {
		  console.log(data);
		  // Adicione lógica adicional aqui conforme necessário
		})
		.catch(error => {
		  console.error('Erro ao enviar dados:', error);
		});
	  }
	}
  };
  </script>
