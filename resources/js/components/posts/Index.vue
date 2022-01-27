<template>
    <div>
        <h1>Vue使ってみた</h1>
        <div v-for="post in posts" :key="post.id">
            <div class='post'>
                <h2 class='title'>
                    <a :href="'/posts/'+post.id ">{{ post.title }}</a>
                </h2>
                <p class='body'>{{ post.free }}</p>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'postIndex',
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
            }
        },
        
        mounted() {
            console.log('Component mounted.')
            this.getPosts()
        }
    }
</script>