<script setup></script>
<template>
  <div class="sidebar">
    <ul>
      <li>
        <router-link to="/add-new-note">Add new note</router-link>
      </li>

      <li class="item">
        <router-link to="/note-list">Note List</router-link>
      </li>
    </ul>
  </div>
</template>
<style scoped>
.sidebar {
  width: 100%;
  text-align: center;
  margin-bottom: 20px;
  border-radius: 8px;
  font-family: "Fredoka", sans-serif;
  background-color: #fff;

}

ul {
  padding: 15px 20px;
  display: flex;
  flex-direction: row;
  justify-content: space-evenly;
  align-items: center;
  gap: 20px;
  width: 300px;
  list-style: none;
  text-decoration: none;
}
</style>