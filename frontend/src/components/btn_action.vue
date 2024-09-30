<template>
  <button type="button" class="button-action" :style="style_action">
    <span class="material-symbols-outlined action-icon" v-html="icon_name" :style="{ color:  this.properties.color}"></span>
  </button>
</template>
<script>
export default {
    data(){
        return{
            icon_name: this.properties.type,
            style_action: {
                border: '1px solid ' + this.properties.color,
                borderRadius: '5px',
                padding: '2px 5px',
                background: 'none'
            }
        }
    },
    props: {
        properties: Object
    }
}
</script>
<style scoped>
    .action-icon{
        font-size: 18px;
    }
</style>
