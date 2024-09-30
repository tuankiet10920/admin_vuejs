<template>
  <div class="link-navbar">
    <div v-if="data_link.active_image" class="link-navbar-image">
      <img :src="data_link.src_link" alt="bf-girl" />
    </div>
    <div class="link-navbar-name">
      <p v-html="data_link.name_link"></p>
    </div>
    <span class="material-symbols-outlined"> arrow_drop_down </span>
  </div>
</template>
<script>
export default {
  props: {
    data: Object,
  },
  data() {
    return {
      data_link: {
        name_link: this.data.name,
        src_link:
          "http://localhost:5173/src/assets/img/" + this.data.optionImage.srcImage,
        active_image: this.data.optionImage.isImage,
      },
    };
  },
  methods: {},
};
</script>
<style scoped>
.link-navbar {
  display: flex;
  align-items: center;
  margin-left: 20px;
  cursor: pointer;
}
.link-navbar-image {
  width: 30px;
  height: 30px;
  object-fit: cover;
  border-radius: 50%;
  overflow: hidden;
}
.link-navbar-image img {
  width: 100%;
  height: 100%;
}
.link-navbar-name {
  margin: 0px 5px;
}
</style>
