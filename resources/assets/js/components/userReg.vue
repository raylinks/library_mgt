<!--

<template>
    <div>

        <div class="account-pages"></div>
        <div class="clearfix"></div>
        <div class="wrapper-page">
            <div class="text-center">
                <a href="" class="logo"><span>Admin<span>to</span></span></a>
                <h5 class="text-muted mt-0 font-600">Register Form</h5>
            </div>
            <div class="m-t-40 card-box">
                <div class="text-center">
                    <h4 class="text-uppercase font-bold mb-0">Register</h4>
                </div>
                <div class="alert alert-success" v-if="submitted">
                    <button class="close" type="button" data-dismiss="alert" aria-hidden="true">&#215;</button>
                    User Account Created Suceesfully...{{ student.student_id_no}}
                </div>

                <div class="p-20">
                    <form @submit.prevent="register()" class="form-horizontal m-t-20" >

                        <div class="form-group ">
                            <div class="col-xs-12">
                                <input class="form-control" type="text" v-model="student.name"  placeholder="name">
                                <p class="help is-danger" style="color:red;">{{ getErrors('name')}}</p>
                            </div>
                        </div>

                        <div class="form-group ">
                            <div class="col-xs-12">
                                <input class="form-control" type="text" v-model="student.username"  placeholder="Username">
                                <p class="help is-danger" style="color:red;">{{ getErrors('username')}}</p>
                            </div>
                        </div>

                        <div class="form-group ">
                            <div class="col-xs-12">
                                <input class="form-control" type="email" v-model="student.email"  placeholder="Email">
                                <p class="help is-danger" style="color:red;">{{ getErrors('email')}}</p>
                            </div>
                        </div>



                        <div class="form-group">
                            <div class="col-xs-12">
                                <input class="form-control" type="password" v-model="student.password"  placeholder="Password">

                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-12">
                                <input class="form-control" type="text" v-model="student.mobile"  placeholder="mobile">
                                <p class="help is-danger" style="color:red;">{{ getErrors('mobile')}}</p>
                            </div>
                        </div>

                        <div class="form-group ">
                            <div class="col-xs-12">
                                <input class="form-control" type="file"  placeholder="image">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-12">
                                <input class="form-control" type="date" v-model="student.date"  placeholder="reg date">
                                <p class="help is-danger" style="color:red;">{{ getErrors('date')}}</p>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-12">
                                <div class="checkbox checkbox-custom">
                                    <input id="checkbox-signup" type="checkbox" checked="checked">
                                    <label for="checkbox-signup">I accept <a href="">Terms and Conditions</a></label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group text-center m-t-40 mb-0">
                            <div class="col-xs-12">
                                <button class="btn btn-custom btn-bordred btn-block waves-effect waves-light">
                                    Register
                                </button>
                            </div>
                        </div>

                    </form>

                </div>
            </div>


            <div class="row">
                <div class="col-sm-12 text-center">
                    <p class="text-muted">Already have account?<a :href="'/'" class="text-primary m-l-5"><b>Sign In</b></a></p>
                </div>
            </div>

        </div>
    </div>
</template>
<script>
    import {postStu} from '../Utilities/Config'
    export default{
        data(){
            return{
                student:{
                    name:'',
                    username:'',
                    email:'',
                    password:'',
                    mobile:'',
                    date:'',
                    student_id_no:'',
                    image:''
                },
                errors:{},
                submitted:false,
                details: {}

            }
        },
        created() {
          this.id();
        },
        methods:{
            register(){
                axios.post(postStu, this.student).then(response=>{
                    this.submitted=true;


                })
                    .catch((error) =>{
                        this.errors= error.response.data;
                    });

            },
            id(){
                axios.post(postStu).then(response=>{
                    this.submitted=true;

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
-->
