<template>
  <div class="footer" @mouseover="footerHover" @mouseleave="footerLeave">
    <span v-if="checkFooter" v-html="textSpan"></span>
  </div>
</template>
<script>
import { ref } from "vue";
export default {
  data() {
    return {
      textSpan: "Contact: tuankiet10920@gmail.com",
      checkFooter: ref(false),
    };
  },
  methods: {
    footerHover: function () {
      let footer = document.querySelector(".footer");
      footer.classList.add("footer-active");
      footer.classList.remove("footer-active-live");
      this.checkFooter = true;
    },
    footerLeave: function () {
      let footer = document.querySelector(".footer");
      footer.classList.remove("footer-active");
      footer.classList.add("footer-active-live");
      this.checkFooter = false;
    },
  },
};
</script>
<style scoped>
.footer {
  height: 15px;
  width: calc(100% - 258px);
  padding: 5px 0px;
  display: flex;
  justify-content: center;
  align-items: center;
  background: #181824;
  color: #8e94a9;
}
.footer-active {
  height: 50px;
  animation: footer-show 0.3s linear;
  border-top: 10px solid #33c92d;
}
.footer-active-live {
  animation: footer-leave 0.3s linear;
  border-top: 10px solid #f0f1f6;
}
@keyframes footer-leave {
  0% {
    height: 50px;
    border-top: 10px solid #33c92d;
  }
  100% {
    border-top: 10px solid #f0f1f6;
    height: 15px;
  }
}
@keyframes footer-show {
  0% {
    border-top: 10px solid #f0f1f6;
    height: 15px;
  }
  100% {
    border-top: 10px solid #33c92d;
    height: 50px;
  }
}
.footer span {
  font-size: 10px;
}
</style>
