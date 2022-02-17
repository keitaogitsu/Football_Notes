<template>
    <div class="text-center">
        <v-dialog
        v-model="dialog"
        width="800"
        >
            <template v-slot:activator="{ on, attrs }">
                <v-btn
                color="primary"
                dark
                v-bind="attrs"
                v-on="on"
                >
                    投稿する
                </v-btn>
            </template>
                            
            <v-card　class="mb-4">
                <v-card-text>
                    <v-select
                     v-model="cate"
                     :hint="`${cate.name}, ${cate.step}`"
                     :items="categories"
                     item-text="name"
                     item-value="name"
                     label="項目"
                     persistent-hint
                     return-object
                    >
                    </v-select>
                </v-card-text>
                
                
                <div v-if="cate && cate.name=='練習'">
                    <create-practice-component
                      @create-practice="createPractice"
                    ></create-practice-component>
                </div>
                
                <div v-if="cate && cate.name=='試合'">
                    <create-match-component
                        @create-match="postMatch"
                    ></create-match-component>
                </div>
                
                <div v-if="cate && cate.name=='フリー'">
                    <create-free-component
                        @create-free="postFree"
                    ></create-free-component>
                </div>
            </v-card>
        </v-dialog>
     </div>
</template>

<script>
    import createPracticeComponent from './CreatePracticeComponent'
    import createMatchComponent from './CreateMatchComponent'
    import createFreeComponent from './CreateFreeComponent'
    export default {
        name: 'createPostDialog',
        components: {
            createPracticeComponent,
            createMatchComponent,
            createFreeComponent,
            
        },
        data () {
            return {
                dialog: false,
                e1: 1,
                cate: { name:'', step: 2 },
                categories: [
                    { name: '練習'  , step: 4 },
                    { name: '試合'  , step: 3 },
                    { name: 'フリー', step: 3 },
                ],
            }
        },
        watch: {
            
        },
        methods: {
           createPractice(x) {
                console.log(x);
                this.$emit('create-practice',x);
               this.dialog = false;
           },
           postMatch(x) {
               console.log(x);
               this.dialog = false;
           },
           postFree(x) {
               console.log(x);
               this.dialog = false;
           }
        },
        mounted() {
            console.log("")
        },
    };
</script>