<template>
    <div>
        <div v-for="post in posts" :key="post.id">
            <div class='post'>
                <h2 class='title'>
                    <a :href="'/posts/'+post.id ">{{ post.title }}</a>
                </h2>
                <p class='body'>{{ post.free }}</p>
                <small>{{ post.user.name }}</small>
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