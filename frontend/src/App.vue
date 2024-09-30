<template>
  <!-- sidebar -->
  <SideBar />

  <!-- main -->
  <div class="main-panel">
    <div class="main-panel-container">
      <!-- navbar -->
      <NavBar ref="navbar" @height-Navbar="getHeightNavbar" />

      <!-- main -->
      <!-- use router to switch views -->
      <RouterView class="main-views" :style="{ top: heightNavbar }"/>

      <!-- footer -->
      <Footer class="app-footer"/>
    </div>
  </div>
</template>

<script>
import { RouterView } from "vue-router";
import Header from "./views/HeaderView.vue";
import Footer from "./views/FooterView.vue";
import NavBar from "./components/navbar.vue";
import SideBar from "./components/sidebar.vue";
import { ref } from "vue";



export default {
  data() {
    return {
      heightNavbar: ref(0),
    };
  },
  components: {
    NavBar,
    SideBar,
    RouterView,
    Footer
  },
  methods: {
    getHeightNavbar: function (height) {
      this.heightNavbar = height + "px";
    }
  },

};
</script>

<style scoped>
.main-panel {
  position: absolute;
  top: 0;
  right: 0;
  width: calc(100% - 258px);
}

.main-panel-container {
  width: 100%;
  position: relative;
}
.main-views {
  position: absolute;
  min-height: 100vh;
  background: #F0F1F6;
}
.app-footer{
  position: fixed;
  bottom: 0;
  z-index: 100;
}
</style>
