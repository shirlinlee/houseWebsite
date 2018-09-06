<template>
  <header :class="{'scrolled':!$store.state.onTop}">
      <!--logo-->
      <a class="logo" href="javascript:;" @click="changeSlide(-1)"> <img src="/static/asset/svg/logo-w.svg" alt="logo"></a>
      <!-- pc menu-->
      <nav class="nav-pc">
        <ul>
          <li v-for="(nav,index) in navs" class="tab" @click="changeSlide(index)">
            <a :class="{'active': $store.state.show === index }"  href="javascript:;">{{nav.title}}</a>
          </li>      
        </ul>
      </nav>
      <!-- m menu-->
      <div class="button_container" ref="ham" @click="navHandler" :class="{'active': navOpen }"><span class="top"></span>  <span class="middle"></span>  <span class="bottom"></span></div>
      <!--add '.nav-open' when opening sub-->
      
      <div class="overlay" id="overlay">
        <nav class="overlay-menu">
          <ul>
            <li v-for="(nav,index) in navs" :class="{'open': $store.state.show === index }" @click="changeSlide(index)">
              <a class="toggle" :class="{'active': $store.state.show === index }" > {{nav.title}}</a>
            </li>      
          </ul>
        </nav>
      </div>
      
    </header>
</template>

<script>

  export default {
    name:'Nav',
    data() {
      return {
        navOpen: false,
        navs:[
          {'title': '建築規劃','path':'archi'},
          {'title': '公設規劃','path':'engrg'},
          {'title': '周邊環境','path':'life'},
          {'title': '聯絡我們','path':'plan'},
        ]
      }
    },
    mounted() {
      $(this.$refs.ham).click(function() {
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
      changeSlide (num) {
        // console.log(tab, num);
        this.$store.commit('nav', num);
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
      
    } 
    
    
  }
  
</style>
