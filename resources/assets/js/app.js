
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Vue.component('example-component', require('./components/ExampleComponent.vue'));

// import Hello from './components/Hello.vue'; // 引入Hello 组件
// const app = new Vue({
//     el: '#app',
//     render: h => h(Hello)
// });
//
var avatar = new Vue({
    el: '#avatar',
    data: {
        message: 'On April 19, 2018, my lovely kid take the first step in life.'
    }
});



var clock = new Vue({
    el: '#clock',
    data: {
        time: '',
        date: ''
    }
});
var week = ['星期日', '星期一', '星期二', '星期三', '星期四', '星期五', '星期六'];
var timerID = setInterval(updateTime, 1000);
updateTime();
function updateTime() {
    var cd = new Date();
    clock.time = zeroPadding(cd.getHours(), 2) + ':' + zeroPadding(cd.getMinutes(), 2) + ':' + zeroPadding(cd.getSeconds(), 2);
    clock.date = zeroPadding(cd.getFullYear(), 4) + '-' + zeroPadding(cd.getMonth()+1, 2) + '-' + zeroPadding(cd.getDate(), 2) + ' ' + week[cd.getDay()];
};
function zeroPadding(num, digit) {
    var zero = '';
    for(var i = 0; i < digit; i++) {
        zero += '0';
    }
    return (zero + num).slice(-digit);
};



new Vue({
    el: '#sudoku-demo',
    data: {
        cells: Array.apply(null, { length: 80 })
            .map(function (_, index) {
                return {
                    id: index,
                    number: index % 9 + 1
                }
            })
    },
    methods: {
        shuffle: function () {
            this.cells = _.shuffle(this.cells)
        }
    }
})