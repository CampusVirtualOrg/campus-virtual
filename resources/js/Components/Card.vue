<template>
    <a class="card" href="#">
          <div class="head">
            <i class="bi bi-file-earmark-text-fill"></i>
            <span class="card-title">Requerimentos</span>
          </div>
          <div class="texts">
            <p>Veja os requerimentos</p>
          </div>
        </a>
</template>

<style scoped>
.card {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: start;
  width: 280px;
  height: 100px;
  background-color: #f2f2f2;
  border: 1px solid #cccccc;
  border-radius: 12px;
  padding: 1rem;
}

.card .head {
  display: flex;
  align-items: center;
  gap: 0.4rem;
}

.card i {
  color: #3065ac;
  font-size: 26pt;
}

.card .card-title {
  font-size: 16pt;
  text-decoration: none;
  color: #3065ac;
  font-weight: 600;
}
.card .texts {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: start;
  height: 120px;
  font-weight: 500;
  font-size: 14pt;
  color: #252627;
}
</style>
