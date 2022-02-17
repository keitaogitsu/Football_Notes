<template>
    <v-navigation-drawer
      v-model="drawer"
      app
      permanent
      style="margin-top: 63px;"
    >
        <v-sheet
          color="grey lighten-4"
          class="pa-4"
        >
            <v-avatar
              class="mb-4"
              color="grey darken-1"
              size="64"
            ></v-avatar>
            <div>{{ user.email }}</div>
        </v-sheet>
                
        <v-divider></v-divider>
                
        <v-list
          nav
          dense
        >
            <v-list-item-group
              v-model="selectItem"
              color="primary"
            >
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
                <create-post-dialog @updatePost="$listners['parentFunc']"></create-post-dialog>
                
            </v-list-item-group>
        </v-list>
    </v-navigation-drawer>
</template>

<script>
    export default {
        name: 'sidebar',
        components: {
            
        },
        data () {
            return {
                user: "",
                selectItem: 0,
                items: [
                    { title: 'すべて'},
                    { title: '目標' },
                    { title: '練習' },
                    { title: '試合' },
                    { title: 'フリー' },    
                ],
            }
        },
        mounted() {
            axios.get("/user").then(response => {
                this.user = response.data;
            });
        },
    };
</script>