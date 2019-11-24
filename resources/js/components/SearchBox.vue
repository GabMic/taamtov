<template>
    <section class="m-1" style="max-width: 400px;">
        <b-field label="חיפוש">
            <b-autocomplete
                :data="data"
                placeholder="מה בא לכם לאכול?"
                field="title"
                @focus="fetchSearchData"
                @select="option => go(option)">

                <template slot-scope="props">
                    <div class="media">
                        <div class="media-left">
                            <img width="32" src="/storage/photos/apples.jpg">
                        </div>
                        <div class="media-content">
                            {{ props.option.name }}
                        </div>
                    </div>
                </template>
            </b-autocomplete>
        </b-field>
    </section>
</template>

<script>
    export default {
        data(){
            return {
                data: [],
            }
        },

        methods:{
            fetchSearchData(){
                axios.get('/search').then((result) => {
                    this.data = result.data
                })
            },

            go(option){
               location.href = `${'/recipe/'+option.slug}`;
            }
        }
    }
</script>
