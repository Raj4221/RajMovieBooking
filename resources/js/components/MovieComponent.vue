<template>
<div class="container">
    <div class="row">
            <div class="col-4 mt-4" v-for="movie in movies" :key="movie.id">
                <div class="card profile-card-5">
                    <div class="card-img-block">
                        <img class="card-img-top" :src="'images/'+movie.image" alt="Card image cap">
                    </div>
                    <div class="card-body float-left pt-0">
                    <div class="row">
                        <div class=" col-8 float-left">
                                <h3>{{movie.name}}</h3>
                                <p><b>Desc:</b>{{movie.description}}</p>
                        </div>
                        <div class="float-right col-4 mt-2">
                            <a :href="'/book/'+movie.id" class="btn btn-success"><i class="fa fa-ticket" style="font-size:36px"></i></a>
                        </div>
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
                movies:'',
            }

        },
        methods: {
        getmovies(){
                axios.get('/movie').then((res)=>{
                    this.movies=res.data
                }).catch((error)=>{
                    console.log(error)
                })
            }
        },
        mounted(){
            this.getmovies()
        }
    }
</script>
