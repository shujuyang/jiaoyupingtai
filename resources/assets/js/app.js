// 引入组件和引入js 或 css 的方式相似
import Btn from './components/Btn.vue'

// vue 指的是 node_modules 中的文件夹名
import Vue from 'vue'

var vm = new Vue({
    el: '#app',
    // 实例的末班的几种方式之一
    render: function(createElement) {
        return createElement(Btn)
    }
})