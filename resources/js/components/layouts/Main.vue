<template>
    <div class="container">
        <div class="row">
            <v-navigation-drawer
              v-model="drawer"
              app
              permanent
            >
                <v-sheet
                  color="grey lighten-4"
                  class="pa-4"
                  style="margin-top: 100px;"
                >
                    <v-avatar
                      class="mb-4"
                      color="grey darken-1"
                      size="64"
                    ></v-avatar>
                    <div>ogitsukeita@gmail.com</div>
                </v-sheet>
                
                <v-divider></v-divider>
                
                <v-list>
                    <v-list-item
                      v-for="item in items"
                      :key="item.title"
                      link
                    >
                        <v-list-item-content style="text-align: center;">
                            <v-list-item-title>{{ item.title }}</v-list-item-title>
                        </v-list-item-content>
                    </v-list-item>
                    <v-divider></v-divider>
                    <create-post-dialog></create-post-dialog>
                </v-list>
            </v-navigation-drawer>
               
            <v-main>
                <v-container
                  class="py-8 px-6"
                  fluid
                >
                    <v-row>
                        <post-index></post-index>
                    </v-row>
                </v-container>
            </v-main>
        </div>
    </div>
</template>

<script>
    import postIndex from '../posts/Index';
    import createPostDialog from '../posts/CreatePostDialog';
    export default {
        name: 'Main',
        components: {
            postIndex,
            createPostDialog
        },
        mounted() {
            console.log('Component mounted.');
        },
        data () {
            return {
                items: [
                    { title: '目標' },
                    { title: '練習' },
                    { title: '試合' },
                    { title: 'フリー' },
                ],
            }
        },
    };
    
 
</script>