
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import VueRouter from 'vue-router'
Vue.use(VueRouter)

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)

// files.keys().map(key => {
//     return Vue.component(_.last(key.split('/')).split('.')[0], files(key))
// })

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const Home = Vue.component('home', require('./components/home.vue'))
const Weather = Vue.component('weather', require('./components/weather.vue'))
const Search = Vue.component('search', require('./components/search.vue'))

function dynamicWoeid (route) {
    var param = route.params.woeid
    var myString = param.substring(1)
    return {
        cityWoeid: myString
    }
}
function searchFunc (route) {
    var param = route.params.keyword
    var myString = param.substring(1)
    return {
        keyWord: myString
    }
}

const routes = [
    { path: '/', component: Home },
    { path: '/Weather/:woeid', component: Weather, props: dynamicWoeid },
    { path: '/search/:keyword', component: Search, props: searchFunc }
]
const router = new VueRouter({
    routes
})

const app = new Vue({
    router
}).$mount('#app')

// Home.vue
export default {
    methods: {
        goBack () {
            window.history.length > 1
            ? this.$router.go(-1)
            : this.$router.push('/')
        }
    }
}
