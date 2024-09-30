<template>
  <div class="link-sidebar">
    <RouterLink :to="link_router">
      <span class="material-symbols-outlined arrow-forward"> arrow_forward </span>
      <p class="link-name" @click="changeColorLinkName" v-html="info"></p>
    </RouterLink>
  </div>
</template>
<script>
export default {
    data(){
        return{
            link_router: '/'
        }
    },
    props: {
        index: Number,
        info: String
    },
    methods: {
        changeColorLinkName: function(){
            let link_names = document.querySelectorAll('.link-name')
            let arrow_forward = document.querySelectorAll('.arrow-forward')
            link_names.forEach((element, index) => {
                element.classList.remove('active')
                arrow_forward[index].classList.remove('active')
            });
            link_names[this.index].classList.add('active')
            arrow_forward[this.index].classList.add('active')
        }
    }
}
</script>
<style scoped>
    .link-sidebar {
        width: 100%;
        padding: 10px 0px;
    }
    .link-sidebar a{
        width: 100%;
        display: flex;
        align-items: center;
    }
    .arrow-forward{
        font-size: 14px;
        margin-right: 30px;
        color: #8e94a9;
        /* #44495A */
        font-weight: 600;
    }
    .link-name{
        color: #8e94a9;
        font-size: 12px;
        transition: all .3s ease-in-out;
        font-weight: 600;
    }
    .link-name:hover{
        color: #44495A;
    }
    .active{
        color: #33c92d;
    }
</style>
