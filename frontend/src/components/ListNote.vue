<script setup>
import { ref, onMounted } from 'vue';
import { obtenerTareas, eliminarTarea } from '../services/services.js'
import Naviagtion from '@/components/Navigation.vue';

const tareas = ref([]);

onMounted(() => {
  obtenerTareas(tareas);
});
console.log('tareas', tareas.value)

// Función para eliminar una tarea
const eliminarTareaPorId = async (id) => {
  try {
    await eliminarTarea(id, tareas); // Pasas 'id' y 'tareas'
  } catch (error) {
    console.error('Error al eliminar la tarea:', error);
  }
};
</script>
<template>
  <Naviagtion></Naviagtion>
  <div class="list-container">
    <h1>Note List</h1>
    <ul class="list__note">

      <li v-for="tarea in tareas" :key="tarea.id">
        <div>
          {{ tarea.title }} - {{ tarea.description }}
        </div>

        <button @click="eliminarTareaPorId(tarea.id)">Eliminar</button>
        <router-link :to="{ name: 'edit', param: { id: tarea.id } }" class="">Editar</router-link>
        
      </li>
    </ul>

  </div>
</template>
<style scoped>
.list-container {
  font-family: "Fredoka", sans-serif;
  color: #2f2d2d7e;
  background-color: #ffff;
  margin: auto;
  width: 100%;
  max-width: 400px;
  padding: 4.5em 3em;
  border-radius: 9px;
  box-shadow: 0 5px 10px -5px rgb(0 0 0 / 30%);
  text-align: center;
  display: flex;
  flex-direction: column;
}

.list__note {
  list-style: none;
  display: flex;
  flex-direction: column;
  justify-content: start;
  align-items: flex-start;

}

li {
  display: flex;
  flex-direction: row;
  justify-content: space-evenly;
  align-items: baseline;
  gap: 10px;
}
</style>