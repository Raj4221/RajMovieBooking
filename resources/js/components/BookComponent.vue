<template>
<div class="container">
        <form @submit.prevent="clk">
            <div class="form-row">
                <div class="col">
                    Enter Names:<br>
                    <input type="text" class="form-control" placeholder="enter names">
                </div>
                <div class="col">
                    Enter Total Person:<br>
                    <input type="text" class="form-control" name="check" id="check" v-model="form.check" placeholder="enter total person" required>
                </div>
            </div>
               <br>  
            <button class="btn btn-primary"> SELECT SEAT </button> 
        </form>
        <div v-if="seen" class="row mt-5">
        R:<div class="col-3">
            <div v-for="n in 11 ">
                <input type="checkbox" id="item" :value="'R1'+n" v-model="checkitem" :disabled="checkitem.length >= form.check" /> 
                <input type="checkbox" id="item" :value="'R2'+n" v-model="checkitem" :disabled="checkitem.length >= form.check" />
                <input type="checkbox" id="item" :value="'R3'+n" v-model="checkitem" :disabled="checkitem.length >= form.check" />
                <input type="checkbox" id="item" :value="'R4'+n" v-model="checkitem" :disabled="checkitem.length >= form.check" />
                <input type="checkbox" id="item" :value="'R5'+n" v-model="checkitem" :disabled="checkitem.length >= form.check" />
                <input type="checkbox" id="item" :value="'R6'+n" v-model="checkitem" :disabled="checkitem.length >= form.check" />
                <input type="checkbox" id="item" :value="'R7'+n" v-model="checkitem" :disabled="checkitem.length >= form.check" />
                <input type="checkbox" id="item" :value="'R8'+n" v-model="checkitem" :disabled="checkitem.length >= form.check" />
                <input type="checkbox" id="item" :value="'R9'+n" v-model="checkitem" :disabled="checkitem.length >= form.check" />
            </div>
        </div>
        S:<div class="col-3">
            <div v-for="n in 8">
                <input type="checkbox" id="item" :value="'S1'+n" v-model="checkitem" :disabled="checkitem.length >= form.check"/> 
                <input type="checkbox" id="item" :value="'S2'+n" v-model="checkitem" :disabled="checkitem.length >= form.check"/>
                <input type="checkbox" id="item" :value="'S3'+n" v-model="checkitem" :disabled="checkitem.length >= form.check"/>
                <input type="checkbox" id="item" :value="'S4'+n" v-model="checkitem" :disabled="checkitem.length >= form.check"/>
                <input type="checkbox" id="item" :value="'S5'+n" v-model="checkitem" :disabled="checkitem.length >= form.check"/>
                <input type="checkbox" id="item" :value="'S6'+n" v-model="checkitem" :disabled="checkitem.length >= form.check"/>
                <input type="checkbox" id="item" :value="'S7'+n" v-model="checkitem" :disabled="checkitem.length >= form.check"/>
                <input type="checkbox" id="item" :value="'S8'+n" v-model="checkitem" :disabled="checkitem.length >= form.check"/>
                <input type="checkbox" id="item" :value="'S9'+n" v-model="checkitem" :disabled="checkitem.length >= form.check"/>
            </div>
        </div>
        T:<div class="col-3">
            <div v-for="n in 11">
                <input type="checkbox" id="item" :value="'T1'+n" v-model="checkitem" :disabled="checkitem.length >= form.check"/> 
                <input type="checkbox" id="item" :value="'T2'+n" v-model="checkitem" :disabled="checkitem.length >= form.check"/>
                <input type="checkbox" id="item" :value="'T3'+n" v-model="checkitem" :disabled="checkitem.length >= form.check"/>
                <input type="checkbox" id="item" :value="'T4'+n" v-model="checkitem" :disabled="checkitem.length >= form.check"/>
                <input type="checkbox" id="item" :value="'T5'+n" v-model="checkitem" :disabled="checkitem.length >= form.check"/>
                <input type="checkbox" id="item" :value="'T6'+n" v-model="checkitem" :disabled="checkitem.length >= form.check"/>
                <input type="checkbox" id="item" :value="'T7'+n" v-model="checkitem" :disabled="checkitem.length >= form.check"/>
                <input type="checkbox" id="item" :value="'T8'+n" v-model="checkitem" :disabled="checkitem.length >= form.check"/>
                <input type="checkbox" id="item" :value="'T9'+n" v-model="checkitem" :disabled="checkitem.length >= form.check"/>
            </div>
        </div>
        <p class="float-left mt-5">Seat NO : {{checkitem}}</p>
            <form v-on:submit.prevent="click">
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
              
                checkitem:[],
               seen :false,
               check:'',
               id:id,
               form: new Form({
                    check:'',
                    id:id,
                })
            }

        },
        methods: {
            clk() {
                let data=new FormData();
                data.append('m_id',this.form.id)
                data.append('totalperson',this.form.check)
                axios.post('/booking',data)
                this.seen=true;
            },         

            click(){
                window.location.href = '/ticket/'+this.id;
            }
        },
        mounted(){
        }
    }
</script>
