<template>
    <transition name="fade">
        <div class="popup" :class="classObject" @click="$emit('openLb','', false)">
            <a class="close abs" href="javascript:;" @click="$emit('openLb','', false)"><img src="/static/asset/svg/close.svg"/></a>
            <div class="content"><img :src="'/static/img/'+picName"/></div>
        </div>
    </transition>
    
</template>

<script>
  import zoom from 'jquery-zoom'
  export default {
    data() {
        
      return {
        classObject: {
            'rotate': this.el === 'floor_rotate' || this.el === 'inner',
            'team': this.isTeam,
            'verticel': this.el === 'inner',
            
        }
      }
    },
    props:['picName','isTeam','el'],
    //actions 响应在view上的用户输入导致的状态变化
    mounted() {
        // console.log('mounted');
        var $this = this;
        this.$nextTick( ()=> { 
            $(document).ready(()=>{
                if( this.el === "map") {
                    $('.content').zoom({url: '/static/img/map.png', magnify:.8});
                } else if(this.el === "inner") {
                    console.log(this.picName);
                    var name = "5-1-2-l.png";
                    if(this.picName === "5-1-1.png") name = "5-1-1-l.png"
                    $('.content').zoom({url: '/static/img/'+name, magnify:1.2});
                }

             })
          
           
        })
    },
    updated() {
        
    }
  }
</script>
<style lang="scss" scoped>
    .popup {
        top: 0;
        &.rotate img{
            -webkit-transform: rotate(180deg);
            transform: rotate(180deg);
        }
        .content img{
            background:#fff;
        }
        
        &.verticel {
            .content{
               width: initial;
               height: 95vh;
               img{
                    height:100%;
                    width: auto;
                }
            }
            
        }
    }
    
</style>
