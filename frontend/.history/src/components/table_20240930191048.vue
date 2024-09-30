<template>
  <table class="table_custom">
    <thead>
      <tr>
        <th v-for="element in head" :style="{ width: `calc(100% / ${head.length})` }">
          <span v-html="element"></span>
        </th>
      </tr>
    </thead>
    <tbody>
      <tr v-for="element in body">
        <td v-for="key in Object.keys(element)" :style="{ width: `calc(100% / ${head.length})` }">
          <div class="button-box" v-if="key === 'action'">
            <a href="#" class="box-action" v-for="action in element[key]">
              <BtnAction :properties="action"/>
            </a>
          </div>
          <div class="text-box" v-else>
            <span
             v-html="element[key]" ></span
            >
          </div>
        </td>
      </tr>
    </tbody>
  </table>
</template>
<script>
import BtnAction from './btn_action.vue'
export default {
  data() {
    return {
      head: this.headtb,
      body: this.bodytb,
      data: this.bodytb,
    };
  },
  props: {
    headtb: Array,
    bodytb: Array,
  },
  components: {
    BtnAction
  },
  created: function(){
    this.body.forEach(element => {
      element.action = [
        {
          type: 'delete',
          color: 'orangered'
        },
        {
          type: 'edit',
          color: 'blue'
        }
      ]
    });
  },
  mounted: function () {
    // console.log(this.body);
    
  },
};
</script>
<style scoped>
.table_custom {
  border-collapse: collapse;
  width: 100%;
}
span{
  width: fit-content;
}
th,
td {
  padding: 20px 25px;
  text-align: start;
  border-bottom: 1px solid #f0f1f6;
  width: fit-content;
}
th span{
    text-transform: uppercase;
}
.text-box {
  max-width: 100px;
  width: 100px;
  overflow: hidden;
  text-overflow: ellipsis;
}
.text-box span {
  white-space: nowrap;
}
.box-action{
  margin-right: 5px;
}
</style>
