<template>
    <input type="text" id="barra-pesquisa">
        <div class="opt">
            <button class="opt-buttons menu"></button>
            <button class="opt-buttons settings"></button>
            <button class="opt-buttons perfil"></button>
        </div>
</template>

<style scoped>
#barra-pesquisa {
    border: none;
    width: 50%;
    padding: 0.6rem;
    font-size: 16px;
    background-color: #f4f4f4;
    border-radius: 20px;
}

#barra-pesquisa:focus {
    border: 2px solid var(--main-blue);
    outline: none;
}
</style>
