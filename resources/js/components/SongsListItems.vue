<template>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>#</th>
            <th >Name</th>
            <th>Albun</th>
            <th>Description</th>
            <th>Date</th>
            <th>Time</th>
        </tr>
        </thead>
        <tbody>
        <tr :key="song.id" v-for="song in songs">
            <td>{{ song.id }}</td>
            <td>{{ song.title }}</td>
            <td>{{ song.album.name }}</td>
            <td>{{ song.album.description }}</td>
            <td>{{ song.album.date }}</td>
            <td>{{ song.time }}</td>
        </tr>
        </tbody>
    </table>
</template>

<script>
    export default {
        data(){
          return{
              songs:[],
              id:''
          }
        },
        created(){
            Event.$on('addSingerCreated',(res)=> {
                this.id = res;
                axios.get(`/songs/${this.id}`)
                    .then(res =>{
                        this.songs = res.data
                    })
                    .catch( err => {
                        console.log(err.response.data);
                    });
            });
        }
    }
</script>
