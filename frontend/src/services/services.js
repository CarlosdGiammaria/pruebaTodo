import axios from 'axios';

const url = 'http://127.0.0.1:8000/api/tareas';

/* method get */
export const obtenerTareas = async (tareas) => {
  try {
    const respuesta = await axios.get(url);
    tareas.value = respuesta.data; 
  } catch (error) {
    console.error('Error al obtener las tareas:', error);
  }
};


/* method post */
export const agregarTarea = async (nuevaTarea, tareas) => {
  try {
    const respuesta = await axios.post(url, nuevaTarea.value);
    tareas.value.push(respuesta.data); // Actualiza la lista de tareas
    await obtenerTareas(tareas); 
    alert('Se ha guardado correctamente');
  } catch (error) {
    console.error('Error al guardar la tarea:', error);
  }
};

/* method delete */
export const eliminarTarea = async (id, tareas) => {
  try {
    await axios.delete(`${url}/${id}`);
    alert('Se ha eliminado correctamente');
    await obtenerTareas(tareas); // Vuelve a obtener las tareas después de eliminar
  } catch (error) {
    console.error('Error al eliminar la tarea:', error);
  }
};