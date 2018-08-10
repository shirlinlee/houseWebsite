<template>
  <header :class="{'header-w':$store.state.isBlackTheme}">
      <router-link 
        class="logo"
        :to="{ name: 'index' }" 
        @click="changeContent(0)" 
        v-if="$store.state.show!==0" >
          <img src="/static/asset/svg/logo-b.svg" alt="logo" v-if="!$store.state.isBlackTheme">
          <img src="/static/asset/svg/logo-w.svg" alt="logo" v-else>      
      </router-link>
  
      <div class="button_container" id="toggle" @click="navHandler" :class="{'active': navOpen }">
        <span class="top"></span>  
        <span class="middle"></span>  
        <span class="bottom"></span>
      </div>
      <div class="overlay" id="overlay">
        <nav class="overlay-menu"> 
          <ul>
            <li v-for="(nav,index) in navs">
              <a href="javascript:;" class="toggle" :class="{'active': $store.state.show === index }" @click="changeContent(index)">{{nav.title}}
                <span class="arrow sub-open-arrow">
                  <img src="/static/asset/svg/menu-arrow.svg"/>
                </span>
              </a>
              <div class="sub">
                <ul>
                  <li v-for="(detail,i) in nav.details" >
                    <router-link :class="{'active': $store.state[`c${index}_tab`] === i }" :to="{ name: detail.path}" >{{detail.title}}</router-link>
                  </li>
                </ul>
              </div>
            </li>      
          </ul>
        </nav>
      </div>
      <!-- pc menu-->
      <nav class="nav-pc">
        <ul>
          <li class="tab" v-for="(nav,index) in navs" :class="{'open': $store.state.show === nav.path }" >
            <router-link 
              class="toggle"
              :to="{ name: nav.path }">
                {{nav.title}}
            </router-link>
            <div class="sub">
              <ul>
                <li v-for="(detail,i) in nav.details" >
                    <a 
                      href="javascript:;"
                      :class="{'active': $store.state[`c${index}_tab`] === i }" 
                      :to="{ name: detail.path}"  
                      @click="changeTab( index, i)">
                        {{ detail }}
                    </a>
                </li>
              </ul>
            </div>
          </li>
        </ul>
      </nav>
    </header>
</template>

<script>

  export default {
    data() {
      return {

        navOpen: false,
        navs:[
          {'title': '品牌概念','path':'brand','details':[]},
          {'title': '建築團隊','path':'team','details':['城中理念','城中實蹟','團隊成員']},
          {'title': '建築規劃','path':'archi','details':['建築設計理念','立面篇','公設篇']},
          {'title': '建築工程','path':'engrg','details':['結構工程','防水對策','管道設計','靜音美學','活氧通風']},
          {'title': '周邊環境','path':'life','details':['生活機能圖','音樂篇','人文篇','生活篇','交通篇']},
          {'title': '平面傢配','path':'plan','details':['傢配圖','墨線圖']},
        ]
      }
    },
    mounted() {
      $('#toggle').click(function() {
        $(this).toggleClass('active');
        $('#overlay').toggleClass('open');
      });
      // console.log(this.$store.state);
    },  
    methods: {
      navHandler() {
        this.navOpen = !this.navOpen;
      },
      changeContent (num) {
        // console.log( num);
        this.$store.dispatch('navAndTheme', num);
      },
      changeTab (tab, num) {
        // console.log(tab, num);
        this.$store.commit('tab', {tab, num});
      },
      getIndex (index) {
        return (index+1).toString()
      }

    },
    computed: {
      
    }
  }
</script>
<style lang="scss" scoped>
  .nav-pc {
    .tab {
      .sub li {
        height: 0; 
        opacity:0; 
        transition: all .4s;
        
      }
      &.open {
        .sub li{
          height: 40px;
          opacity:1;
        }
      }
    } 
    
    
  }
  
</style>
