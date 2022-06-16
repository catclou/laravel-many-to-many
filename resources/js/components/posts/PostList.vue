<template>
    <div>
        <ul>
            <li v-for="post in posts" :key="post.id">
                {{post.title}}
            </li>
        </ul>
    </div>
</template>

<script>

import axios from 'axios';

export default{
    name: 'PostsList',
    data(){
        return{
            posts: [],
        }
    },
    methods: {
        getPosts(){
            axios.get("http://127.0.0.1:8000/api/posts")
            .then( (res) => {
                console.log(res.data);
                this.posts = res.data.posts;
            } )
        }
    },
    mounted(){
        this.getPosts();
    }
}
</script>

<style scoped>
    h1 {
        color: turquoise;
    }
</style>
