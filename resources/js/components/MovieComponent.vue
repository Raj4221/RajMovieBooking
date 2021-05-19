<template>
<div class="container">
<div class="row float-right">
    <form >
        <label>Select City:</label>
        <select name="city" id="city" v-model="selectedOption">
            <option value="ahemdabad">Ahemdabad</option>
            <option value="navsari">Navsari</option>
            <option value="valsad">Valsad</option>
        </select> 
    </form>
    </div> <br>  <br>
    <div class="row">
        <div v-for="theatre in theatres" :key="theatre.id">
            <div v-if="selectedOption == theatre.t_city">
                <div v-for="movie in movies" :key="movie.id">
                    <div v-if="movie.id == theatre.m_id" >    
                        <div class="card mb-3 w-100" style="overflow: hidden;height:360px;">
                            <div class="row">
                                <div class="col-5">
                                    <a :href="'/view_movie_detail/'+movie.id"><img :src="'images/'+movie.image" class="card-img" alt="..."></a>
                                </div>
                                <div class="col-7">
                                    <div class="card-body">
                                            <div class="row"> 
                                                <div class="float-left col-9" style="font-size:24px;">
                                                    <a :href="'/view_movie_detail/'+movie.id" style="text-decoration:none;"><h2>{{movie.name}}</h2></a>
                                                    <p><b>Desc:</b>{{movie.description}}</p>
                                                    <p><b>Teatre Name:</b> {{theatre.t_name}}</p>
                                                </div>       
                       
                                                <div class="float-right col-2 mt-2">
                                                    <a :href="'/book/'+movie.id" class="btn btn-success"><i class="fa fa-ticket" style="font-size:36px"></i></a>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
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
                theatres:'',
                selectedOption:'ahemdabad',
            }

        },
        methods: {
        getmovies(){
                axios.get('/movie').then((res)=>{
                    this.movies=res.data
                }).catch((error)=>{
                    console.log(error)
                })
            },
            gettheatre(){
                axios.get('/theatre').then((res)=>{
                    this.theatres=res.data
                }).catch((error)=>{
                    console.log(error)
                })
            }
        },
        mounted(){
            this.getmovies()
            this.gettheatre()
        }
    }
</script>
