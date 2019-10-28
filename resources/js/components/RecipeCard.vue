<template>
    <div class="card">
        <div class="card-image">
            <figure class="image is-4by3">
                <img src="https://bulma.io/images/placeholders/1280x960.png" alt="Placeholder image">
            </figure>
        </div>
        <b-modal :active.sync="isComponentModalActive"
                 has-modal-card
                 aria-role="dialog"
                 aria-modal>
            <section>
                <div class="modal-card m-1" style="width: auto">
                    <header class="modal-card-head">
                        <h6 class="subtitle is-6">התחברו או הירשמו כדי לסמן לייק למתכונים</h6>
                    </header>
                    <section class="modal-card-body">

                        <a class="button is-outlined is-info" href="/login">התחברו</a>
                        <a class="button is-outlined is-info" href="register">הירשמו בחינם</a>

                    </section>
                    <footer class="modal-card-foot">
                        <button class="button" type="button" @click="isComponentModalActive = false">ביטול</button>
                    </footer>
                </div>

            </section>
        </b-modal>
        <div class="card-content">
            <div class="media">
                <div class="media-left">
                    <figure class="image is-48x48">
                        <img :src="likeIcon" @click="like(recipe)" v-if="signedIn">
                        <img src="/storage/icons/like-blue.png"  @click="isComponentModalActive = true" v-if="!signedIn">
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
                isComponentModalActive: false
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
