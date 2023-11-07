<script>
import { Head, Link } from '@inertiajs/vue3';
</script>

<template>
    <section class="section">
        <div class="img-container">
            <a href="/">
                <img src="assets/img/portal.png" class="img-logo" alt="">
            </a>
        </div>

        <div class="login-form">
            <div class="login-box">
                <div class="form-group">
                    <input type="text" class="form-matricula" name="matricula" placeholder=" Matrícula ">
                    <input type="password" class="form-senha" name="senha" placeholder=" Senha ">
                    <a href="" class="esqueceu-senha"> Esqueceu sua senha? </a>
                </div>
                <a href="/admin">
                    <button type="submit" id="entrar-button"> Entrar </button>
                </a>
            </div>
        </div>

        <div class="sub-box">
            <span class="new-user">
                Novo Usuário? <a href="" class="click">Clique Aqui</a>
            </span>
        </div>
    </section>
</template>

<style>
.section {
    margin-top: 50px;
    display: flex;
    flex-direction: column;
    justify-items: center;
    align-items: center;
    font-family: 'Inter', sans-serif;
}

.img-container {
    display: flex;
    justify-content: center;
    align-items: center;
}

.img-logo {
    width: 6rem;
    height: 6rem;
    flex-shrink: 0;
    margin-top: 30%;
}

.login-form {
    width: 26rem;
    height: 16rem;
    margin-top: 4%;
    flex-shrink: 0;
    border-radius: 15px;
    background: #F7F2FA;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
}

.login-box {
    background: #F7F2FA;
}

.form-group {
    background: #F7F2FA;
}

.form-matricula, .form-senha {
    width: 80%;
    padding: 0.4rem;
    margin-bottom: 5%;

    outline: none;
    border: 1px solid var(--light-gray);
    border-radius: 10px;
    
    font-size: 18px;
    font-weight: 300;
    text-align: center;

    background: #ECE6F0;
    color: #485F7D;
}

.form-senha {
    margin-bottom: 3%;
}

.esqueceu-senha {
    width: 92%;
    color: var(--main-blue);
    font-size: 16px;
    font-weight: 500;
    background-color: #F7F2FA;
    display: flex;
    justify-content: end;
}

#entrar-button {
    width: 82%;
    padding: 0.4rem;

    outline: none;
    border: none;
    border-radius: 10px;

    flex-shrink: 0;
    margin-top: 5%;
    font-weight: 600;

    background: var(--main-blue);
    background-color: #225ca8;
    color: aliceblue;
    font-size: 20px;
}

.sub-box {
    width: 26rem;
    padding-top: 1.4rem;
    padding-bottom: 1.4rem;
    flex-shrink: 0;
    border-radius: 10px;
    background: #F7F2FA;
    margin-top: 2%;
    text-align: center;
    display: flex;
    justify-content: center;
    align-items: center;
}

.new-user, .click {
    font-size: 20px;
    background: none;
}

</style>
