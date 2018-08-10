export default {
  // 存储状态值
  state: {
    show: 'index',
    isWebsite: false,
    c1_tab: 0,
    c2_tab: 0,
    c3_tab: 0,
    c4_tab: 0,
    c5_tab: 0,
    isBlackTheme: false
  },

  mutations: {
    // 主選單點擊, 次選單也要重新顯示第一個
    nav(state, num) {
      state.show = num;
      state.isBlackTheme = false;
    },
     // 次選單
    tab(state, tab) {
      // console.log(tab);
      state[`c${tab.tab}_tab`] = tab.num;
    },
    themeHandler(state, isblack) {
      state.isBlackTheme = isblack;
    }
  },
  // actions用于处理异步事件，最后还是需要提交mutations来改变state
  actions: {
    // 这里使用context来提交mutations
    navAndTheme (context, num) {
      // console.log(context, num);
      context.commit('nav',num);
    },
  },
  // 在store中定义getters（可以认为是store的计算属性）。Getters接收state作为其第一个函数
  getters: {
    done(state) {
      return state.count + 5;
    },
  }
}
