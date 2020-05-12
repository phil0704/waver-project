<template>
  <div>
    <a href="#" v-if="isLiked" @click.prevent="unLike(waveId)">
            <button type="submit" >UnLike</button>
     </a>
     <a href="#" v-else @click.prevent="like(waveId)">
            <button type="submit">Like</button>
     </a>                 
</div>
</template>

<script>
    export default {
        name: "Likes",
        props: [
        'wave-id',
        'liked'
         ],
     data: ()
    {
      return {
          waveId: '',
          liked: false
      }
        },
        mounted() {
            this.isLiked = this.isLike ? true : false;
        },
        computed: {
            isLike() {
                return this.liked;
            },
        },
        methods: {
             toggleLike: function()
        {
            if(this.liked) {
            this.unlike()
            } else {
            this.like()
            } 
        },
            like(wave) {
                 this.text = 'Unlike';
                axios.wave('/waves/like/'+waveId)
                    .then(response => this.isLiked = true)
                    .catch(response => console.log(response.data));
            },
            unLike(wave) {
                 this.text = 'Like';
                axios.wave('/waves/unlike/'+waveId)
                    .then(response => this.isLiked = false)
                    .catch(response => console.log(response.data));
            }
        }
    }
</script>

<style>
</style>