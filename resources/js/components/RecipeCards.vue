<template>
<div class="columns is-multiline">
    <div class="column is-4" v-for="(recipe, index) in recipes" :key="index">
          <recipe-card :recipe="recipe" :liked="window.taamtov.likedRecipesIds.includes(index) ? true : false"></recipe-card>
    </div>
</div>
</template>

<script>
    export default {
        props: ['recipes']
    }
</script>
