<template>
<div class="columns is-multiline" style="direction: rtl">
    <div class="column is-3" v-for="(recipe, index) in recipes" :key="index" >
          <recipe-card :recipe="recipe" :liked="liked"></recipe-card>
    </div>
</div>
</template>

<script>
    export default {
        props: ['recipes', 'liked']
    }
</script>
