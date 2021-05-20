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
            <button class="btn btn-primary"> Select Seat </button> 
        </form>
        <div v-if="seen" class="row mt-5">
        <div class="col-3">
            <div v-for="n in 11 ">
                <input type="checkbox" id="item" :value="'r1'+n" v-model="checkitem" :disabled="checkitem.length >= form.check" /> 
                <input type="checkbox" id="item" :value="'r2'+n" v-model="checkitem" :disabled="checkitem.length >= form.check" />
                <input type="checkbox" id="item" :value="'r3'+n" v-model="checkitem" :disabled="checkitem.length >= form.check" />
                <input type="checkbox" id="item" :value="'r4'+n" v-model="checkitem" :disabled="checkitem.length >= form.check" />
                <input type="checkbox" id="item" :value="'r5'+n" v-model="checkitem" :disabled="checkitem.length >= form.check" />
                <input type="checkbox" id="item" :value="'r6'+n" v-model="checkitem" :disabled="checkitem.length >= form.check" />
                <input type="checkbox" id="item" :value="'r7'+n" v-model="checkitem" :disabled="checkitem.length >= form.check" />
                <input type="checkbox" id="item" :value="'r8'+n" v-model="checkitem" :disabled="checkitem.length >= form.check" />
                <input type="checkbox" id="item" :value="'r9'+n" v-model="checkitem" :disabled="checkitem.length >= form.check" />
            </div>
        </div>
        <div class="col-3">
            <div v-for="n in 8">
                <input type="checkbox" id="item" :value="'s1'+n" v-model="checkitem" :disabled="checkitem.length >= form.check"/> 
                <input type="checkbox" id="item" :value="'s2'+n" v-model="checkitem" :disabled="checkitem.length >= form.check"/>
                <input type="checkbox" id="item" :value="'s3'+n" v-model="checkitem" :disabled="checkitem.length >= form.check"/>
                <input type="checkbox" id="item" :value="'s4'+n" v-model="checkitem" :disabled="checkitem.length >= form.check"/>
                <input type="checkbox" id="item" :value="'s5'+n" v-model="checkitem" :disabled="checkitem.length >= form.check"/>
                <input type="checkbox" id="item" :value="'s6'+n" v-model="checkitem" :disabled="checkitem.length >= form.check"/>
                <input type="checkbox" id="item" :value="'s7'+n" v-model="checkitem" :disabled="checkitem.length >= form.check"/>
                <input type="checkbox" id="item" :value="'s8'+n" v-model="checkitem" :disabled="checkitem.length >= form.check"/>
                <input type="checkbox" id="item" :value="'s9'+n" v-model="checkitem" :disabled="checkitem.length >= form.check"/>
            </div>
        </div>
        <div class="col-3">
            <div v-for="n in 11">
                <input type="checkbox" id="item" :value="'t1'+n" v-model="checkitem" :disabled="checkitem.length >= form.check"/> 
                <input type="checkbox" id="item" :value="'t2'+n" v-model="checkitem" :disabled="checkitem.length >= form.check"/>
                <input type="checkbox" id="item" :value="'t3'+n" v-model="checkitem" :disabled="checkitem.length >= form.check"/>
                <input type="checkbox" id="item" :value="'t4'+n" v-model="checkitem" :disabled="checkitem.length >= form.check"/>
                <input type="checkbox" id="item" :value="'t5'+n" v-model="checkitem" :disabled="checkitem.length >= form.check"/>
                <input type="checkbox" id="item" :value="'t6'+n" v-model="checkitem" :disabled="checkitem.length >= form.check"/>
                <input type="checkbox" id="item" :value="'t7'+n" v-model="checkitem" :disabled="checkitem.length >= form.check"/>
                <input type="checkbox" id="item" :value="'t8'+n" v-model="checkitem" :disabled="checkitem.length >= form.check"/>
                <input type="checkbox" id="item" :value="'t9'+n" v-model="checkitem" :disabled="checkitem.length >= form.check"/>
            </div>
        </div>
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
