<template>
  <div>
    <transition-group name="fade">
      <div class="wrap wrap-life" :key="'life1'" v-if=" $store.state.c4_tab === 0">
        <span class="page">about life</span>
        <main>
          <div class="mapBox">
            <transition name="fade">
              <div class="map por" v-for="(life, index, key) in lifes" :key="'index'+index" v-if="currentData(0,index)" @click="openLb(life.srcName, true, life.el)">
                <img :src="'/static/img/'+life.srcName"/>
                <div v-html="life.extra" />
              </div>
            </transition>
          </div>
          <div class="sq-tab">
            <ul>
              <li v-for="(life, i, k) in lifes" :key="k"><a :class="{'active':currentData(0,i)}" @click="currentHandler(0, i)">{{life.name}}</a></li>
            </ul>
          </div>
        </main>
        <div class="arrowBox">
          <div class="arrow">
            <a href="javascript:;" @click="arrowHandler(0,-1)" :class="{'transparent': current0===0 }" ><span></span></a>
            <a href="javascript:;" @click="arrowHandler(0,1)" :class="{'transparent': current0===(lifes.length-1) }"><span></span></a>
          </div>
        </div>
      </div>
      <div class="wrap wrap-life2" :key="'life2'" v-if=" $store.state.c4_tab === 1"><span class="page">about life</span>
          <main>
            <div class="picBox por">
              <div class="pic"><img src="/static/img/4-2-1.jpg"/>
              </div>
              <div class="pic2 abs"><img src="/static/img/4-2-2.png"/>
              </div>
              <div class="pic3 abs"><img src="/static/img/4-2-3.png"/>
              </div>
            </div>
            <div class="txt">
              <h2 class="tt-page">音樂篇</h2>
              <h3>兩廳院 中正紀念堂</h3>
              <p class="main-p">兩廳院，穿梭在一個又一個大師之間。馬友友、巴哈、瑪莎葛蘭姆、韓德爾⋯⋯從古典到新潮，從音樂到舞台劇，在藝術殿堂裡演繹一場又一場曠世巨作。閱狷聲之「聲」，便是納入兩廳院，當藝術成為日常，生活便絕無冷場。</p>
              <p class="main-p">視線跟隨中正紀念堂內的三軍儀隊的標槍，甩上半空，整齊肅穆的交接儀式，收穫不少觀光客的閃光燈。從閱狷聲漫步而來不過十分鐘，過往的歷史現場擺脫嚴肅，廣場容納市民日常活動。入夜後的燈光，自由廣場之上，照耀出風情萬種。</p>
            </div>
          </main>
          <div class="bg abs"><img src="/static/img/bg-4-2.png"/>
          </div>
      </div>
      <div class="wrap wrap-life3" :key="'life3'" v-if=" $store.state.c4_tab === 2"><span class="page" style="color:#fff;">about life</span>
          <main>
            <div class="left"></div>
            <div class="right"></div>
            <div class="txt">
              <h2 class="tt-page">文人篇</h2>
              <h3>齊東街 永康街 青田街 台大法商學院</h3>
              <p class="main-p">閱狷聲位在京畿重地，曾經的高級軍官特區，如今化身藝文基地。齊東詩舍上傳來琅琅讀詩聲，台大法商學院與官邸藝文沙龍對望，一路散步重拾浪漫情懷。</p>
              <p class="main-p">繞到永康街上，熟門熟路像走入自家。不疾不徐喝杯茶，離開喧囂，恍如置身世外桃花源。</p>
            </div>
          </main>
      </div>
      <div class="wrap wrap-life4" :key="'life4'" v-if=" $store.state.c4_tab === 3"><span class="page" style="color:#fff;">about life</span>
          <main>
            <div class="bgBox1 bgBox">
              <div class="box1"></div>
              <div class="box2"></div>
              <div class="box3"></div>
              <div class="box4"></div>
              <div class="box5"></div>
              <div class="box6"></div>
              <div class="box7"></div>
              <div class="box8"></div>
            </div>
            <div class="bgBox2 bgBox">
              <div class="box1"></div>
              <div class="box2"></div>
              <div class="box3"></div>
              <div class="box4"></div>
              <div class="txtbox">
                <h2 class="tt-page">生活篇</h2>
                <h3>東門市場 大安森林公園 華山藝文特區</h3>
                <p class="main-p">東門市場號稱是官夫人們的廚房，來自五湖四海的道地家鄉味、道地小吃與手藝製品，讓東門市場吃喝逛買一應俱全。老店舖、老字號更是東門市場的珍貴資產。從閱狷聲散步過去，吃一碗四十年不變的米粉湯，生活增添更多豐饒滋味。</p>
                <p class="main-p">在繁忙的生活之中換口氣。傍晚從閱狷聲出發，一路往大安森林公園。跑入林間將都市塵囂隔離，圍繞在365度立體聲的鳥鳴花香中，只需跟隨心跳，把日子放鬆，打通無聊的任督二脈，享受汗暢淋漓的痛快。</p>
                <p class="main-p">華山藝文中心，盛產文青的文青聖地，國際大展的台北第一站首選，囊括五湖四海各式奔放的創意與表演，在華山搬演一場場大秀。展覽在秀，人也在秀。在華山，恣意走出自己的潮路線，日子也跟著潮起來。</p>
              </div>
              <div class="box5"></div>
              <div class="box6"></div>
              <div class="box7"></div>
              <div class="box8"></div>
            </div>
            <div class="bgBox3 bgBox">
              <div class="box1"></div>
              <div class="box2"></div>
              <div class="box3"></div>
              <div class="box4"></div>
            </div>
          </main>
      </div>
      <div class="wrap wrap-life5" :key="'life5'" v-if=" $store.state.c4_tab === 4"><span class="page" style="color:#fff;">about life</span>
          <main>
            <div class="pic"></div>
            <div class="txt abs">
              <h2 class="tt-page">交通篇</h2>
              <h3>東門捷運站（雙捷運線）</h3>
              <p class="main-p">在東門捷運站猶如閱覽都會櫥窗，肩負市區捷運樞紐大任，蘆洲南勢角線與淡水信義線雙捷運轉乘站，帶來源源不絕的人潮與商機．東門捷運站因而成為燙金交會站。</p>
              <p class="main-p">閱狷聲身處交通精華地段，沿街散步就是一場都會饗宴，日子之中品味豐富的飲食與精品層次。</p>
            </div>
          </main>
      </div>
    </transition-group>
     <LB :picName="lbPic" v-if="lbShow" @openLb="openLb" :isTeam="false" :el="el" />
  </div>
</template>

<script>
  import LB from './../components/LightBox'

  export default {
    name: 'life',
    data() {
      return {
        current0: 0,
        current1: 0,
        current2: 0,
        current3: 0,
        current4: 0,
        lbPic:'',
        lbShow: false,
        el: null,
        lifes: [
          { name:'生活機能圖', srcName:'4-1-1.png',el:'map', extra:''},
          { name:'書生學區', srcName:'4-1-2.png', el:'', extra:''},
          { name:'公園綠地', srcName:'4-1-3.png', el:'', extra:''},
          { name:'便利生活', srcName:'4-1-4.png', el:'', extra:''}
        ],     
      }
    },
    components: {
        LB
    },
    updated() {
      // console.log(this.$store.state.c4_tab);
      if( this.$store.state.c4_tab==='3' || this.$store.state.c4_tab==='4' ) {
        this.$store.commit('themeHandler', true);
      } else {
        this.$store.commit('themeHandler', false);
      }
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
      arrowHandler: function(sub, add){
        var newVal = this['current'+sub]+add;
        if( newVal<0 ) newVal= this.lifes.length-1;
        if( newVal >= this.lifes.length ) newVal = 0;
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
        this.styleTag.setAttribute("href", '/static/css/life.css')
        document.getElementsByTagName("head")[0].appendChild(this.styleTag)
      })
    },
    destroyed() {
        document.getElementsByTagName('head')[0].removeChild(this.styleTag);
    },
  }
</script>
<style scoped>
  .wrap .mapBox img{
      cursor: pointer;
      transition: all .3s ease;
  }
  .wrap .mapBox img:hover{
      opacity: .5;
      cursor: pointer;
    
  }
   
</style>
