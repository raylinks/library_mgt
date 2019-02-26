
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

Vue.component('example', require('./components/Example.vue'));
Vue.component('login-form', require('./components/login.vue'));
Vue.component('register-form', require('./components/register.vue'));
Vue.component('add--category', require('./components/addCategory.vue'));
Vue.component('manage-category', require('./components/manageCategory.vue'));
Vue.component('add-author', require('./components/addAuthor.vue'));
Vue.component('manage-author', require('./components/manageAuthor.vue'));
Vue.component('add--shelf', require('./components/addShelf.vue'));
Vue.component('manage-shelf', require('./components/manageShelf.vue'))
Vue.component('manage-books', require('./components/manageBooks.vue'))
Vue.component('add-books', require('./components/addBook.vue'))
Vue.component('side-bar', require('./components/sidebar.vue'))
Vue.component('dashboard', require('./components/dashb.vue'))
Vue.component('issuedbooks', require('./components/issuedBooks.vue'))
Vue.component('user-dropdown', require('./components/userDropdown.vue'))
Vue.component('user-profile', require('./components/userprofile.vue'))
Vue.component('manage-issued', require('./components/manageIssuedBooks.vue'))
Vue.component('manage-issueid', require('./components/manageStudentId.vue'))
Vue.component('manage-students', require('./components/manageRegStudents.vue'))
Vue.component('edit-book', require('./components/editBook.vue'))
Vue.component('edit-category', require('./components/editCategory.vue'))
Vue.component('edit-author', require('./components/editAuthor.vue'))


Vue.component('notification', require('./components/Notification.vue'))


Vue.component('edit-shelf', require('./components/editShelf.vue'))
Vue.component('edit-issued', require('./components/editIssuedBook.vue'))

Vue.component('user-form', require('./components/userReg.vue'))

const app = new Vue({
    el: '#app'
});


Vue.filter(`formatDate`, function(value){
    if(value){
        return moment(String(value)).format(`Do/MMMM/YYYY hh:mm`)
    }
});
