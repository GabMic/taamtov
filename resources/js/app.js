require('./bootstrap');

import Vue from 'vue'
import Buefy from 'buefy'
Vue.use(Buefy)

import UserTabs from "./components/UserTabs";
import RecipeCards from "./components/RecipeCards";
import RecipeCard from "./components/RecipeCard";

Vue.component('user-tabs', UserTabs);
Vue.component('recipe-cards', RecipeCards);
Vue.component('recipe-card', RecipeCard);
const app = new Vue({
    el: '#app'
});
