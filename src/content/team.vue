<template>
  <div>
    <transition-group name="fade">
      <div class="wrap wrap-team1" :key="'tab1'" v-if="$store.state.c1_tab === 0">
          <span class="page">about team</span>
          <main>
            <div class="topBox">
              <div class="pic"><img class="none-pc" src="/static/img/2-1-m.png"/>
              </div>
              <div class="txt">
                <h2 class="tt-page">城中建築團隊理念 </h2><span class="abs">about<br/>team</span>
              </div>
            </div>
            <p class="main-p"> <span>民國 86 年，胡董事長散步經過杭州南路的靜巷，看見 50 幾坪的小土地。</span><span>像一塊安靜內斂的璞玉，讓他一眼相中，這便是閱狷聲的起點。              </span><span>之後，便是 17 年的雕琢。</span><span>從整合土地到落成，城中建築團隊在理性與感性之間經歷無數磨合，</span><span>從外觀美學、空間章節到氣質細節反覆琢治，</span><span>終於成就一顆在中正區綻放的耀眼。</span><span>建築如玉，生活亦如玉，除了本質要對，</span><span>更要用心刻畫，方能讓日子溫潤清和，怡然自樂。</span><span>閱狷聲，獻給每一個好好過日子的你。</span></p>
          </main>
      </div>
      <div class="wrap wrap-team2" :key="'tab2'" v-if="$store.state.c1_tab === 1">
        <span class="page">about team</span>
        <main>
          <h2 class="tt-page">城中實績</h2>
          <div class="content">
            <div class="box">
              <a class="cc1-1" href="javascript:;" @click="openLb('cc1-1-l.jpg', true,'' )"></a>
              <a class="cc1-2" href="javascript:;" @click="openLb('cc1-2-l.jpg', true,'' )"></a>
              <p> <span>2005 青田懷石 <span class="building2"><span class="slash">/ </span><span>2006 青田階 </span></span></span></p>
            </div>
            <div class="box">
              <a class="cc2"  href="javascript:;" @click="openLb('cc2-l.jpg', true,'' )"></a>
              <p> <span>2007 新語堂</span></p>
            </div>
            <div class="box">
              <a class="cc3-1"  href="javascript:;" @click="openLb('cc3-1-l.jpg', true,'' )"></a>
              <a class="cc3-2"  href="javascript:;" @click="openLb('cc3-2-l.jpg', true,'' )"></a>
              <p> <span>2008 青田若隱 <span class="building2"><span class="slash">/ </span><span>2011 有余</span></span></span></p>
            </div>
            <div class="box">
              <a class="cc4"  href="javascript:;" @click="openLb('cc4-l.jpg', true,'' )"></a>
              <p> <span>2012 城品</span></p>
            </div>
            <div class="box">
              <a class="cc5"  href="javascript:;" @click="openLb('cc5-l.jpg', true,'' )"> </a>
              <p> <span>2014 閱狷聲</span></p>
            </div>
            <div class="box">
              <a class="cc6-1"  href="javascript:;" @click="openLb('cc6-1-l.jpg', true,'' )"></a>
              <a class="cc6-2"  href="javascript:;" @click="openLb('cc6-2-l.jpg', true,'' )"></a>
              <p> <span>2016 愛吾家 <span class="building2"><span class="slash">/ </span><span>2018 愛吾家二期</span></span></span></p>
            </div>
          </div>
        </main>
      </div>
      <div class="wrap wrap-team3" :key="'tab3'" v-if="$store.state.c1_tab === 2"><span class="page">about team</span>
        <main class="por">
          <transition-group name="fade">
            <div class="content" v-for="(member,index,key) in members" :key="'key'+index" v-if="currentData(2,index)">
              <div class="member"><img :src="'/static/img/'+member.picName" v-if="index!==5"/></div>
              <div class="info">
                <p class="name">{{ member.name }}</p>
                <p class="title" v-html="member.title" />
                <p class="des" v-html="member.des" />
                <p class="histroy" v-html="member.histroy" />
              </div>
            </div>
            <div class="pubaoContent" :key="'key6'" v-if="currentData(2,5)">
              <div class="pubao">
                <p class="name">璞寶營造</p>
                <p class="des"> <strong>台灣璞寶營造本營建技術見證歷史</strong></p>
                <p class="des">璞寶營造，乃貫徹與實踐一璞園建築的精柛而誕生，建築的價值來目用心執行與理想堅持的過程。</p>
                <p class="des">對璞園團隊-璞寶營造來說，謍造工程是成就建築的手工藝術，以超越自己為勵、持續術研修，禮聘竹中工務店，前工務所所長田中純夫擔任顧問(田中建築)，力求規劃與工程的精益隶精，我們深刻體驗工地文化的養成並非一夕之間，璞園團隊率先做起，並懂得對環境尊重與理想堅持。</p>
                <div class="photoBox">
                  <ul>
                    <li v-for="photo in photoBoxs">
                      <div class="pic"><img :src="'/static/img/'+photo.picName"/>
                      </div>
                      <p><span class="square"></span><span>{{photo.name}}</span></p>
                    </li>
                    
                  </ul>
                </div>
              </div>
            </div>
          </transition-group>
          <div class="arrowBox">
            <div class="arrow">
                <a href="javascript:;" @click="arrowHandler(2,-1)" :class="{'transparent': current2===0 }"><span></span></a>
                <a href="javascript:;" @click="arrowHandler(2,1)" :class="{'transparent': current2===(photoBoxs.length-1) }"><span></span></a>
            </div>
          </div>
          <div class="slider">
            <ul>
              <li v-for="(item,i,key) in members.length"><a href="javascript:;" @click="currentHandler(2, i)"></a></li>
              <div class="indicator" :style="{'left': indicateHandler+'px'}"/> 
            </ul>
          </div>
        </main>
        <div class="cube"></div>
      </div>
    </transition-group>
    <LB :picName="lbPic" v-if="lbShow" @openLb="openLb" :isTeam="true" :el="el" />
 
  </div>
</template>

<script>

  import LB from './../components/LightBox'
  export default {
    name: 'team',
    data() {
      return {
        current0: 0,
        current1: 0,
        current2: 0,
        indicateLeft: 0,
        slides: [{
            name: '城中理念',
            class: '',
            tabs: [],
            imgs: ['115.png']
          },
          {
            name: '城中實績',
            class: '',
            tabs: [],
            imgs: ['150.png']
          },
          {
            name: '團隊成員',
            class: 'member',
            tabs: ['杜','倪','王','李','林','潘','璞寶營造'],
            imgs: ['115.png','150.png','115.png','150.png','115.png','150.png','']
          }
        ],
        members:[
          {picName:'team1.jpg', name:'杜希聖', title:'三大建築師事務所<span>主持人 </span>', des:'<span>建築像一首絕句，平平仄仄平。</span><span>喜歡挖掘城市的小美好，市長官邸、法商學院、徐州路。</span><span>巡禮文化過後，書香翻頁，在這樣美好藝文的城區，閱狷聲的存在不僅是人文氣質的迴響，更要充斥精彩篇章。</span><span>日常每一刻，建築的每個細節，都是詩的演繹。</span>', histroy:'<span>- 逢甲大學建築學士</span><span>- 國立成功大學建築碩士</span><span>- 台北科技大學講師</span><span>- 台灣省政府評定優良設計建築師獎</span>'},
          {picName:'team2.jpg', name:'倪伯群', title:'三大建築師事務所<span>首席建築師</span>', des:'<span>長鏡頭的凝視與想像，觀望過去土地積累的歷史記憶，倪伯群在閱狷聲感受到獨特的文化肌理。</span><span>一切就緒，只待主角登場。</span><span>以導演般的靈思妙想與精實執行力，除了整合基地環境，讓閱狷聲在仁愛與杭州路上演最完美的展演。</span>', histroy:'<span>- 美國加州大學洛杉磯分校建築碩士</span><span>- David Jay Flood Architects, Inc.美國註冊建築師 </span>'},
          {picName:'team4.jpg', name:'李文勝', title:'李文勝建築師事務所<span>主持人 </span>', des:'<span>建築是自然、人與程城市的三者平衡，</span><span>創造自然與舒適具足的空間。</span><span>建築，是從內心長出來的。</span><span>閱狷聲浸潤在文化的風土中，</span><span>順應仁愛路與杭州南路的氣質，隱而不顯，</span><span>賦予居住者有溫度的質感生活。</span>', histroy:'<span>- 大葉大學空間設計系講師</span><span>- 中國科技大學室內設計系講師</span><span>- 城鄉風貌計畫審查委員、社區規劃師</span>'},
          {picName:'team5.jpg', name:'林文宗', title:'宗誠工程顧問有限公司<span>創辦人</span>', des:'<span>安居是一個傳世的承諾。</span><span>為了使每個有夢想的好日都能孵化。</span><span>林文宗實事求是的工程師性格，讓每個在閱狷聲的好日子，有了堅強的後盾。以多年經驗嚴格把關營造工程，將閱狷聲建築理念完整落實。</span><span>嚴密結構設計與結構精算，奠定穩固基礎。漫長工程期間，林文宗以專業守護閱狷聲，讓閱狷聲在結構強度上屹立不搖，讓好日子成長茁壯。</span>', histroy:'<span>- 台灣省、台北市結構技師公會鑑定複審委員</span><span>- 台北市結構技師公會特殊結構審查委員、監事</span><span>- 76 年起為宗誠工程顧問有限公司創辦人之一</span><span>- 81 年成立宗誠結構土木技師事務所迄今</span>'},
          {picName:'team6.jpg', name:'潘冠榮', title:'潘冠榮空間設計+筑筑國際', des:'<span>在閱狷聲的空間裡，感知心靈最純粹的聲音。</span><span>潘冠榮回歸簡潔與純淨本質，在時間與空間交錯的風景裡，居住者呼吸吐吶，感受人文與自然相互依存的意義。</span><span>開放的空間場域，讓光影、綠意、微風自由穿透，串起閱狷聲的好日子，啟動如歌的日常。</span>', histroy:'<span>- 1997-2010 李瑋珉建築師事務所 總監</span><span>- 2010 潘冠榮空間設計 + 筑筑國際</span><span>- 2011 TID 商業空間大樓、TID 臨時建築金獎 細見</span><span>- 2012 日本 JCD 大賞 - CLUB DESIGNER、細見、詠真</span><span>- 2012 TID 住宅空間大獎 - 隱學、潘朵拉氳香</span><span>- 2012 TID 臨時建築評審特別獎</span><span>- 2012 TID 臨時建築大獎 - 愛麗絲的魔法蠟筆</span>'},
          {picName:'', name:'', title:'', des:'', histroy:''},
        
        ],
        photoBoxs:[
          {picName:'pubao1.png', name:'璞園信義'},
          {picName:'pubao2.png', name:'初心園'},
          {picName:'pubao3.png', name:'高過岸'},
          {picName:'pubao4.png', name:'樸山水澗'},
          {picName:'pubao5.png', name:'偕樂'},
          {picName:'pubao6.png', name:'樸建築'}
          
        ], 
        lbPic: '',
        lbShow: false,
        el: null
      }
  
    },
    components: {
        LB,
    },
    computed: {
      indicateHandler() {
        console.log(this.current2*60);
        return this.current2*60;
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
        if( newVal<0 ) newVal= this.members.length-1;
        if( newVal >= this.members.length ) newVal = 0;
        this['current'+sub] = newVal;
      },

      openLb(name, isShow, el) {
        // console.log(name, isShow);
        this.lbPic = name;
        this.lbShow = isShow;
        this.el = el;
      }
    }

  }
</script>
<style lang="scss">
  // @import '~/static/css/team.css';
  .indicator{
     transition: left .5s;
  }
</style>

