<template>
  <div class="wrap"><span class="page">about brand</span>
      <!--box1-->
      <section class="box1">
        <div class="content">
          <div class="pic"><img src="/static/img/1-1.jpg"/>
          </div>
          <div class="txt main-txt por">
            <h2 class="tt-page">想的 不只是好日子</h2><span class="abs">about<br/>brand</span>
            <p class="main-p">過著好日子，卻不想只是好日子<br>馬友友、瑪莎葛蘭姆、巴哈、韓德爾⋯⋯<br>聆賞音樂的日常，思緒隨著提琴手飛揚<br>為了沐浴在午後仁愛路林蔭大道的綠色光影下<br>情願放慢腳步<br>你主宰時間，也享受每刻時節</p>
            <p class="main-p">不聲張 並非不響<br>看過太多風景，聽過太多聲音<br>歷練過後更顯沈靜<br>不張揚、不落俗、不浮誇<br>縱然城市喧擾，步調依然自如<br>用生活抒情奏出一齣齣名為日常的曲目<br><strong>過好日子，更要好好過日子</strong></p>
          </div>
        </div>
        <div class="scroll abs"><span>scroll</span><span class="triangle"></span><span class="triangle"></span></div>
      </section>
      <div class="leaves abs"><img src="/static/img/leaves.png"/>
      </div>
      <!-- box2-3-->
      <div class="bg-wall por">
        <!-- box2-->
        <section class="box2">
          <div class="content">
            <div class="txt">
              <h2 class="tt-page">品讀 閱狷聲</h2>
              <p class="main-p"> <span><span>「<strong>閱</strong>」- </span><span>腹有詩書氣自華，人文氣質構築天地</span></span><span><span>「<strong>狷</strong>」- </span><span>取自論語「狂者進取，狷者有所不為也」，堅持自我，是城中對土地的堅持</span></span><span><span>「<strong>聲</strong>」-</span><span>兩廳院音樂之聲，是藝術，更是被藝術包圍的美好生活時刻</span></span></p>
              <p class="main-p">經歷風風雨雨，更渴求細水長流<br>在閱狷聲，感受靈魂慢下來的舒張<br>散步10分鐘，到兩廳院聽韓德爾<br>尋東門市場，四十年念念不忘米粉湯<br>繞進永康街喝口茶，<br>齊東街靜謐的樹與陽光下，咖啡更香<br>閱讀 賞樂 享受生活<br>把每個日子養得有滋有味<br>每個好日子 都值得好好過</p>
            </div>
            <div class="pic"><img class="none-m" src="/static/img/1-2.png"/><img class="none-pc" src="/static/img/1-2-m.png"/>
            </div>
          </div>
          <div class="scroll abs"><span>scroll</span><span class="triangle"></span><span class="triangle"></span></div>
        </section>
        <!--box3-->
        <section class="box3">
          <div class="content">
            <div class="pic"><img class="none-m" src="/static/img/1-3.png"/><img class="none-pc" src="/static/img/1-3-m.png"/>
            </div>
            <div class="main-txt txt">
              <h2 class="tt-page">仁愛路與杭州南路</h2>
              <p class="main-p">仁愛路，台北的香榭大道，從仁愛路二段轉進杭州南路靜巷，車聲喧擾歸於沉靜，水墨般的綠意在眼前渲染，暗香疏影，一片寧靜。</p>
              <p class="main-p">漫步之間，談笑皆鴻儒，與名人擦肩而過。</p>
              <p class="main-p">當年國家高級軍官的特區，總統府、一級部會、古蹟建築，穿街走巷閱讀仁愛與杭州南路交織的人文氣質，那是經歷風華洗鍊而出的地靈人傑。是歷史的演變，醞釀出獨特的地域特質。仁愛路與杭州南路，名人富商競逐首選，而一席難求。</p>
              <p class="main-p">城中建設慧眼獨具，在京畿重地看中閱狷聲的基地。經歷時光淬煉、打磨、拋光，建築自土地與文化的掌紋中長出，渾然天成的藝文氣質，隱奢低調，曖曖內含光。</p>
              <p class="main-p">在絕對可以大聲的地段，卻選擇內斂不張揚；大隱隱於市，只給想好好過日子的人。</p>
            </div>
          </div>
          <div class="bg-leave2 abs"><img src="/static/img/bg-leave2.png"/>
          </div>
        </section>
      </div>
    </div>
</template>

<script>
  export default {
    name: 'brand',
    data(){
      return {
      }

    },
    updated() {
    },
    mounted() {
      this.$nextTick( ()=> {
        this.styleTag=document.createElement("link")
        this.styleTag.setAttribute("rel", "stylesheet")
        this.styleTag.setAttribute("type", "text/css")
        this.styleTag.setAttribute("href", '/static/css/concept.css')
        document.getElementsByTagName("head")[0].appendChild(this.styleTag)
      })
    },
    destroyed() {
        document.getElementsByTagName('head')[0].removeChild(this.styleTag);
    },
    methods: {
      changeTab: function(el){
        

      }
    }
  }
</script>

