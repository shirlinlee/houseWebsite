<template>
  <div id="wrapper">
     <detectDevice/>
     <Nav />
     <swiper :options="swiperOption" ref="mySwiper">
        <swiper-slide data-hash="kv">
          <section class="kv">
            <main><img src="/static/img/logo-index.png"/>
            </main>
            <div class="scroll">scroll<span></span></div>
          </section>
        </swiper-slide>
        <swiper-slide data-hash="archi">
           <section class="archi">
            <main>
              <div class="content por">
                <div class="buildingBox">
                  <div class="box">
                    <div class="building1"></div>
                    <div class="building2"></div>
                  </div>
                  <div class="box" style="display:none;">
                    <div class="building3"></div>
                    <div class="building4"></div>
                  </div>
                  <div class="box" style="display:none;">
                    <div class="building5"></div>
                    <div class="building6"></div>
                  </div>
                  <div class="box" style="display:none;">
                    <div class="building7"></div>
                    <div class="building8"></div>
                  </div>
                  <div class="box" style="display:none;">
                    <div class="building9"></div>
                    <div class="building10"></div>
                  </div>
                  <div class="arrowBox arrow-w">
                    <ul>
                      <li><a href="javascript:;"></a></li>
                      <li class="pageBox"><span>1</span><span>/</span><span>5</span></li>
                      <li><a class="next" href="javascript:;"></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="txt">
                <h2 class="tt-page">用建築奏生活的樂章</h2>
                <p class="main-p">立體幾何線條語彙的串連，讓閱狷聲的外觀奏出行雲流水般的樂章，曲線的緩衝，盡可能在每個環節保持光、風、音樂與空氣的流動</p>
                <p class="main-p"> <strong>- 立面石材</strong></p>
                <p class="main-p">採用背擴孔工法並採用德國 Fischer 固定件，確保石材穩固。無矽利康空縫處理不會造成石材污染</p>
                <p class="main-p"> <strong>- 結構體防水</strong></p>
                <p class="main-p">全棟大樓立面石材後方均有防水塗層  </p>
              </div>
              <div class="bg abs"><img src="/static/img/bg-3-2.png"/>
              </div>
            </main>
          </section>
        
        </swiper-slide>
        <swiper-slide data-hash="space">
          <section class="space">
            <main style="display:none;">
              <div class="picBox pic1"></div>
              <div class="des">
                <div class="desBox desBoxClose">
                  <h2>雅敘序曲 Prelude<a class="arrow" href="#"><img src="/static/asset/svg/arrow.svg"/></a></h2>
                  <p>社區入囗簡約舒泰的氣度，藉由木材樸實的個性，溫潤心情上的雜慮，閱狷聲的主人每日進出，朗闊的植栽景觀，一回家就開始儲備能量。</p>
                </div>
              </div>
            </main>
            <main style="display:none;">
              <div class="picBox pic2"></div>
              <div class="des">
                <div class="desBox desBoxClose">
                  <h2>朗朗門廳 Lobby<a class="arrow" href="javascript:;"><img src="/static/asset/svg/arrow.svg"/></a></h2>
                  <p>空間的第一樂章，挑高的氣度、留白的含蓄。在雅緻色溫、錯落層次虛實交錯間，開展深邃與層次，表現生活優悅內涵。</p>
                  <div class="v-logo"><img src="/static/img/archi-logo2.png"/>
                  </div>
                  <p>Vitra 一直是設計家具界的代表品牌，堅持與全球各地最頂尖的設計師，開發能激勵人心、啟發創意，提供身體舒適的穩定支撐與安全性的設計，成為全球最具設計文化價值的家具品牌。</p>
                </div>
              </div>
            </main>
            <main style="display:none;">
              <div class="picBox pic3"></div>
              <div class="des">
                <div class="desBox desBoxClose">
                  <h2>涵樂 SOFA<a class="arrow" href="#"><img src="/static/asset/svg/arrow.svg"/></a></h2>
                  <p>恬靜安詳的接待區，溫暖木質風格，猶如安定人心的木管樂器，可以純候客，亦可休憩獨處。讓人放鬆心情，轉換步調。</p>
                  <div class="f-logo"><img src="/static/img/archi-logo1.png"/>
                  </div>
                  <p>誕生於以生產頂級工藝家具而聞名的義大利，已歷經三代、傳承百年。</p>
                  <p>百年的精細傳統技法與經驗，對於坐具技術與材料的掌握，創造出讓人感到最舒服的支撐力與回彈力。</p>
                </div>
              </div>
            </main>
            <main style="display:none;">
              <div class="picBox pic4"></div>
              <div class="des">
                <div class="desBox desBoxClose">
                  <h2>蒙田藝文 Salon<a class="arrow" href="#"><img src="/static/asset/svg/arrow.svg"/></a></h2>
                  <p>大面落地玻璃，向自然界借景，交織出綠意通透的開闊感。結合休憩、社交、藝文、閱讀複合功能，無論朋友或家人小聚，展露全方位的會所功能。</p>
                </div>
              </div>
            </main>
            <main style="display:none;">
              <div class="picBox pic5"></div>
              <div class="des">
                <div class="desBox desBoxClose">
                  <h2>晴仰空中廚房 Gourmet<a class="arrow" href="#"><img src="/static/asset/svg/arrow.svg"/></a></h2>
                  <p>讓聚餐不只是聚餐，閱狷聲規劃空中廚房與戶外宴會廳動線相連，中島吧台設計明亮的烹調空間。嘴中品味紅酒香氣，眼裡盡賞城市夜景。微風、音樂與歡聲笑語，交織出感官的華麗饗宴。</p>
                </div>
              </div>
            </main>
            <main style="display:none;">
              <div class="picBox pic6"></div>
              <div class="des">
                <div class="desBox desBoxClose">
                  <h2>韻動健身房 Rock & Roll <a class="arrow" href="#"><img src="/static/asset/svg/arrow.svg"/></a></h2>
                  <p>健身除了身體健康，還有著讓人上癮的魅力。以專業健身器材保持輕盈體態的同時，增加血液的載氧量，越動越年輕，還能活化大腦細胞，享受一場又一場愉悅的腦內啡旋風。</p>
                  <h2>青鳥瑜珈室 Body & Soul</h2>
                  <p>瑜珈讓你傾聽身體的聲音，伸展緊繃的肌肉伸，意識與四肢同時放鬆，靈魂與身體有了彈性延展。調息冥想中，憂煩與僵硬都歸於寧靜，傾聽身體的聲音，找回人神合一的平衡。</p>
                </div>
              </div>
            </main>
            <main style="display:none;">
              <div class="picBox pic7"></div>
              <div class="des">
                <div class="desBox desBoxClose">
                  <h2>空中閣樓 Attic<a class="arrow" href="#"><img src="/static/asset/svg/arrow.svg"/></a></h2>
                  <p>無論晴雨，閱狷聲的空中廚房都為歡聚敞開。在空中廚房與家人好友共同完成料理。舉辦多人饗宴時，上樓便是另一室延伸餐廳，與知己好友品茗美好的四季光景。</p>
                  <div class="m-logo"><img src="/static/img/archi-logo3.png"/>
                  </div>
                  <p>1976年成立Magis，運用其可塑性及色彩鮮豔特質，創造突破傳統家具形式的活潑作品，呈現最新穎、幽默的創意。</p>
                </div>
              </div>
            </main>
            <main style="display:none;">
              <div class="picBox pic8"></div>
              <div class="des">
                <div class="desBox desBoxClose">
                  <h2>花間空中宴會區 Banquet <a class="arrow" href="#"><img src="/static/asset/svg/arrow.svg"/></a></h2>
                  <p>行雲流水的空間饗宴，彷彿接受大樹的邀約，與知己好友宴飲，席間共享天光雲影，花間品茗酒酣茶香皆宜人。</p>
                </div>
              </div>
            </main>
            <main>
              <div class="picBox pic9"></div>
              <div class="des">
                <div class="desBox desBoxClose">
                  <h2>停車場 Parking<a class="arrow" href="#"><img src="/static/asset/svg/arrow.svg"/></a></h2>
                  <p>精品規格打造閱狷聲的所有細節，選用安全堅實的捲門，從車道入口便感受快速與安靜，給予每位重視品質的住戶尊榮待遇。細節中醞釀藝術，動態警示燈採用水流線條，讓色彩斑斕的波光在牆上流動，停車也是件浪漫的事。</p>
                  <p> <strong>-ETC 車輛管控系統	</strong></p>
                  <p>有車上 ETC 核對進出車輛，住戶無需再在拿遙控器控制</p>
                  <p> <strong>-大樓通訊	</strong></p>
                  <p>停車場、電梯均有行動電話收訊以確保住戶方便及安全</p>
                  <div class="parking-logo"><img src="/static/img/parking-logo.png"/>
                  </div>
                  <p> <strong>-德國 EFAFLEX 飛梭門</strong></p>
                  <p>不只是追求快速，安全更是核心價值以安全、快速、耐用聞名全球，號稱全世界最快的電動捲門，一秒可達 4.5 公尺，也是全球第一間致力研發「安全快速門」的門業大廠，至今 42 年已締造無數專利與創新。</p>
                </div>
              </div>
            </main>
            <div class="arrowBox arrow-w">
              <ul>
                <li><a href="javascript:;"></a></li>
                <li class="pageBox"><span>1</span><span>/</span><span>9</span></li>
                <li><a class="next" href="javascript:;"></a></li>
              </ul>
            </div>
          </section>
        </swiper-slide>
        <swiper-slide data-hash="life">
          <section class="life">
            <main class="life1" style="display:none;">
              <div class="content">
                <div class="picBox por">
                  <div class="pic"><img class="none-m" src="/static/img/4-2-1.jpg"/><img class="none-pc" src="/static/img/4-2-1-m.jpg"/>
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
              </div>
              <div class="bg abs none-m"><img src="/static/img/bg-4-2.png"/>
              </div>
            </main>
            <main class="life2" style="display:none;">
              <div class="left"></div>
              <div class="right"></div>
              <div class="txt">
                <h2 class="tt-page">文人篇</h2>
                <h3>齊東街 永康街 青田街 <span class="break-m">台大法商學院</span></h3>
                <p class="main-p">閱狷聲位在京畿重地，曾經的高級軍官特區，如今化身藝文基地。齊東詩舍上傳來琅琅讀詩聲，台大法商學院與官邸藝文沙龍對望，一路散步重拾浪漫情懷。</p>
                <p class="main-p">繞到永康街上，熟門熟路像走入自家。不疾不徐喝杯茶，離開喧囂，恍如置身世外桃花源。</p>
              </div>
            </main>
            <main class="life3">
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
                <div class="box1 none-m"></div>
                <div class="box2 none-m"></div>
                <div class="box3 none-m"></div>
                <div class="box4 none-m"></div>
                <div class="txtbox">
                  <div class="txt-life">
                    <h2 class="tt-page">生活篇</h2>
                    <h3>東門市場 大安森林公園 <span class="break-m">華山藝文特區</span></h3>
                    <p class="main-p">東門市場號稱是官夫人們的廚房，來自五湖四海的道地家鄉味、道地小吃與手藝製品，讓東門市場吃喝逛買一應俱全。老店舖、老字號更是東門市場的珍貴資產。從閱狷聲散步過去，吃一碗四十年不變的米粉湯，生活增添更多豐饒滋味。</p>
                    <p class="main-p">在繁忙的生活之中換口氣。傍晚從閱狷聲出發，一路往大安森林公園。跑入林間將都市塵囂隔離，圍繞在365度立體聲的鳥鳴花香中，只需跟隨心跳，把日子放鬆，打通無聊的任督二脈，享受汗暢淋漓的痛快。</p>
                    <p class="main-p">華山藝文中心，盛產文青的文青聖地，國際大展的台北第一站首選，囊括五湖四海各式奔放的創意與表演，在華山搬演一場場大秀。展覽在秀，人也在秀。在華山，恣意走出自己的潮路線，日子也跟著潮起來。</p>
                  </div>
                </div>
                <div class="box5 none-m"></div>
                <div class="box6 none-m"></div>
                <div class="box7 none-m"></div>
                <div class="box8 none-m"></div>
              </div>
              <div class="bgBox3 bgBox none-m">
                <div class="box1"></div>
                <div class="box2"></div>
                <div class="box3"></div>
                <div class="box4"></div>
              </div>
            </main>
            <main class="life4" style="display:none;">
              <div class="pic"></div>
              <div class="txt abs">
                <h2 class="tt-page">交通篇</h2>
                <h3>東門捷運站（雙捷運線）</h3>
                <p class="main-p">在東門捷運站猶如閱覽都會櫥窗，肩負市區捷運樞紐大任，蘆洲南勢角線與淡水信義線雙捷運轉乘站，帶來源源不絕的人潮與商機．東門捷運站因而成為燙金交會站。</p>
                <p class="main-p">閱狷聲身處交通精華地段，沿街散步就是一場都會饗宴，日子之中品味豐富的飲食與精品層次。</p>
              </div>
            </main>
            <div class="arrowBox arrow-w">
              <ul>
                <li><a href="#"></a></li>
                <li class="pageBox"><span>1</span><span>/</span><span>4</span></li>
                <li><a class="next" href="javascript:;"></a></li>
              </ul>
            </div>
          </section>
        </swiper-slide>
        <swiper-slide data-hash="4">
          <section class="info">
            <div class="content"><a class="map por" href="javascript:;"><span class="zoom abs"><img src="/static/asset/svg/zoom.svg"/></span></a>
              <div class="detail"><img src="/static/asset/svg/info.svg"/>
              </div>
            </div>
          </section>
        </swiper-slide>
  
        <!-- <div class="swiper-pagination" slot="pagination"></div> -->

      </swiper>
  </div>  
    
</template>

<script>
import Nav from './components/Nav'    
import detectDevice from './components/detectDevice'                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  
export default {
  name: 'index',
  data() {
    // const vue = this;
    return {

    //   swiperOption: {
    //     direction: 'vertical',
    //     preventClicks : false,
    //     shortSwipes : false,
    //     slidesPerView: 1,
    //     spaceBetween: 0,
    //     speed: 300,
    //     slidesPerView: 'auto',
    //     // autoHeight: true,
    //     freeMode : true,
    //     // freeModeSticky : true,
    //     mousewheel: {
    //       sensitivity : 1.2,
    //     },
    //     on:{
    //       slideChange: function(event){
    //         console.log(this);
    //         vue.$store.commit('nav', this.activeIndex);
    //         if(this.activeIndex === 0){
    //           vue.$store.commit('scrollHandler', true);
    //         }else{
    //           vue.$store.commit('scrollHandler', false);
    //         }
    //       },
    //     },
    //   },
    }
  },
  components:{
    Nav,
    detectDevice
  },
  computed: {
    // swiper() {
      // return this.$refs.mySwiper.swiper
    // },
    currentSlide() { 
      return this.$store.state.show 
    },
  },
  watch: {
    currentSlide(newValue) {
      console.log(newValue);
      // 偵測到store改變，觸發slide
      // this.swiper.slideTo(newValue, 1000, false)
    }
  },
  mounted() {
    $(window).on('scroll',function(){
      console.log('sc');
    })
    // console.log('this is current swiper instance object', this.swiper)
  },
}
</script>


<style lang="scss">
  .swiper-wrapper {
    position: relative;
    // height: 100vh;
  }

  .swiper-box {
    width: 100%;
    // height: 100vh;
    margin: 0 auto;
  }
  .swiper-item {
    // height: 100vh;
    text-align: center;
    font-size: 18px ;
    background: #fff;
    /* Center slide text vertically */
    display: -webkit-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    -webkit-justify-content: center;
    justify-content: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    -webkit-align-items: center;
    align-items: center;
  }
  .swiper-button-next, .swiper-container-rtl .swiper-button-prev {
    right: 180px;
  }

</style>