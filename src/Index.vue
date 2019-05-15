<template>
  <div class="wrap">
      <detectDevice/>
      <Nav />

      <section class="kv" ref="kv">
        <main><img src="static/img/logo-index.png"/></main>
        <div class="scroll" >scroll<span></span></div>
        <a href="javascript:;" class="abs for_kv" @click="$store.commit('nav', {num:0, click: true});"></a>
      </section>

      <section class="archi" ref="archi">
        <main>
          <div class="content por">
            <div class="buildingBox">
                <transition-group name="fade">
                  <div class="box" v-for="(archi,index) in archis" :key="'b'+index" v-if="archiShow === index">
                    <div :class="'building'+archi.left"/>
                    <div :class="'building'+archi.right"/>
                  </div>
                </transition-group>
              
              
              <div class="arrowBox arrow-w">
                <ul>
                  <li :class="{'hide': archiShow === 0 }"><a href="javascript:;" @click="archiHandler(-1)"><span></span></a></li>
                  <li class="pageBox"><span>{{ archiShow+1 }}</span><span>/</span><span>5</span></li>
                  <li :class="{'hide': archis.length-1 == archiShow }"><a class="next" href="javascript:;" @click="archiHandler(1)"></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="txt">
            <h2 class="tt-page">用建築奏生活的樂章</h2>
            <p class="main-p">立體幾何線條語彙的串連，讓閱狷聲的外觀奏出行雲流水般的樂章，曲線的緩衝，盡可能在每個環節保持光、風、音樂與空氣的流動</p>
            <!-- <p class="main-p"> <strong>- 立面石材</strong></p>
            <p class="main-p">採用背擴孔工法並採用德國 Fischer 固定件，確保石材穩固。無矽利康空縫處理不會造成石材污染</p>
            <p class="main-p"> <strong>- 結構體防水</strong></p>
            <p class="main-p">全棟大樓立面石材後方均有防水塗層  </p> -->
          </div>
          <div class="bg abs"><img src="static/img/bg-3-2.png"/>
          </div>
        </main>
      </section>

      <section class="space" ref="space">
        <transition name="full">
          <main v-for="(space,i) in spaces" :key="'s'+i" v-if="spaceShow === i">
            <div class="picBox" :class="'pic'+(i+1)"></div>
            <div class="des">
              <div class="desBox" :class="{'desBoxClose':closeDetail }" @click="detailHandler">
                <h2> {{space.title}} <a class="arrow" href="javascript:;" ><img src="static/asset/svg/arrow.svg"/></a></h2>
                <div ref="txt" v-html="space.des" />
              </div>
            </div>
          </main>
        </transition>

        <div class="arrowBox arrow-w">
          <ul>
            <li :class="{'hide': spaceShow === 0 }"><a href="javascript:;" @click="spaceHandler(-1)"></a></li>
            <li class="pageBox"><span>{{ spaceShow+1 }}</span><span>/</span><span>9</span></li>
            <li :class="{'hide': spaces.length-1 == spaceShow }"><a class="next" href="javascript:;" @click="spaceHandler(1)"></a></li>
          </ul>
        </div>
      </section>

      <section class="life" ref="life">
         <transition name="full">
          <main v-for="(life,index) in lives" :key="'l'+index" v-if="lifeShow === index" :class="'life'+(index+1)" v-html="life.html" />
        </transition>
        <div class="arrowBox" :class="arrowTheme">
          <ul>
            <li :class="{'hide': lifeShow === 0 }"><a href="javascript:;"  @click="lifeHandler(-1)"></a></li>
            <li class="pageBox"><span>{{ lifeShow+1 }}</span><span>/</span><span>4</span></li>
            <li :class="{'hide': lives.length-1 == lifeShow }"><a class="next" href="javascript:;" @click="lifeHandler(1)"></a></li>
          </ul>
        </div>
      </section>

      <section class="info" ref="info">
        <div class="content">
          <a class="map por" href="javascript:;">
            <span class="zoom abs"><img src="static/asset/svg/zoom.svg"/></span>
            <img v-viewer="options" src="static/img/map.png" class="float"/>
          </a>
          <div class="detail"><img src="static/asset/svg/info.svg"/>
          </div>
        </div>
      </section>

  </div>  
    
</template>

<script>
import Nav from './components/Nav'    
import detectDevice from './components/detectDevice'    
import 'viewerjs/dist/viewer.css'
import 'viewerjs/dist/viewer.css'
import '../static/css/style.css'
import '../static/css/init.css'


                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  
export default {
  name: 'index',
  data() {
    // const vue = this;
    return {
      firstLoad: true,
      windowHeight: null,
      threshold_1: null,
      threshold_2: null,
      threshold_3: null,
      threshold_4: null,
      $body: null,
      isScrolling: false,
      archiShow: 0,
      archis:[
        { left:'1',right:'2' },
        { left:'3',right:'4' },
        { left:'5',right:'6' },
        { left:'7',right:'8' },
        { left:'9',right:'10'}
      ],
      spaceShow: 0,
      closeDetail: true,
      spaces:[
        { name:'雅敘序曲',title:'雅敘序曲 Prelude', des:'<p>社區入囗簡約舒泰的氣度，藉由木材樸實的個性，溫潤心情上的雜慮，閱狷聲的主人每日進出，朗闊的植栽景觀，一回家就開始儲備能量。</p>'},
        { name:'朗朗門廳',title:'朗朗門廳 Lobby', des:'<p>空間的第一樂章，挑高的氣度、留白的含蓄。在雅緻色溫、錯落層次虛實交錯間，開展深邃與層次，表現生活優悅內涵。</p><div class="v-logo"><img src="static/img/archi-logo2.png"/></div><p>Vitra 一直是設計家具界的代表品牌，堅持與全球各地最頂尖的設計師，開發能激勵人心、啟發創意，提供身體舒適的穩定支撐與安全性的設計，成為全球最具設計文化價值的家具品牌。</p>'},
        { name:'涵樂',title:'涵樂 SOFA', des:'<p>恬靜安詳的接待區，溫暖木質風格，猶如安定人心的木管樂器，可以純候客，亦可休憩獨處。讓人放鬆心情，轉換步調。</p><div class="f-logo"><img src="static/img/archi-logo1.png"/></div><p>誕生於以生產頂級工藝家具而聞名的義大利，已歷經三代、傳承百年。</p><p>百年的精細傳統技法與經驗，對於坐具技術與材料的掌握，創造出讓人感到最舒服的支撐力與回彈力。</p>'},
        { name:'蒙田藝文',title:'蒙田藝文 Salon', des:'<p>大面落地玻璃，向自然界借景，交織出綠意通透的開闊感。結合休憩、社交、藝文、閱讀複合功能，無論朋友或家人小聚，展露全方位的會所功能。</p>'},
        { name:'空中廚房',title:'晴仰空中廚房 Gourmet', des:'<p>讓聚餐不只是聚餐，閱狷聲規劃空中廚房與戶外宴會廳動線相連，中島吧台設計明亮的烹調空間。嘴中品味紅酒香氣，眼裡盡賞城市夜景。微風、音樂與歡聲笑語，交織出感官的華麗饗宴。</p>'},
        { name:'韻動健身房',title:'韻動健身房 Rock & Roll', des:'<p>健身除了身體健康，還有著讓人上癮的魅力。以專業健身器材保持輕盈體態的同時，增加血液的載氧量，越動越年輕，還能活化大腦細胞，享受一場又一場愉悅的腦內啡旋風。</p><h2>青鳥瑜珈室 Body & Soul </h2><p>瑜珈讓你傾聽身體的聲音，伸展緊繃的肌肉伸，意識與四肢同時放鬆，靈魂與身體有了彈性延展。調息冥想中，憂煩與僵硬都歸於寧靜，傾聽身體的聲音，找回人神合一的平衡。</p>'},
        { name:'空中閣樓',title:'空中閣樓 Attic', des:'<p>無論晴雨，閱狷聲的空中廚房都為歡聚敞開。在空中廚房與家人好友共同完成料理。舉辦多人饗宴時，上樓便是另一室延伸餐廳，與知己好友品茗美好的四季光景。</p><div class="m-logo"><img src="static/img/archi-logo3.png"/></div><p>1976年成立Magis，運用其可塑性及色彩鮮豔特質，創造突破傳統家具形式的活潑作品，呈現最新穎、幽默的創意。</p>'},
        { name:'空中宴會',title:'花間空中宴會區 Banquet', des:'<p>行雲流水的空間饗宴，彷彿接受大樹的邀約，與知己好友宴飲，席間共享天光雲影，花間品茗酒酣茶香皆宜人。</p>'},
        { name:'停車場',title:'停車場 Parking', des: '<p>精品規格打造閱狷聲的所有細節，選用安全堅實的捲門，從車道入口便感受快速與安靜，給予每位重視品質的住戶尊榮待遇。細節中醞釀藝術，動態警示燈採用水流線條，讓色彩斑斕的波光在牆上流動，停車也是件浪漫的事。</p><p> <strong>-ETC 車輛管控系統	</strong></p><p>有車上 ETC 核對進出車輛，住戶無需再在拿遙控器控制</p><p> <strong>-大樓通訊	</strong></p><p>停車場、電梯均有行動電話收訊以確保住戶方便及安全</p><div class="parking-logo"><img src="static/img/parking-logo.png"/></div><p> <strong>-德國 EFAFLEX 飛梭門</strong></p><p>不只是追求快速，安全更是核心價值以安全、快速、耐用聞名全球，號稱全世界最快的電動捲門，一秒可達 4.5 公尺，也是全球第一間致力研發「安全快速門」的門業大廠，至今 42 年已締造無數專利與創新。</p>'}
      ],
      lifeShow: 0 ,
      lives: [
        { html:'<div class="content"><div class="picBox por"><div class="pic"><img class="none-m" src="static/img/4-2-1.jpg"/><img class="none-pc" src="static/img/4-2-1-m.jpg"/></div><div class="pic2 abs"><img src="static/img/4-2-2.png"/></div><div class="pic3 abs"><img src="static/img/4-2-3.png"/></div></div><div class="txt"><h2 class="tt-page">音樂篇</h2><h3>兩廳院 中正紀念堂</h3><p class="main-p">兩廳院，穿梭在一個又一個大師之間。馬友友、巴哈、瑪莎葛蘭姆、韓德爾⋯⋯從古典到新潮，從音樂到舞台劇，在藝術殿堂裡演繹一場又一場曠世巨作。閱狷聲之「聲」，便是納入兩廳院，當藝術成為日常，生活便絕無冷場。</p><p class="main-p">視線跟隨中正紀念堂內的三軍儀隊的標槍，甩上半空，整齊肅穆的交接儀式，收穫不少觀光客的閃光燈。從閱狷聲漫步而來不過十分鐘，過往的歷史現場擺脫嚴肅，廣場容納市民日常活動。入夜後的燈光，自由廣場之上，照耀出風情萬種。</p></div></div><div class="bg abs none-m"><img src="static/img/bg-4-2.png"/></div>'},
        { html:'<div class="left"></div><div class="right"></div><div class="txt"><h2 class="tt-page">文人篇</h2><h3>齊東街 永康街 青田街 <span class="break-m">台大法商學院</span></h3><p class="main-p">閱狷聲位在京畿重地，曾經的高級軍官特區，如今化身藝文基地。齊東詩舍上傳來琅琅讀詩聲，台大法商學院與官邸藝文沙龍對望，一路散步重拾浪漫情懷。</p><p class="main-p">繞到永康街上，熟門熟路像走入自家。不疾不徐喝杯茶，離開喧囂，恍如置身世外桃花源。</p></div>'},
        { html:'<div class="bgBox1 bgBox"><div class="box1"></div><div class="box2"></div><div class="box3"></div><div class="box4"></div><div class="box5"></div><div class="box6"></div><div class="box7"></div><div class="box8"></div></div><div class="bgBox2 bgBox"><div class="box1 none-m"></div><div class="box2 none-m"></div><div class="box3 none-m"></div><div class="box4 none-m"></div><div class="txtbox"><div class="txt-life"><h2 class="tt-page">生活篇</h2><h3>東門市場 大安森林公園 <span class="break-m">華山藝文特區</span></h3><p class="main-p">東門市場號稱是官夫人們的廚房，來自五湖四海的道地家鄉味、道地小吃與手藝製品，讓東門市場吃喝逛買一應俱全。老店舖、老字號更是東門市場的珍貴資產。從閱狷聲散步過去，吃一碗四十年不變的米粉湯，生活增添更多豐饒滋味。</p><p class="main-p">在繁忙的生活之中換口氣。傍晚從閱狷聲出發，一路往大安森林公園。跑入林間將都市塵囂隔離，圍繞在365度立體聲的鳥鳴花香中，只需跟隨心跳，把日子放鬆，打通無聊的任督二脈，享受汗暢淋漓的痛快。</p><p class="main-p">華山藝文中心，盛產文青的文青聖地，國際大展的台北第一站首選，囊括五湖四海各式奔放的創意與表演，在華山搬演一場場大秀。展覽在秀，人也在秀。在華山，恣意走出自己的潮路線，日子也跟著潮起來。</p></div></div><div class="box5 none-m"></div><div class="box6 none-m"></div><div class="box7 none-m"></div><div class="box8 none-m"></div></div><div class="bgBox3 bgBox none-m"><div class="box1"></div><div class="box2"></div><div class="box3"></div><div class="box4"></div></div>'},
        { html:'<div class="pic"></div><div class="txt abs"><h2 class="tt-page">交通篇</h2><h3>東門捷運站（雙捷運線）</h3><p class="main-p">在東門捷運站猶如閱覽都會櫥窗，肩負市區捷運樞紐大任，蘆洲南勢角線與淡水信義線雙捷運轉乘站，帶來源源不絕的人潮與商機．東門捷運站因而成為燙金交會站。</p><p class="main-p">閱狷聲身處交通精華地段，沿街散步就是一場都會饗宴，日子之中品味豐富的飲食與精品層次。</p></div>'},
      ],
      arrowTheme: 'arrow-b',
      options: { "inline": false,  "navbar": false, "title": false, "toolbar": false, "tooltip": false, "movable": true, "zoomable": true, "rotatable": false, "scalable": true, "transition": false, "fullscreen": false, "keyboard": false, "url": "data-source" },

    }
  },
  components:{
    Nav,
    detectDevice
  },
  computed: {
    currentPage() { 
      return this.$store.state.isClick;
    },
  },
  watch: {
    currentPage() {
      if(this.$store.state.isClick) {
        //  console.log('click',this.threshold_4);
         this.gotoPage(this.$store.state.show+1);
      }
    }
  },
  mounted() {
    var vue = this;
    vue.$body = (window.opera) ? (document.compatMode == "CSS1Compat" ? $('html') : $('body')) : $('html,body');

    this.$nextTick( ()=> { 


      $(window).on('resize',function(){
        vue.reSize();
      })

      $(window).on('load',function(){
        vue.reSize();
        vue.firstLoad = false;
      })
      
      $(window).on('scroll',function(){
        if(!vue.isScrolling && !vue.firstLoad) {
          var scroll = Number($(window).scrollTop()); 
          // console.log(scroll,  vue.threshold_0,  vue.threshold_1 );
          
          if( scroll < vue.threshold_1 ){
              if( vue.$store.state.show ===-1) return;
              vue.$store.commit('scrollHandler', true);
              vue.$store.commit('nav',{ num:-1, click:false }); 
              
              
          } else {
              vue.$store.commit('scrollHandler', false);
              if( scroll >= vue.threshold_1 && scroll < vue.threshold_2 ) {
                  if( vue.$store.state.show ===0) return;
                  vue.$store.commit('nav',{ num:0, click:false }); 
                  return;

              } else if ( scroll >= vue.threshold_2 && scroll < vue.threshold_3 ){
                  if( vue.$store.state.show ===1) return;
                  vue.$store.commit('nav',{ num:1, click:false });
                  vue.temp_show = 1;
                  return;

              } else if ( scroll >= vue.threshold_3 && scroll < vue.threshold_4 - window.innerHeight/1.7 ){
                  if( vue.$store.state.show ===2) return;
                  vue.$store.commit('nav',{ num:2, click:false });
                  vue.temp_show = 2;
                  return;

              } else if ( scroll >= vue.threshold_4 - window.innerHeight/1.7 ) {
                  console.log('4', scroll, vue.threshold_4 - window.innerHeight/1.7);
                  if( vue.$store.state.show === 3 ) return;
                  vue.$store.commit('nav',{ num:3, click:false });
                  vue.temp_show = 3;               
              }
          }      
        }
      })

      $(window).on("orientationchange",function(){
        vue.firstLoad = true;
        vue.reSize();
      })

    
    })
    // console.log('this is current swiper instance object', this.swiper)
  },
  methods:{
    reSize(){
      
      if (navigator.userAgent.match(/Android|BlackBerry|iPhone|iPad|iPod|Opera Mini|IEMobile/i) && this.firstLoad) {
        this.firstLoad = false;
        $(this.$refs.kv).css({height: window.innerHeight});
        // alert('inner:'+window.innerHeight+', availHeight:'+screen.availHeight )
      } 

      this.windowHeight = window.innerHeight;
      // this.threshold_0 = this.windowHeight-85;
      this.threshold_1 = this.windowHeight-85;
      this.threshold_2 = $(this.$refs.space)[0].offsetTop -75;
      this.threshold_3 = $(this.$refs.life)[0].offsetTop -75;
      this.threshold_4 = $(this.$refs.info)[0].offsetTop -75;
      console.log(this.windowHeight);
      
    },

    gotoPage(val) {
      var vue = this;
      vue.isScrolling = true;
      var el = $('.wrap>section').eq(val)[0].offsetTop;
      vue.$body.animate({ scrollTop: el }, 800);
      setTimeout(function(){
            vue.isScrolling = false;
      },800)
    },
    archiHandler(val) {
      var newVal = this.archiShow + val;
      if(newVal < 0) newVal = this.archis.length-1;
      if(newVal >= this.archis.length ) newVal = 0;
      this.archiShow = newVal;
    },
    spaceHandler(val) {
      var newVal = this.spaceShow + val;
      if(newVal < 0) newVal = this.spaces.length-1;
      if(newVal >= this.spaces.length ) newVal = 0;
      this.spaceShow = newVal;
      this.closeDetail = true;
    },
    detailHandler() {
        this.closeDetail=!this.closeDetail;
        $(this.$refs.txt).slideToggle(600);
    },
    lifeHandler(val) {
     
      var newVal = this.lifeShow + val;
      if(newVal >= this.lives.length ) newVal = 0;
      
      if(newVal < 0) {
        newVal = this.lives.length-1;
        this.arrowTheme = 'arrow-b'
      } else {
        if(newVal===3) {
          this.arrowTheme = 'arrow-b'
        } else {
          this.arrowTheme = 'arrow-w';
        }
        
      }
      this.lifeShow = newVal;
      //  console.log(this.lifeShow, this.lives.length );
    },
    show() {
      const viewer = this.$el.querySelector('.map').$viewer
      viewer.show();
    }
  }
}
</script>

<style lang="scss">
  *{
      webkit-touch-callout: none;
      -webkit-tap-highlight-color: rgba(255, 255, 255, 0);
  }
  .for_kv{
    width: 80px;
    height: 100px;
    bottom: 0;
    left: 50%;
    margin-left: -40px;
  }

  .float{
    width: 100%;
    height: 100%;
    z-index: 5;
    position: absolute;
    opacity: 0;
  }
  .viewer-container .viewer-button {
    background-color: rgba(0, 0, 0, 0.8);
    height: 50px;
    right: 6px;
    top: 6px;
    width: 50px;
  }
  .viewer-container .viewer-button::before {
      background-image: url('/static/images/close.png');
      background-position: 50%;
      background-size: 40px;
  }

  @media screen and (max-width: 767px) {
    // li.hide {
    //     opacity: 0;
    // }
    .arrow-b .next:after {
      border-color: transparent transparent transparent white;
    }
    .arrow-w a:after {
        border-color: transparent white transparent transparent;
    }
    .arrow-b a:after {
        border-color: transparent white transparent transparent;
    }

  }

</style>