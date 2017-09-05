/*
*  这里来进行路由配置
*  1.引入包
*  2.Vue.use
*  3.配置路由
*  4.将 new 出的路由实例，关联 new Vue({router:路由实例})
* */
// 1.引包
import Vue from 'vue'
import VueRouter from 'vue-router'
import Admin from './components/index/admin.vue'
import Welcome from './components/index/welcome.vue'
import Index from './components/index/index.vue'
import Login from './components/manager/login.vue'
import ShowList from './components/manager/showlist.vue'
import userIndex from './components/manager/index.vue'
import userInfo from './components/manager/info.vue'
import userAdd from './components/manager/add.vue'
import fileUpload from './components/manager/fileUpload.vue'

// 2.Vue.use()
Vue.use(VueRouter)

// 3.配置路由
var router = new VueRouter({
    routes: [
        // {name:'',path:'',component: A}
        // 这里rediret 表示跳转，如果地址栏中锚点值是 #/ 就立即自动跳转到#/admin

        {path:'/',redirect:{name:'welcome'}},
        {name:'admin',path:'/admin',component:Admin,
            children: [
                // 如果children 中的组件呈现到页面中，那么Admin 组件也一定呈现知道页面上
                {name:'index',path:'/index',component:Index,
                    children:[
                        {name:'welcome',path:'/welcome',component:Welcome},
                    ]
                },
                // manager 用户
                {name:'login',path:'/login',component:Login},
                {name:'user',path:'/manager',component:userIndex,
                    children:[
                        {name:'managerShowList',path:'/manager/showlist',component:ShowList},
                        {name:'managerInfo',path:'/manager/info',component:userInfo},
                        {name:'managerAdd',path:'/manager/add',component:userAdd,
                            children:[
                                {name:'fileUpload',path:'/file',component:fileUpload},
                            ]
                        },
                ]},

            ]
        },
    ]
})

// 暴露router
export default router