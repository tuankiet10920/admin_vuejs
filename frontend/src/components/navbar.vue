<template>
  <nav class="navbar" ref="navbar">
    <div class="navbar-container">
      <div class="navbar-left">
        <SearchNavbar />
      </div>
      <div class="navbar-right">
        <LinkNavbar v-for="el in link_navbars" :key="el.id" :data="el"/>
        <NotifyButton v-for="btn in btn_notify" :key="btn.id" :data="btn"/>
      </div>
    </div>
  </nav>
</template>
<script>
import SearchNavbar from './search_navbar.vue'
import LinkNavbar from './link_navbar.vue'
import NotifyButton from './btn_notify.vue'
export default {
  data() {
    return {
      link_navbars: [
        {
          id: 1,
          name: 'Reports',
          optionImage: {
            isImage: false,
            srcImage: null
          }
        },
        {
          id: 2,
          name: 'Projects',
          optionImage: {
            isImage: false,
            srcImage: null
          }
        },
        {
          id: 3,
          name: 'Anna Nguyen',
          optionImage: {
            isImage: true,
            srcImage: 'bf-girl.jpg'
          }
        }
      ],
      btn_notify: [
        {
          id: 1,
          name_icon: 'mail',
          color_notify: 'orange'
        },
        {
          id: 2,
          name_icon: 'notifications',
          color_notify: 'orangered'
        }
      ]
    };
  },
  components: {
    SearchNavbar,
    LinkNavbar,
    NotifyButton
  },
  methods: {},
  mounted: function () {
    const heightNavbar = this.$refs.navbar.clientHeight;
    this.$emit("heightNavbar", heightNavbar);
  },
};
</script>
<style scoped>
.navbar {
  width: 100%;
  position: fixed;
  top: 0;
  width: calc(100% - 258px);
  z-index: 5;
  background: #fff;
  display: flex;
  justify-content: center;
  padding: 10px 0px;
}
.navbar-container{
  width: 95%;
  display: flex;
  justify-content: space-between;
  align-items: center;
}
.navbar-left{
  width: 30%;
  max-width: 30%;
  display: flex;
  align-items: center;
}
.navbar-right{
  width: 50%;
  max-width: 60%;
  display: flex;
  justify-content: end;
  align-items: center;
}
</style>
