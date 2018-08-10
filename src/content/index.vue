<template>
  <div class="wrap">
      <main>
        <img src="/static/img/logo-index.png"/>
      </main>
  </div>
</template>

<script>
  export default {
    name: 'index',
    data(){
      return {
        styleTag: null
      }
    },
    updated() {
    },
    mounted() {
      this.$nextTick( ()=> {
        this.styleTag=document.createElement("link")
        this.styleTag.setAttribute("rel", "stylesheet")
        this.styleTag.setAttribute("type", "text/css")
        this.styleTag.setAttribute("href", '/static/css/index.css')
        document.getElementsByTagName("head")[0].appendChild(this.styleTag)
      })
    },
    destroyed() {
        document.getElementsByTagName('head')[0].removeChild(this.styleTag);
    },
    methods: {
     
    }
  }
</script>
