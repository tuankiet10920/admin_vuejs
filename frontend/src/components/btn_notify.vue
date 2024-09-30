<template>
  <div class="btn-notify">
    <span class="material-symbols-outlined icon-notify" v-html="btn_notify.name"></span>
    <div class="notify-circle" :style="{ background: btn_notify.color }"></div>
  </div>
</template>
<script>
export default {
    props: {
        data: Object
    },
    data(){
        return{
            btn_notify: {
                id: this.data.id,
                name: this.data.name_icon,
                color: this.data.color_notify
            }
        }
    },
}
</script>
<style scoped>
.btn-notify {
  position: relative;
  height: fit-content;
  margin-left: 20px;
  cursor: pointer;
  display: flex;
  justify-content: center;
  align-items: center;
}
.icon-notify{
    font-size: 22px;
}
.notify-circle {
  position: absolute;
  top: -3%;
  right: -10%;
  width: 12px;
  height: 12px;
  border-radius: 50%;
  transform-origin: center;
  border: 2px solid #fff;
  animation: zoomin 0.5s linear;
}
@keyframes zoomin {
  25% {
    transform: scale(150%);
  }
  50% {
    transform: scale(100%);
  }
  75% {
    transform: scale(150%);
  }
  100% {
    transform: scale(100%);
  }
}
</style>
