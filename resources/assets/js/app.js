
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

Vue.component('topo-component', require('./components/Topo.vue'));
Vue.component('painel-component', require('./components/Painel.vue'));
Vue.component('caixa-component', require('./components/Caixa.vue'));
Vue.component('pagina-component', require('./components/Pagina.vue'));
Vue.component('tabela-lista-component', require('./components/TabelaLista.vue'));
Vue.component('migalhas-component', require('./components/Migalhas.vue'));
Vue.component('modal-component', require('./components/modal/Modal.vue'));
Vue.component('modal-link-component', require('./components/modal/ModalLink.vue'));
Vue.component('formulario-component', require('./components/Formulario.vue'));

const app = new Vue({
    el: '#app'
});
