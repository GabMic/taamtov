<template>
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

                    <button class="button is-outlined is-info">כבר רשומים? התחברו</button>
                    <button class="button is-outlined is-info">הירשמו בחינם</button>

                </section>
                <footer class="modal-card-foot">
                    <button class="button" type="button" @click="$parent.close()">ביטול</button>
                </footer>
            </div>

        </section>
    </b-modal>
</template>

<script>
    export default {
        data(){
            return{
                isComponentModalActive: this.$attrs.isComponentModalActive
            }
        },

        mounted(){
            console.log(this.$attrs)
        }
    }
</script>
