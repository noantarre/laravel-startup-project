import './bootstrap';
require('./bootstrap');

window.Vue = require('vue').default;

Vue.component('employee-list', require('./components/EmployeeList.vue').default);

const app = new Vue({
    el: '#app',
});
