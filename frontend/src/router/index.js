import { createRouter, createWebHistory } from 'vue-router'
import HomeView from '@/views/HomeView.vue'
import Form from '@/components/Form.vue'
import listNote from '@/components/ListNote.vue'
import Edit from '../components/Edit.vue'



const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'home',
      component: HomeView
    },
    {
      path: '/add-new-note',
      name: 'add new note', component: Form
    },
    {
      path: '/note-list',
      name: 'note list', component: listNote
    },
    {
      path: '/edit',
      name: 'edit', component: Edit
    }
  ]
})

export default router
