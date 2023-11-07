<template>
     <div class="header-section">

        <div class="perfil">
          <img src="#" alt="" class="img-perfil" />
          <p>Olá, <span style="color: #3065ac; font-weight: 500;">Nome</span></p>
        </div>

        <div class="box">
        <form name="search">
            <input type="text" class="input" name="txt" />
            <i class="bi bi-search"></i>
        </form>
        </div>

        <div class="buttons">
            <i class="bi bi-bell-fill"></i>
            <i class="bi bi-caret-down-square-fill"></i>
            <a href="/login"><i class="bi bi-door-open-fill"></i></a>
        </div>
    </div>
</template>

<style scoped>

.header-section {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-top: 1rem;
  padding: 0rem 1rem;
}

.perfil {
  display: flex;
  justify-content: center;
  align-items: center;
  font-size: 15pt;
}

.perfil img {
  width: 4rem;
  border-radius: 50%;
  background-color: #3065ac;
}

.box {
  position: relative;
}

.box .input {
  padding: 10px;
  width: 70px;
  height: 40px;
  background: none;
  border: 2px solid #3065ac;
  border-radius: 50px;
  box-sizing: border-box;
  font-weight: 400;
  font-size: 12pt;
  color: #000000;
  outline: none;
  transition: 0.6s;
}

.box:hover input {
  width: 350px;
  background: #ffffff;
  border-radius: 10px;
}

.box input:focus {
  width: 350px;
  background: #ffffff;
  border-radius: 10px;
}

.box i {
  position: absolute;
  top: 50%;
  right: 15px;
  transform: translate(-50%, -50%);
  font-size: 20px;
  color: #3065ac;
  transition: 0.2s;
}

.box:hover i {
  opacity: 0;
  z-index: -1;
}

.buttons {
  display: flex;
  gap: 1rem;
}

.buttons i {
  font-size: 18pt;
  color: #3065ac;
}

</style>
