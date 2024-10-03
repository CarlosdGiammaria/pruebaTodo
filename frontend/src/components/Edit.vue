<script setup>
import Naviagtion from '@/components/Navigation.vue';
</script>

<template>
  <div class="main-container">
    <Naviagtion></Naviagtion>
    <form class="form" @submit.prevent="actualizarTarea">
      <h1>Update of note</h1>

      <div class="form__container">
        <div class="form__group">
          <input type="text" name="" id="" placeholder="" class="form__input">
          <label for="" class="form__label">Title</label>
          <span></span>
        </div>

        <div class="form__group">
          <textarea name="" id="" placeholder="" class="form__input textArea"></textarea>
          <label for="" class="form__label">Description</label>
          <span></span>
        </div>

        <button type="submit" class="form__submit">Moditify</button>
      </div>
    </form>

  </div>

</template>

<style scoped>
form {
  font-family: "Fredoka", sans-serif;

  color: #2f2d2d7e;
  background-color: #ffff;
  margin: auto;
  width: 90%;
  max-width: 400px;
  padding: 4.5em 3em;
  border-radius: 9px;
  box-shadow: 0 5px 10px -5px rgb(0 0 0 / 30%);
  text-align: center;
}

.form__container {
  margin-top: 3em;
  display: grid;
  gap: 2em
}

.form__group {
  position: relative;
  color: #5757577e;
}

.form__input {
  width: 100%;
  background: none;
  color: #706c6c;
  font-size: 1rem;
  padding: .6em .3em;
  border: none;
  outline: none;
  border-bottom: 1px solid #5757577e;
}

.form__input:focus+.form__label,
.form__input:not(:placeholder-shown)+.form__label {
  transform: translateY(-12px) scale(.7);
  transform-origin: left top;
  color: blueviolet;
}

.form__label {
  color: #706c6c;
  cursor: pointer;
  position: absolute;
  top: 0;
  left: 5px;
  transform: translateY(10px);
  transition: transform .5s, color .3s;
}

.form__submit {
  font-family: "Fredoka", sans-serif;
}
</style>