<template>
  <form class="navbar-search">
    <span class="material-symbols-outlined search-input"> search </span>
    <label for="seach-navbar-input" style="display: none"></label>
    <input type="text" id="seach-navbar-input" placeholder="Search products" />
  </form>
</template>
<script></script>
<style scoped>
.navbar-search {
  width: fit-content;
  padding: 15px 20px;
  background: #eef0fa;
  display: flex;
  align-items: center;
}
#seach-navbar-input {
  border: none;
  outline: none;
  padding-left: 20px;
  background: none;
  font-size: 16px;
  width: 270px;
}
#seach-navbar-input::placeholder{
    color: #000;
}
.search-input{
    font-size: 16px;
    color: #000;
}
</style>
