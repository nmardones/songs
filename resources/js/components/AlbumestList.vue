<template>
        <ul>
            <li v-for="album in albumes">{{ album.name}} {{ album.date}}</li>
        </ul>
</template>

<script>
    export default {
        data(){
          return{
              albumes:[],
          }
        },
        created() {

            axios.get('/album')
                .then(res => {
                    this.albumes = res.data;
                })
                .catch(err => {
                    console.log(err.response.data)
                });
        }
    }
</script>
