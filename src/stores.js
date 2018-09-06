export default {
  // 存储状态值
  state: {
    show: 0,
    isWebsite: false,
    onTop: true
  },

  mutations: {
    // 主選單點擊, 次選單也要重新顯示第一個
    nav(state, num) {
      console.log('store',num);
      state.show = num;
      state.isBlackTheme = false;
    },
     // 次選單
    tab(state, tab) {
      // console.log(tab);
      state[`c${tab.tab}_tab`] = tab.num;
    },
    scrollHandler(state, isTop) {
      state.onTop = isTop;
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
