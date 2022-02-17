<template>
    <div>
        <v-stepper v-model="e1">
            <v-stepper-header>
                <template v-for="n in 4">
                    <v-stepper-step
                      :key="`${n}-cate.step`"
                      :complete="e1 > n"
                      :step="n"
                      editable
                    >
                        Step {{ n }}
                    </v-stepper-step>
                </template>
            </v-stepper-header>
            <v-stepper-items>
                <v-stepper-content
                  step="1"
                >
                    <v-card
                      class="mb-12"
                      height="400px"
                    >
                        <br>
                        <v-text-field 
                          outlined
                          v-model="PostForm.title"
                          label="タイトル"
                        ></v-text-field>
                        <v-text-field
                          outlined
                          v-model="PostForm.opponent"
                          label="対戦相手"
                        ></v-text-field>
                        <v-text-field
                          outlined
                          v-model="PostForm.my_score"
                          label="自チームのスコア"
                        ></v-text-field>
                        <v-text-field
                          outlined
                          v-model="PostForm.opponent_score"
                          label="相手チームのスコア"
                        ></v-text-field>
                        {{ PostForm }}
                    </v-card>
                    <v-btn
                      color="primary"
                      @click="e1 = 2"
                    >
                        次へ
                    </v-btn>
                    <v-btn 
                      @click="dialog = false"
                    >
                        キャンセル
                    </v-btn>
                </v-stepper-content>
                <v-stepper-content
                  step="2"
                >
                    <v-card
                      class="mb-12"
                      height="400px"
                    >
                        <br>
                        <v-textarea
                          outlined
                          v-model="PostForm.good"
                          label="よかったこと"
                        ></v-textarea>
                        <v-textarea
                          outlined
                          v-model="PostForm.task"
                          label="課題"
                        ></v-textarea>
                    </v-card>
                    <v-btn
                      color="primary"
                      @click="e1 = 3"
                    >
                        次へ
                    </v-btn>
                    <v-btn 
                      @click="dialog = false"
                    >
                        キャンセル
                    </v-btn>
                </v-stepper-content>
                <v-stepper-content
                  step="3"
                >
                    <v-card
                      class="mb-12"
                      height="400px"
                    >
                        <br>
                        <v-textarea
                          outlined
                          v-model="PostForm.free"
                          label="フリー"
                        ></v-textarea>
                    </v-card>
                    <v-btn
                      color="primary"
                      @click="e1 = 4"
                    >
                        次へ
                    </v-btn>
                    <v-btn 
                      @click="dialog = false"
                    >
                        キャンセル
                    </v-btn>
                </v-stepper-content>
                <v-stepper-content
                  step="4"
                >
                    <v-card
                      class="mb-12"
                      height="400px"
                    >
                       <br> 
                    </v-card>
                    <v-btn
                      color="primary"
                      @click="e1 = 1"
                    >
                        前へ
                    </v-btn>
                    <v-btn 
                      @click="dialog = false"
                    >
                        キャンセル
                    </v-btn>
                </v-stepper-content>
            </v-stepper-items>
        </v-stepper>
        <v-divider></v-divider>
        <v-card-actions>
          <v-spacer></v-spacer>
            <v-btn
            color="primary"
            @click="createPost"
            >
                投稿する
            </v-btn>
        </v-card-actions>
    </div>
</template>

<script>
    export default {
        name: 'createMatchComponent',
        data() {
            return {
                e1: 1,
                PostForm: {
                    title: "",
                    free: "",
                    good: "",
                    task: "",
                    opponent: "",
                    my_score: "",
                    opponent_score: "",
                }
            }
        },
        watch: {
            steps (val) {
                if (this.e1 > val) {
                    this.e1 = val;
                }
            }
        },
        methods: {
            createPost() {
                this.$emit('create-match', this.PostForm)
            }
        },
        mounted() {
            console.log('Component mounted.')
        },
    };
    
</script>