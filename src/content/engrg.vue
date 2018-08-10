<template>
  <div>
    <transition name="fade">
      <div class="wrap"><span class="page">about engrg</span>
        <main v-for="(slide, index) in data" v-show="show === index">
          <div class="engrgBox">
            <div class="left">
              <div class="pic"><img :src="'/static/img/'+slide.srcName"/>
              </div>
            </div>
            <div class="right">
              <div class="txt por" v-html="slide.title" v-if="slide.title"/>
              <div class="engrg-des" v-html="slide.des"/>
            </div>
          </div>
          <div class="sq-tab tab-mid">
            <ul>
              <li v-for="(item,index) in data"><a href="javascript:;" :class="{'active':show === index}" @click="currentHandler(index)">{{item.name}}</a></li>
            </ul>
          </div>
          <div class="arrowBox">
            <div class="arrow">
              <a href="javascript:;" @click="arrowHandler($store.state.c3_tab,-1, false)" :class="{'transparent': show === 0 }" ><span></span></a>
              <a href="javascript:;" @click="arrowHandler($store.state.c3_tab,1, false)" :class="{'transparent': show === (data.length-1) }"><span></span></a>
            </div>
          </div>
        </main>
      </div>
    </transition>
  </div> 
    
</template>

<script>
  // import canvas1 from './../canvas/C1';
  // import canvas2 from './../canvas/C2';
  // import canvas3 from './../canvas/C3';
  // import canvas4 from './../canvas/C4';
  // import canvas5 from './../canvas/C5';

  export default {
    name: 'engrg',
    data(){
      return {
        current: 0,
        show:0,
        slides: {
          0:[
            {name:'牆開囗角隅補強', srcName:'6-1-1.png', title:'<h2 class="tt-page">無微不至的細節<br>就是對居住最好的承諾</h2><span class="abs">about<br>engrg</span>',des:'<h3>牆開囗角隅補強</h3><p class="main-p">外牆上開口(門、窗)角隅設置補強筋，減少剪力裂痕。</p>'},
            {name:'雙層配筋', srcName:'6-1-2.png', title:'',des:'<h3>雙層配筋</h3><p class="main-p dot">外牆15公分</p><p class="main-p dot">符合國家標準CNS560要求，具有無輻射性污染證明</p>'}
          ],
          1:[
            {name:'窗框防水', srcName:'6-2-1.png', title:'',des:'<h3>窗框防水</h3><p class="main-p">窗台雨水不滲漏室內更乾爽</p><p class="main-p">窗台結構體不採水平施工，改以實作洩水坡度方式處理，並在窗框週邊於嵌縫完成後作一道防水層，於貼磚完成後在窗斜與外牆瓷磚之間填補矽利康，即形成三道防水可有效抗拒雨水滲漏問題，達到最佳防水效果。</p><p class="main-p dot">結構體由內向外斜，防止雨水內滲</p><p class="main-p dot">鋁窗</p><p class="main-p dot">第一道防水型水泥砂漿崁縫</p><p class="main-p dot">第二道防水單液PU填縫</p><p class="main-p dot">第三道樹脂砂漿防水層</p><p class="main-p dot">粉刷打底層</p><p class="main-p dot">貼外牆飾材</p><p class="main-p dot">第四道塞水路</p>'},
            {name:'浴室防水', srcName:'6-2-2.png', title:'',des:'<h3>雙層配筋</h3><p class="main-p dot">外牆 15 公分</p><p class="main-p dot">符合國家標準 CNS560 要求，具有無輻射性污染證明</p>'},
            {name:'浴廁防水', srcName:'6-2-3.png', title:'',des:'<h3>浴廁防水</h3><p class="main-p dot">水泥質墩座</p><p class="main-p dot">打單液 PU 填縫</p><p class="main-p dot">輕質灌漿牆(室內隔間牆)</p><p class="main-p dot">板縫間單液 PU 填縫及板材表面樹脂砂漿防水</p>'},
            {name:'屋頂防水', srcName:'6-2-4.png', title:'',des:'<h3>屋頂防水</h3><p class="main-p dot">多層防水處理，避免滲漏發生：屋頂防水層點焊鋼絲網 6 至 8 公分混凝土丶地坪裝修材鋪設。</p><p class="main-p dot">配合屋頂排水處理，如排水淺溝設計(增加排水速度，減少水停留的時間)，日本進囗高腳落水頭排水，以確實達到防水隔熱效果。</p>'},
            {name:'露台防水', srcName:'6-2-5.png', title:'',des:'<h3>露台防水</h3><p class="main-p dot">多層防水處理，避免滲漏發生：露台防水層點焊鋼絲網或玻璃纖維、1:3水泥砂漿、地坪裝修材鋪設。</p><p class="main-p dot">配合露台排水處裡,如排水淺溝設計(増加排水速度，減少水停留時間)，落水頭排水,以確實達到防水隔熱效果。</p>'}
          ],
          2:[
            {name:'排水分管', srcName:'6-3-1.png', title:'',des:'<h3>排水分管</h3><p class="main-p dot">洗衣機排水管與地板排水管獨立接管，避免其它地板落水頭產生排水不良及冒泡現象。</p><p class="main-p dot">污水管與廢水管分管排水，各系統獨立分流。</p><p class="main-p dot">採存水彎設計，有效抑制異味產生；不阻塞、不逆流。</p>'},
            {name:'給水吊管', srcName:'6-3-2.png', title:'',des:'<h3>給水吊管</h3><p class="main-p">採用明管吊管施作，當層給水管當層頂板配管，不論查修、更換皆非常便利，有別於傳統配管，樓上給水管查修、更換須至樓下，造成維修不易損失較大之情形。</p>'},
            {name:'排水配管', srcName:'6-3-3.png', title:'',des:'<h3>排水配管</h3><p class="main-p">將浴廁污廢水系統配置於自家的雙層樓版之間，當層維修時不需打擾樓下住戶。</p><p class="main-p dot">降低樓上住戶使用浴廁時，廢水經由排水管路所產生的噪音干擾。</p><p class="main-p dot">管道間排水立管為鑄鐵材質，有效降低噪音干擾。</p>'},
            {name:'防疫系統', srcName:'6-3-4.png', title:'',des:'<h3>防疫系統</h3><p class="main-p">STUDOR 排水防疫系統</p><p class="main-p">7 大健康防護設計居家防疫新利器</p><p class="main-p dot">氣密性佳:平衡排水管路系統壓力，達到絕佳的氣密效能</p><p class="main-p dot">抑制感染:有效保護存水彎水封，避免細菌及病毒的入侵</p><p class="main-p dot">氣味控管:防止穢氣於排水系統亂竄，確保社區衛生安全</p><p class="main-p dot">排水順暢:提昇排水效率，減少排水不順、水消太慢情形</p><p class="main-p dot">獨立通氣:各戶獨立小型吸氣閥設計，通氣效果不受干擾</p><p class="main-p dot">防止漏水:大型吸氣閥可防止伸頂管道間造成的漏水問題</p><p class="main-p dot">堅韌耐用:領先全台排水設計規範，可耐用長達 50 年以上</p>'}
          ],
          3:[
            {name:'Low-E玻璃', srcName:'6-4-1.png', title:'',des:'<h3>Low-E 玻璃</h3><p class="main-p">低輻射膠合玻璃使可見光穿透率60%以上，同時卻又能將多餘熱能及紫外線留在窗外，使室內外溫可差達3℃，不但節省空調用電更降低紫外線對人體和家具傷害。且具良好隔音及抗風壓性，維持室內寧靜。</p>'},
            {name:'YKK隔音氣密窗', srcName:'6-4-2.png', title:'',des:'<h3>YKK 隔音氣密窗</h3><p class="main-p">日本銷售第一品牌</p><p class="main-p">具防颱、防水、特殊隔音效果。符合中央 CNS 最高標準、S09001國際認證，防水性 75kg/m2 以上，漏氣量 2m/hr.m3 以下，耐風壓逹 360k9/m2，隔音性 35db 以上</p>'}
          ],
          4:[
            {name:'當層排氣', srcName:'6-5-1.png', title:'',des:'<h3>當層排氣</h3><p class="main-p">他案一般將浴廁抽風排氣管,銜接至管道間排放，會產生臭氣逆流污染。</p><p class="main-p">本案浴廁抽風排氣管，採直接當層室外排放方式。</p><p class="main-p">排風囗另設置防逆流下罩式排氣罩，阻絕異物侵入，防止雨水逆風倒灌。</p>'},
            {name:'活水系統', srcName:'6-5-2.png', title:'',des:'<h3>長庚生技諧振水處理器</h3><p class="main-p">吸附重金屬並過濾有機雜質，釋放人體所需微量元素水的溶氧值可提高約 40%，幫 助人類細胞抵抗氧化改便水的振盪頻率，產生界於世界長壽村水質的電磁範圍。 </p>'}
          ]
        },
      }
    },
    components: {

    },
    computed: {
        data: function(){
          return this.slides[this.$store.state.c3_tab];
        }
    },
    updated() {
      this.show = 0;
    },
    methods: {
      currentHandler: function(sub) {
        console.log(sub);
        this.show = sub;
      },
      arrowHandler: function(sub, add){
        var newVal = this.show + add;
        if( newVal<0 ) newVal= this.data.length - 1;
        if( newVal >= this.data.length ) newVal = 0;
        this.show = newVal;
      },

    },
    mounted() {
      console.log(this.slides[0]);
      this.$nextTick( ()=> {
        this.styleTag=document.createElement("link")
        this.styleTag.setAttribute("rel", "stylesheet")
        this.styleTag.setAttribute("type", "text/css")
        this.styleTag.setAttribute("href", '/static/css/engrg.css')
        document.getElementsByTagName("head")[0].appendChild(this.styleTag)

        
      })
    },
    destroyed() {
        document.getElementsByTagName('head')[0].removeChild(this.styleTag);
    }

  }
</script>
