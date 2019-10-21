<template>
    <div class="card">
        <div class="card-image">
            <figure class="image is-4by3">
                <img src="https://bulma.io/images/placeholders/1280x960.png" alt="Placeholder image">
            </figure>
        </div>
        <div class="card-content">
            <div class="media">
                <div class="media-left">
                    <figure class="image is-48x48">
                        <img :src="likeIcon" @click="like(recipe)">
                    </figure>
                </div>
                <div class="media-content">
                    <p class="title is-4">{{recipe.name}}</p>
                    <p class="subtitle is-6">מתכון מאת: {{recipe.user.name}}</p>
                </div>
            </div>

            <div class="content">
                {{recipe.description}}
                <br>
                <time datetime="recipe.created_at">{{recipe.created_at}}</time>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['recipe'],
        data(){
            return{
                likeIcon: "/storage/icons/like-blue.png",
                liked: taamtov.likedRecipesIds
            }
        },

        created(){

            if(this.liked){
                this.likeIcon = "/storage/icons/like.png";
            }
        },

        methods: {
            like(recipe){
                axios.post(`/like/${recipe.slug}`, {
                    recipe: recipe
                }).then((response)=>{
                   console.log(response);
                });
            },
            unlike(recipe){

            }
        }
    }
</script>
