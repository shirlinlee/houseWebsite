<template>
  <div>
    <transition-group name="fade">
      <div class="wrap wrap-plan1" :key="'plan1'" v-if=" $store.state.c5_tab === 0"><span class="page">about floor plan</span>
        <main>
          <transition name="floor">
            <a href="javascript:;" v-for="(inner, index, key) in inners" :key="index" class="roomplan" :class="inner.uniClass" v-if="currentData(0,index)" @click="openLb(inner.srcName, true, 'inner')"><img :src="'/static/img/'+inner.srcName"/>
            </a>
          </transition>
          <div class="sq-tab">
            <ul>
              <li v-for="(inner, index, key) in inners" :key="index"><a :class="{'active':currentData(0,index)}" @click="currentHandler(0, index)">{{ inner.name }}</a></li>
            </ul>
          </div>
        </main>
        <div class="arrowBox">
          <div class="arrow">
            <a href="javascript:;" @click="arrowHandler(0,-1, false)" :class="{'transparent': current0===0 }" ><span></span></a>
            <a href="javascript:;" @click="arrowHandler(0,1, false)" :class="{'transparent': current0===(inners.length-1) }"><span></span></a>
          </div>
        </div>
      </div>

      <div class="wrap wrap-plan2" :key="'plan2'" v-if=" $store.state.c5_tab === 1"><span class="page">about floor plan</span>
        <main>
          <transition name="floor">
            <a href="javascript:;" class="roomplan floor" v-for="(floor, index, key) in floors" :key="index" :class="floor.uniClass" v-if="currentData(1,index)" @click="openLb(floor.srcName, true, floor.uniClass)"><img :src="'/static/img/'+floor.srcName"/></a>
          </transition>
        </main>
        <div class="arrowBox">
          <div class="arrow">
            <a href="javascript:;" @click="arrowHandler(1,-1,true)" :class="{'transparent': current1===0 }" ><span></span></a>
            <a href="javascript:;" @click="arrowHandler(1,1,true)" :class="{'transparent': current1===(floors.length-1) }"><span></span></a>
          </div>
        </div>
        <div class="floor-tab">
          <ul>
            <li v-for="(floor, index, key) in floors" :key="index"><a :class="{'active':currentData(1,index)}" @click="currentHandler(1, index)">{{floor.name}}</a></li>
          </ul>
        </div>
      </div>
    </transition-group>
    <LB :picName="lbPic" v-if="lbShow" @openLb="openLb" :isTeam="false" :el="el" />

  </div>
</template>

<script>
  import LB from './../components/LightBox'

  export default {
    name: 'plan',
    data() {
      return {
        current0: 0,
        current1: 0,
        lbPic:'',
        lbShow: false,
        el: null,
        inners: [
          {name:'115 坪', uniClass:'room115', srcName:'5-1-1.png'},
          {name:'150 坪', uniClass:'room150', srcName:'5-1-2.png'}
        ],
        floors:[
          {name:'B5F', uniClass:'floor_rotate', srcName:'floor-B5F.jpg'},
          {name:'B4F', uniClass:'floor_rotate', srcName:'floor-B4F.jpg'},
          {name:'B3F', uniClass:'floor_rotate', srcName:'floor-B3F.jpg'},
          {name:'B2F', uniClass:'floor_rotate', srcName:'floor-B2F.jpg'},
          {name:'B1F', uniClass:'floor_rotate', srcName:'floor-B1F.jpg'},
          {name:'1F', uniClass:'floor_rotate', srcName:'floor-1F.jpg'},
          {name:'2F', uniClass:'floor_rotate', srcName:'floor-2F.jpg'},
          {name:'3F', uniClass:'floor_rotate', srcName:'floor-3F.jpg'},
          {name:'4F', uniClass:'floor_rotate', srcName:'floor-4F.jpg'},
          {name:'5F', uniClass:'floor_rotate', srcName:'floor-5F.jpg'},
          {name:'6F', uniClass:'floor_rotate', srcName:'floor-6F.jpg'},
          {name:'7~9F', uniClass:'floor_rotate', srcName:'floor-7F.jpg'},
          {name:'10F', uniClass:'floor_rotate', srcName:'floor-10F.jpg'},
          {name:'11F', uniClass:'floor_rotate', srcName:'floor-11F.jpg'},
          {name:'12F', uniClass:'floor_rotate', srcName:'floor-12F.jpg'},
          {name:'13F', uniClass:'floor_rotate', srcName:'floor-13F.jpg'},
          {name:'14F', uniClass:'floor_rotate', srcName:'floor-14F.jpg'},
          {name:'R1F', uniClass:'floor_rotate', srcName:'floor-R1F.jpg'},
          {name:'R2-3F', uniClass:'last', srcName:'floor-R2F.jpg'}
        ]
      }
  
    },
    components: {
        LB
    },
    methods: {
      currentData: function(index,i){
        return this['current'+index]===i;
      },
      currentHandler: function(main, sub) {
        if ( this['current'+main] !== sub) {
          this['current'+main] = sub;
        }
      },
      arrowHandler: function(sub, add, isfloor){
        var newVal = this['current'+sub]+add;
        if(isfloor) {
          if( newVal<0 ) newVal= this.floors.length-1;
          if( newVal >= this.floors.length ) newVal = 0;
          // console.log('floor_rotate',newVal);
        } else {
          if( newVal<0 ) newVal= this.inners.length-1;
          if( newVal >= this.inners.length ) newVal = 0;
          // console.log('inners',newVal);
        }
        this['current'+sub] = newVal;
      },
      openLb(name, isShow, el) {
        // console.log(name, isShow);
        this.lbPic = name;
        this.lbShow = isShow;
        this.el = el;
      }
      
    },
    mounted() {
      this.$nextTick( ()=> {
        this.styleTag=document.createElement("link")
        this.styleTag.setAttribute("rel", "stylesheet")
        this.styleTag.setAttribute("type", "text/css")
        this.styleTag.setAttribute("href", '/static/css/plan.css')
        document.getElementsByTagName("head")[0].appendChild(this.styleTag)
      })
    },
    destroyed() {
        document.getElementsByTagName('head')[0].removeChild(this.styleTag);
    },
  }
</script>
<style lang="scss" scoped>
  .floor-tab{
    a {
      cursor:pointer;
    }
  } 
  .wrap.wrap-plan2 {
    a {
      img {
        -webkit-transform: rotate(180deg);
        transform: rotate(180deg);
      }
      &.last img{
        -webkit-transform: rotate(0);
        transform: rotate(0);
      }
    }
  }
  
</style>
