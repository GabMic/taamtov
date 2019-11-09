<template>
    <div class="card">
        <div class="card-image">
            <figure class="image is-4by3">
                <img src="/storage/photos/apples.jpg" alt="Placeholder image">
            </figure>
        </div>
        <div class="card-content">
            <div class="media">
                <div class="media-left">
                    <figure class="image is-48x48">
                        <img :src="likeIcon" @click="like(recipe)" v-if="signedIn">
                        <img src="/storage/icons/like-blue.png"  @click="$emit('isComponentModalActive', true)" v-if="!signedIn">
                    </figure>
                </div>
                <div class="media-content">
                    <h5 class="title is-5">{{recipe.name}}</h5>
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
        props: ['recipe','liked'],
        data(){
            return{
                likeIcon: "",
                signedIn: window.taamtovUser.signedIn,
            }
        },

        created(){
            if(this.liked.includes(this.recipe.id)){
                this.likeIcon = "/storage/icons/like.png"
            }else{
                this.likeIcon = "/storage/icons/like-blue.png"
            }

        },

        methods: {
            like(recipe){

                if(this.liked.includes(recipe.id)){
                    this.unlike(recipe);
                }else{
                    this.liked.push(recipe.id);
                     axios.post(`/like/${recipe.slug}`, {
                    recipe: recipe
                   }).then((response)=>{
                     this.likeIcon = "/storage/icons/like.png"
                   });
                }

            },


            unlike(recipe){
                let id = recipe.likes[0].id;
                console.log(this.liked, id);
                axios.delete(`/like/${id}`).then((response) => {
                        console.log(response);
                         this.likeIcon = "/storage/icons/like-blue.png"
                })
            }
        }
    }
</script>
