<template>
<div class="columns is-multiline">
    <div class="column is-4" v-for="(recipe, index) in recipes" :key="index">
          <recipe-card :recipe="recipe" :liked="isLiked"></recipe-card>
    </div>
</div>
</template>

<script>
    export default {
        props: ['recipes'],

        data(){
            return {
                isLiked: false,
            }
        },

        mounted() {
            window.taamtov.likedRecipesIds.includes(index) ? this.isLiked = true : this.isLiked = false;
        }
    }
</script>
