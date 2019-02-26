<template>
    <div id="wrapper-content"><!-- PAGE WRAPPER-->
        <div id="page-wrapper"><!-- MAIN CONTENT-->
            <div class="main-content"><!-- CONTENT-->
                <div class="content">
                    <div class="page-register rlp">
                        <div class="container">
                            <div class="register-wrapper rlp-wrapper">
                                <div class="register-table rlp-table"><a href=""><img :src="`http://raysoft.com.ng/css/edugate1/librarypic.jpg`" alt="" class="login"></a>

                                    <div class="alert alert-success" v-if="submitted">
                                        <button class="close" type="button" data-dismiss="alert" aria-hidden="true">&#215;</button>
                                        Registered Successfully
                                    </div>
                                    <form @submit.prevent="register()">
                                    <div class="register-title rlp-title" style="color:blue;">CREATE AN ACCOUNT TO MANAGE YOUR SCHOOL LIBRARY!</div>
                                    <div class="register-form bg-w-form rlp-form">

                                        <div class="row">
                                            <div class="col-md-6">
                                                <label  class="control-label form-label">NAME <span class="highlight">*</span></label>
                                                <input  type="text" placeholder="Enter your name" v-model="invent.name" class="form-control form-input">
                                                <p class="help is-danger" style="color:red;">{{ getErrors('name')}}</p>
                                            </div>
                                            <div class="col-md-6">
                                                <label   class="control-label form-label">Username <span class="highlight">*</span></label>
                                                <input  type="text" placeholder="Enter your username" v-model="invent.username" class="form-control form-input"><!-- p.help-block Warning !-->
                                                <p class="help is-danger" style="color:red;">{{ getErrors('username')}}</p>
                                            </div>
                                            <div class="col-md-6">
                                                <label  class="control-label form-label">Email <span class="highlight">*</span></label>
                                                <input  type="text" placeholder="Enter your email" v-model="invent.email" class="form-control form-input">
                                                <p class="help is-danger" style="color:red;">{{ getErrors('email')}}</p>
                                            </div>
                                            <div class="col-md-6">
                                                <label   class="control-label form-label">Password <span class="highlight">*</span></label>
                                                <input  type="password" placeholder="Enter your Password" v-model="invent.password" class="form-control form-input">
                                                <p class="help is-danger" style="color:red;">{{ getErrors('password')}}</p>
                                            </div>
                                            <div class="col-md-6">
                                                <label  class="control-label form-label">Phone Number<span class="highlight">*</span></label>
                                                <input  type="text" placeholder="Enter your mobile number" v-model="invent.mobile"  class="form-control form-input"><!--p.help-block Warning !-->
                                                <p class="help is-danger" style="color:red;">{{ getErrors('mobile')}}</p>
                                            </div>

                                        </div>

                                    </div>
                                    <div class="register-submit">
                                        <button type="submit"  class="btn btn-register btn-green">
                                            <span>create account</span></button>
                                    </div><br>
                                        <div class="register-submit">
                                            <button  class="btn btn-register btn-green">
                                                <span><a :href="`http://raysoft.com.ng/log`">Sign In</a></span></button>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- BUTTON BACK TO TOP-->
        <div id="back-top"><a href=""><i class="fa fa-angle-double-up"></i></a></div>
    </div>

</template>
<script>
    import {postReg} from '../Utilities/Config'
    export default{
        data(){
            return{
                invent:{
                    name:'',
                    username:'',
                    email:'',
                    password:'',
                    mobile:'',
                    image:''
                },
                errors:{},
                submitted:false

            }
        },
        methods:{
            onFileChange(e) {
                let files = e.target.files || e.dataTransfer.files;
                if (!files.length)
                    return;
                this.createImage(files[0]);
            },
            createImage(file) {
                let reader = new FileReader();
                let vm = this;
                reader.onload = (e) => {
                    vm.image = e.target.result;
                };
                reader.readAsDataURL(file);
            },
            register(){
                axios.post(postReg, this.invent).then(response=>{
                    this.submitted=true;
                    this.invent = "";

                })
                    .catch((error) =>{
                        this.errors= error.response.data;
                    });

            },
            getErrors(field){
                if(this.errors.hasOwnProperty(field)){
                    if(typeof this.errors[field]=== "object"){
                        return this.errors[field][0];
                    }
                    if(typeof this.errors[field]==="string"){
                        return this.errors[field]
                    }
                }

            }

        }
    }
</script>