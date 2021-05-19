<template>
<div class="container">
            <div class="form-row">
                <div class="col">
                    Enter Names:<br>
                    <input type="text" class="form-control" placeholder="enter names">
                </div>
                <div class="col">
                    Enter Total Person:<br>
                    <input type="text" class="form-control" v-model="check" placeholder="enter total person" required>
                </div>
            </div>
               <br>  
            <button class="btn btn-primary" v-on:click="click"> Select Seat </button> 
        
        <div v-if="seen" class="row mt-5">
        <div class="col-3">
            <div v-for="n in 11 ">
                <input type="checkbox" id="item" value="raj" v-model="checkitem" /> 
                <input type="checkbox" id="item" value="raj" v-model="checkitem" />
                <input type="checkbox" id="item" value="raj" v-model="checkitem" />
                <input type="checkbox" id="item" value="raj" v-model="checkitem" />
                <input type="checkbox" id="item" value="raj" v-model="checkitem" />
                <input type="checkbox" id="item" value="raj" v-model="checkitem" />
                <input type="checkbox" id="item" value="raj" v-model="checkitem" />
                <input type="checkbox" id="item" value="raj" v-model="checkitem" />
                <input type="checkbox" id="item" value="raj" v-model="checkitem" />
            </div>
        </div>
        <div class="col-3">
            <div v-for="n in 8">
                <input type="checkbox" id="item" value="raj" v-model="checkitem" /> 
                <input type="checkbox" id="item" value="raj" v-model="checkitem" />
                <input type="checkbox" id="item" value="raj" v-model="checkitem" />
                <input type="checkbox" id="item" value="raj" v-model="checkitem" />
                <input type="checkbox" id="item" value="raj" v-model="checkitem" />
                <input type="checkbox" id="item" value="raj" v-model="checkitem" />
                <input type="checkbox" id="item" value="raj" v-model="checkitem" />
                <input type="checkbox" id="item" value="raj" v-model="checkitem" />
                <input type="checkbox" id="item" value="raj" v-model="checkitem" />
            </div>
        </div>
        <div class="col-3">
            <div v-for="n in 11">
                <input type="checkbox" id="item" value="raj" v-model="checkitem" /> 
                <input type="checkbox" id="item" value="raj" v-model="checkitem" />
                <input type="checkbox" id="item" value="raj" v-model="checkitem" />
                <input type="checkbox" id="item" value="raj" v-model="checkitem" />
                <input type="checkbox" id="item" value="raj" v-model="checkitem" />
                <input type="checkbox" id="item" value="raj" v-model="checkitem" />
                <input type="checkbox" id="item" value="raj" v-model="checkitem" />
                <input type="checkbox" id="item" value="raj" v-model="checkitem" />
                <input type="checkbox" id="item" value="raj" v-model="checkitem" />
            </div>
        </div>
            <form v-on:submit.prevent="clk">
                <button class="btn btn-warning float-right">Booking Confirm</button>
            </form>
        </div>
</div>
</template>

<script>
    var id = window.location.href.split('/').pop();
     export default {
        data(){
            return{
               seen :false,
               check:'',
               id:id,
            }

        },
        methods: {
            clk() {
                 let data=new FormData();
                data.append('m_id',id)
                data.append('totalperson',this.check)
                axios.post('/booking',data)
                window.location.href = '/ticket/'+this.id;
            },
	
            click(){
                this.seen=true;
            }
        },
        mounted(){
        }
    }
</script>
