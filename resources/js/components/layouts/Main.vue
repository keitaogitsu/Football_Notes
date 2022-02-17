<template>
    <div class="container">
        <div class="row">
            <div>
                <sidebar @create-practice="createPractice"></sidebar>
            </div>
            <v-main>
                <v-container
                  class="py-8 px-6"
                  fluid
                >
                    <v-row>
                        <div>
                            <div v-for="post in posts" :key="post.id">
                                <div class='post'>
                                    <h2 class='title'>
                                        <a :href="'/posts/'+post.id ">{{ post.title }}</a>
                                    </h2>
                                    <p class='body'>{{ post.free }}</p>
                                    <small v-if="post.user">{{ post.user.name }}</small>
                                </div>
                            </div>
                        </div>
                    </v-row>
                </v-container>
            </v-main>
        </div>
    </div>
</template>

<script>
    import sidebar from '../posts/Sidebar';
    export default {
        name: 'Main',
        components: {
            sidebar,
        },
       data() {
            return {
                posts: [],
            }
        },
        methods: {
            getPosts() {
                axios.get('/posts')
                    .then((response)=>{
                        this.posts = response.data
                        console.log(this.posts)
                    })
            },
            createPractice(post) {
                console.log(post)
                 axios.post('/posts',post)
                 .then((res) => {
                    this.getPosts()  
                })
                .catch((err) => {
                    this.$message({
                    type: 'info',
                    message: 'ログイン失敗'
                    })
                })
                
            }
        },
        
        mounted() {
            console.log('Component mounted.')
            this.getPosts()
        }
    };
    
</script>