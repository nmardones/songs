<template>
        <tbody>
            <tr v-for="artist in artists">
                <td>{{ artist.name}}    </td>
            </tr>
        </tbody>
</template>

<script>
    export default {
        data(){
          return{
              artists:[],
              id:''
          }
        },
        created(){
            Event.$on('addSingerCreated',(res)=>{
                this.id = res;
                axios.get(`/artist/${this.id}`)
                    .then(res =>{
                        this.artists = res.data;
                    })
                    .catch(err =>{
                        console.log( err.response.data );
                    });
            });
        }
    }
</script>
