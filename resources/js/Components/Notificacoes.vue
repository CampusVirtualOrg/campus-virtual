<template>
     <div class="buttons">
        <div class="notfications-sect">
            <i class="bi bi-bell-fill notification-icon" id="notBtn"></i>
            <div class="notDad" id="notDad">
                <div class="notifications" id="notifications">
                    <div class="notHeader">
                        <span>Notificações</span>
                        <a href="#">LIMPAR TODAS</a>
                    </div>
                    <div class="notCard">
                        <div class="notMessage">
                            <i class="bi bi-pencil-square img-section"></i>
                            <span>mensagem
                                <span class="bolders" style="color: green;">Requerimento</span>
                            </span>
                        </div>
                        <a href="#">LIMPAR</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>

.notDad {
  display: none;
}

.notifications {
  display: flex;
  flex-direction: column;
  position: absolute;
  transform: translateX(-50%);
  width: 22rem;
  height: max-content;
  background-color: #f9f9f9;
  border: 2px solid #dfdfdf;
  border-radius: 10px;
  flex-direction: column;
  justify-content: space-between;
  padding: 0.2rem 0.2rem 2rem 0.2rem;
  gap: 1rem;
  z-index: 1;
}

.notifications-sect {
  display: flex;
  flex-direction: column;
  position: relative;
}

.notHeader {
  display: flex;
  justify-content: space-between;
  align-items: center;
  font-size: 15pt;
  font-weight: 600;
  color: #3065ac;
  padding: 0.4rem;
  border-bottom: 1px solid #ccc;
}

.notHeader a {
  color: #3065ac;
  font-size: 10pt;
}

.notCard {
  display: flex;
  flex-direction: column;
  font-size: 12pt;
  font-weight: 400;
  gap: 0.4rem;
  border-bottom: 1px solid #dfdfdf;
  padding-bottom: 0.6rem;
}

.notMessage {
  display: flex;
  justify-content: start;
  align-items: center;
  gap: 0.4rem;
}

.notCard a {
  font-size: 10pt;
  color: #3065ac;
  font-weight: 600;
  text-align: end;
  padding-right: 1rem;
}

.notCard i {
  font-size: 14pt;
}

.bolders {
  font-weight: 600;
}

i {
  padding: 5px;
  font-size: 25px;
  color: #000;
  cursor: pointer;
  margin-right: 10vh;
}

i:hover {
  color: #555555;
}
</style>
