<template>
  <div class="group-dashboard">
    <div class="group-icon">
      <span class="material-symbols-outlined"> {{ data.icon_name }} </span>
    </div>
    <div class="group-name">
      <p>{{ data.name }}</p>
    </div>
    <span v-if="data.arrow_right === true"class="material-symbols-outlined arrow-right"> keyboard_arrow_right </span>
  </div>
</template>
<script>
export default {
    data(){
        return{
            data: this.info
        }
    },
    props: {
        info: Object
    }
}
</script>
<style scoped>
.group-dashboard {
  width: 100%;
  display: flex;
  align-items: center;
  padding: 10px 0px;
  position: relative;
  cursor: pointer;
  margin-top: 10px;
}
.group-icon {
  margin-right: 10px;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 5px;
  border-radius: 5px;
  background: rgba(194, 244, 219, 0.12);
}
.group-icon span {
  font-size: 15px;
  color: #33c92d;
}
.group-name p {
  color: #8e94a9;
  font-size: 15px;
  transition: all .3s ease-in-out;
}
.group-name p:hover{
  color: #fff;
}
.arrow-right{
  font-size: 18px;
  color: #8e94a9;
  position: absolute;
  top: 50%;
  right: 0;
  transform: translateY(-50%);
}
</style>
