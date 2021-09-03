/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

 import * as toastr from "vuetify";

 require('./bootstrap');
 
 import Vuetify from 'vuetify'
 import vueRouter from 'vue-router'
 
 window.Vue = require('vue').default;
 
 Vue.use(Vuetify);
 Vue.use(vueRouter);
 
 /**
  * The following block of code may be used to automatically register your
  * Vue components. It will recursively scan this directory for the Vue
  * components and automatically register them with their "basename".
  *
  * Eg. ./components/MenuComponent.vue -> <example-component></example-component>
  */
 
 // const files = require.context('./', true, /\.vue$/i)
 // files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))
 
 import App from './components/App.vue'
 import Perfil from './components/Perfil.vue'
 import PerfilEmpresa from './components/PerfilEmpresa.vue'
 import RegisterForm from "./components/RegisterForm";
 import RegisterFormEmpresa from "./components/RegisterFormEmpresa.vue";
 import Pagos from "./components/Pagos";
 import Estudiante from "./components/Estudiante";
 import Articulo from "./components/Articulo";
 import Noveles from "./components/Noveles";
 
 const router = new vueRouter({
     mode: 'history',
     routes: [
         {
             path: '/perfil',
             name: 'perfil',
             component: Perfil
         },
         {
             path: '/registro',
             name: 'registro',
             component: RegisterForm
         },
         {
             path: '/ofertas',
             name: 'ofertas',
             component: Pagos
         },
         {
             path: '/ofertas_laborales',
             name: 'estudiante',
             component: Estudiante
         },
         {
             path: '/administrador',
             name: 'articulo',
             component: Articulo
         },
         {
             path: '/registro_empresa',
             name: 'registro_empresa',
             component: RegisterFormEmpresa
         },
         {
             path: '/perfil_empresa',
             name: 'perfil_empresa',
             component: PerfilEmpresa
         },
         {
             path: '/usuarios',
             name: 'usuarios',
             component: Noveles
         },
     ]
 })
 
 Vue.component('menu-component', require('./components/MenuComponent.vue').default);
 Vue.component('UpdatePassword', require('./components/UpdatePassword.vue').default);
 
 /**
  * Next, we will create a fresh Vue application instance and attach it to
  * the page. Then, you may begin adding components to this application
  * or customize the JavaScript scaffolding to fit your unique needs.
  */
 
 
 const app = new Vue({
     vuetify: new Vuetify(),
     el: '#app',
     components: {App},
     router,
 
 });
 