<template>
    <div class="text-center">
        <v-dialog
        v-model="dialog"
        width="500"
        >
            <template v-slot:activator="{ on, attrs }">
                <v-btn
                color="red lighten-2"
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
                     v-model="steps"
                     :items="[2,3,4]"
                     label="# of steps"
                    ></v-select>
                </v-card-text>
                {{ steps }}
                <v-stepper v-model="e1">
                    <v-stepper-header>
                        <template v-for="n in steps">
                            <v-stepper-step
                              :key="`${n}-step`"
                              :complete="e1 > n"
                              :step="n"
                              editable
                            >
                                Step {{ n }}
                            </v-stepper-step>
                            <v-divider
                              v-if="n !== steps"
                              :key="n"
                            ></v-divider>
                        </template>
                    </v-stepper-header>
                    <v-stepper-items>
                        <v-stepper-content
                          v-for="n in steps"
                          :key="`${n}-content`"
                          :step="n"
                        >
                            <v-card
                              class="mb-12"
                              height="200px"
                            >
                                <input type="text">
                            </v-card>
                            <v-btn
                              color="primary"
                              @click="nextStep(n)"
                            >
                                次へ
                            </v-btn>
                            <v-btn text>
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
                    text
                    @click="dialog = false"
                    >
                        投稿する
                    </v-btn>
                </v-card-actions>
            </v-card>
        </v-dialog>
     </div>
</template>

<script>
    export default {
        name: 'createPostDialog',
        data () {
            return {
                dialog: false,
                e1: 1,
                steps: 3,
            };
        },
        watch: {
            steps (val) {
                if (this.e1 > val) {
                    this.e1 = val;
                }
            }
        },
        methods: {
            nextStep(n) {
                if (n === this.steps) {
                    this.e1 = 1;
                } else {
                    this.e1 = n + 1;
                }
            }
        },
        mounted() {
            console.log('Component mounted.')
        },
    };
</script>