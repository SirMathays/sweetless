
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
window.Vue = require('vue');

import VueRouter from 'vue-router';
window.Vue.use(VueRouter);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

import NavBar from 'parts/NavBar.vue';
import FrontPage from 'pages/FrontPage.vue';
import Profile from 'pages/Profile.vue';

const user = {}

const routes = [
  { path: '/', component: FrontPage },
  { path: '/profile', component: Profile, props: true },
]

const router = new VueRouter({
  routes // short for `routes: routes`
})


const app = new Vue({
	router,
    el: '#app',
    data: {
    	user: user,
    },
    components: {
    	'nav-bar': NavBar,
    },
	methods: {
		getUser() {
	        var app = this;

	        axios.get('/v1/user-data')
	            .then(function (resp) {
	                app.$root.user = resp.data.user;
	            })
	            .catch(function (resp) {
	                alert("Could not load user");
	            });
		}
	},
	mounted() {
		this.getUser();
	}
});
