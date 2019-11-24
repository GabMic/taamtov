<template>
    <div class="user-tabs">
        <div class="field is-grouped tafrit">
            <p class="control">
                <button class="button is-small is-outlined is-info" @click="showBar">{{menuButtonValue}}</button>
            </p>
            <p class="control">
                <button class="button is-small is-outlined is-info" @click="logout">התנתקות</button>
            </p>
        </div>
            <b-tabs position="is-centered" class="block" v-if="show" @input="showLikedRecipes">
                <b-tab-item label="מתכונים שלי">
                    המתכונים שיצרתי
                </b-tab-item>
                <b-tab-item label="שמורים">
                    <div class="columns is-multiline">
                        <div class="column is-3" v-for="(likedRecipe, index) in likedRecipes" :key="index">
                          <recipe-card :recipe="likedRecipe" :liked="liked"></recipe-card>
                        </div>
                    </div>
                </b-tab-item>
                <b-tab-item label="שם משתמש">
                    הפרופיל שלי
                </b-tab-item>
            </b-tabs>
    </div>
</template>

<script>
    export default {
        props: ['liked'],
        data() {
            return {
                show: false,
                activeTab: 0,
                menuButtonValue: "תפריט",
                likedRecipes: null
            }
        },
        methods:{
            showBar(){
                this.show = !this.show;
                if(this.show){
                    this.menuButtonValue = "הסתר תפריט"
                }else {
                    this.menuButtonValue = "תפריט"
                }
            },
            showLikedRecipes(){
                axios.get('/liked-recipes').then(({data}) => {
                   this.likedRecipes = data;
                });
            },

            logout(){
                axios.post('/logout').then(() => {
                    location.reload()
                })
            }
        }
    }
</script>


<style scoped>
    .tafrit{
        color: black;
        position: fixed;
        top: 1rem;
        right: 0.3rem;
        border-left-style: none;
        border-right-style: none;
        border-top-style: none;
        border-bottom-color: #ab0a0a;
        border-bottom-width: 1px;
        border-radius: 0;
        padding: 0;
        box-shadow: none;
        background: white;
        cursor: pointer;
    }
    .user-tabs{
        z-index: 1000000000;
    }
</style>
