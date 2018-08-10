<template>
  <div id="wrapper">
    <Nav />
    <router-view></router-view>
  </div>  
    
</template>

<script>
import Nav from './components/Nav'                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      

export default {
  name: 'Index',
  data() {
    return {
    }
  },
  methods: {
    change(){
    }
  },
  watch:{
    $route (to, from){
      console.log(to.name);
        this.$store.dispatch('navAndTheme', to.name);
    }
  }, 
  components: {
    Nav
  },
  beforeMount() {
      this.$store.dispatch('navAndTheme', this.$route.name);
      
  },
  mounted() {
      
  },
  computed: {
    username () {
      // 我们很快就会看到 `params` 是什么
      return this.$route.params.username
    }
  },
}
</script>

<style lang="scss">
  @import '~/static/css/init.css';
</style>
