<template>
    <div class="row justify-content-center">
        <div class="col-md-8 mt-4">
            <div class="card">
                <div class="card-header">Song List</div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th >Name</th>
                            <th>Artist or Music Group</th>
                            <th>Time</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr :key="song.id" v-for="song in songs">
                            <td>{{ song.id }}</td>
                            <td><a @click="addSingerId(song.singer.id)" href="#" data-toggle="modal" data-target="#myModal">{{ song.title }}</a></td>
                            <td>{{ song.singer.name }}</td>
                            <td>{{ song.time }}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- The Modal -->
            <div class="modal" id="myModal">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h2 class="modal-title">
                                <artist-list></artist-list>
                            </h2>
                        </div>
                        <!-- Modal body -->
                        <div class="modal-body">
                            <song-list-items>

                            </song-list-items>
                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
</template>

<script>
    export default {
        data(){
            return{
                songs:[]
            }
        },
        created(){
            axios.get('/songs')
                .then(res =>{
                    this.songs = res.data
                })
                .catch( err => {
                    console.log(err.response.data);
                });
        },
        methods:{
            addSingerId: function(id){
                Event.$emit('addSingerCreated',id);
            }
        }
    }
</script>
