<template>
  <div>
    <a href="#" v-if="isLiked" @click.prevent="unLike(wave)">
            <button class="btn" type="submit" >UnLike</button>
     </a>
     <a href="#" v-else @click.prevent="like(wave)">
            <button class="btn" type="submit">Like</button>
     </a>                 
</div>
</template>

<script>
    export default {
        name: "Likes",
        props: [
        'wave',
        'liked'
         ],
     data: function() {
          return {
          isLiked: '',
          
     };
        },
        mounted() {
            this.isLiked = this.isLike ? true : false;
        },
        computed: {
            isLike() {
                return this.liked;
            }
        },
        methods: {
             toggleLike: function()
        {
            if(this.liked) {
            this.unlike()
            } else {
            this.like();
            } 
        },
            like(wave) {
                 this.text = 'Unlike';
                axios.wave('/like' + wave)
                    .then(response => this.isLiked = true)
                    .catch(response => console.log(response.data));
            },
            unLike(wave) {
                 this.text = 'Like';
                axios.wave('/unlike/ + wave')
                    .then(response => this.isLiked = false)
                    .catch(response => console.log(response.data));
            }
        }
    };
</script>

<style>
</style>