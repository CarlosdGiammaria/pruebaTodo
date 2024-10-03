<script setup>

</script>
<template>
  <div class="main">
    <input type="checkbox" id="chk" aria-hidden="true" class="input">

    <div class="signup">
      <form>
        <label for="chk" aria-hidden="true" class="label">Sign up</label>
        <input type="text" name="txt" placeholder="User name" required="" class="input">
        <input type="email" name="email" placeholder="Email" required="" class="input">
        <input type="password" name="pswd" placeholder="Password" required="" class="input">
        <button>Sign up</button>
      </form>
    </div>

    <div class="login">
      <form>
        <label for="chk" aria-hidden="true" class="label">Login</label>
        <input type="email" name="email" placeholder="Email" required="" class="input">
        <input type="password" name="pswd" placeholder="Password" required="" class="input">
        <button>Login</button>
      </form>
    </div>
  </div>
</template>
<style scoped>
.container {
  display: flex;
  justify-content: center;
  align-items: center;
  background-color: rgba(182, 184, 183, 0.581);
  border-radius: 9px;
}

</style>