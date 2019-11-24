<template>
<div class="columns is-multiline m-1" style="direction: rtl">
    <div class="column is-3" v-for="(recipe, index) in recipes" :key="index" >
          <recipe-card :recipe="recipe" :liked="liked" @isComponentModalActive="isComponentModalActive = true"></recipe-card>
    </div>

        <b-modal :active.sync="isComponentModalActive"
             has-modal-card
             aria-role="dialog"
             aria-modal
             >
        <section>
            <div class="modal-card m-1" style="width: auto">
                <header class="modal-card-head">
                    <h6 class="subtitle is-6">התחברו או הרשמו כדי לאהוב מתכונים</h6>
                </header>
                <section class="modal-card-body">

                    <a href="/login">התחברו</a> או
                    <a href="/register">הירשמו חינם</a>

                </section>
                <footer class="modal-card-foot">
                    <button class="button is-dark is-outlined is-fullwidth" type="button" @click="isComponentModalActive = false">ביטול</button>
                </footer>
            </div>

        </section>
    </b-modal>
</div>
</template>

<script>
    export default {
        props: ['recipes', 'liked'],

        data(){
            return{
                isComponentModalActive: false
            }
        }
    }
</script>
