<template>
    <div>

        <div id="wrapper-content"><!-- PAGE WRAPPER-->
            <div id="page-wrapper"><!-- MAIN CONTENT-->
                <div class="main-content"><!-- CONTENT-->
                    <div class="content">
                        <div class="page-login rlp">
                            <div class="container">
                                <div class="login-wrapper rlp-wrapper">
                                    <form @submit.prevent="login()">
                                    <div class="login-table rlp-table"><a href=""><img :src="`http://raysoft.com.ng/css/edugate1/librarypic.jpg`" alt="" class="login"></a>

                                        <div class="login-title rlp-title" style="color:blue;">LOGIN TO YOUR LIBRARY DASHBOARD!</div>
                                        <div class="login-form bg-w-form rlp-form">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label  class="control-label form-label">email <span class="highlight">*</span></label>
                                                    <input  type="email" placeholder="Enter your Email" v-model="loginData.email" class="form-control form-input"><!--p.help-block Warning !--></div>
                                                <div class="col-md-12">
                                                    <label for="regpassword" class="control-label form-label">password <span class="highlight">*</span></label>
                                                    <input id="regpassword" type="password" v-model="loginData.password" placeholder="Enter your password" class="form-control form-input"><!-- p.help-block Warning !--></div>
                                            </div>
                                        </div>
                                        <div class="login-submit">
                                            <button type="submit"  class="btn btn-login btn-green"><span>sign in</span></button>
                                        </div>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- BUTTON BACK TO TOP-->
            <div id="back-top"><a href=""><i class="fa fa-angle-double-up"></i></a></div>
        </div>
    </div>
</template>
<script>
    export default{
        data(){
            return{
                loginData:{
                    email:'',
                    password:''
                },
                errors:{}
            }
        },
        methods: {
            login() {
                axios.post('http://raysoft.com.ng/login', this.loginData)
                    .then(function (response) {
                        window.location = "/home"
                    })
                /*.catch((error) =>{
                    this.errors= error.response.data;
                });*/

            },
            /*getErrors(field){
                if(this.errors.hasOwnProperty(field)){
                    if(typeof this.errors[field]=== "object"){
                        return this.errors[field][0];
                    }
                    if(typeof this.errors[field]==="string"){
                        return this.errors[field]
                    }
                }

            }*/
        }
    }
</script>

