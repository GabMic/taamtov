require('./bootstrap');

import Vue from 'vue'
import Buefy from 'buefy'
Vue.use(Buefy)

import UserTabs from "./components/UserTabs";
import RecipeCards from "./components/RecipeCards";
import RecipeCard from "./components/RecipeCard";
import AuthModal from "./components/AuthModal";

Vue.component('user-tabs', UserTabs);
Vue.component('recipe-cards', RecipeCards);
Vue.component('recipe-card', RecipeCard);
Vue.component('auth-modal', AuthModal);
const app = new Vue({
    el: '#app'
});
