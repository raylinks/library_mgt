<template>
    <div>
        <div class="page-content-wrapper">
            <div class="page-content" style="min-height:1579px">
                <div class="page-bar">
                    <div class="page-title-breadcrumb">
                        <div class=" pull-left">
                            <div class="page-title">School Library</div>
                        </div>
                        <ol class="breadcrumb page-breadcrumb pull-right">
                            <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                            </li>
                            <li><a class="parent-item" href="">Student</a>&nbsp;<i class="fa fa-angle-right"></i>
                            </li>
                            <li class="active"></li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="card card-box">
                            <div class="card-head">
                                <header>Category section</header>
                                <button id="panel-button" class="mdl-button mdl-js-button mdl-button--icon pull-right" data-upgraded=",MaterialButton">
                                    <i class="material-icons">more_vert</i>
                                </button>
                                <div class="mdl-menu__container is-upgraded"><div class="mdl-menu__outline mdl-menu--bottom-right"></div><ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect mdl-js-ripple-effect--ignore-events" data-mdl-for="panel-button" data-upgraded=",MaterialMenu,MaterialRipple">
                                    <li class="mdl-menu__item mdl-js-ripple-effect" tabindex="-1" data-upgraded=",MaterialRipple"><i class="material-icons">assistant_photo</i>Action<span class="mdl-menu__item-ripple-container"><span class="mdl-ripple"></span></span></li>
                                    <li class="mdl-menu__item mdl-js-ripple-effect" tabindex="-1" data-upgraded=",MaterialRipple"><i class="material-icons">print</i>Another action<span class="mdl-menu__item-ripple-container"><span class="mdl-ripple"></span></span></li>
                                    <li class="mdl-menu__item mdl-js-ripple-effect" tabindex="-1" data-upgraded=",MaterialRipple"><i class="material-icons">favorite</i>Something else here<span class="mdl-menu__item-ripple-container"><span class="mdl-ripple"></span></span></li>
                                </ul></div>
                            </div>
                            <div class="alert alert-success" v-if="submitted">
                                <button class="close" type="button" data-dismiss="alert" aria-hidden="true">&#215;</button>
                                Category is Successfully added
                            </div>
                            <div class="card-body" id="bar-parent">
                                <form @submit.prevent="submit()" class="form-horizontal">
                                    <div class="form-body">
                                        <div class="form-group row">
                                            <label class="control-label col-md-3">CATEGORY
                                                <span class="required"> * </span>
                                            </label>
                                            <div class="col-md-5">
                                                <input type="text" name="category" v-model="addcategory.category" placeholder="enter category" class="form-control input-height"> </div>
                                        </div>



                                        <div class="form-group row">
                                            <label class="control-label col-md-3">STATUS
                                                <span class="required"> * </span>
                                            </label>
                                            <div class="col-md-5">
                                                <select class="form-control input-height" v-model="addcategory.status" name="status">
                                                    <option value="">Select...</option>
                                                    <option value="active">Active</option>
                                                    <option value="inactive">Inactive</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-actions">
                                            <div class="row">
                                                <div class="offset-md-3 col-md-9">
                                                    <button type="submit" class="btn btn-info">Submit</button>
                                                    <button type="button" class="btn btn-default">Cancel</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</template>


<script>
    import {postCategory} from '../Utilities/Config'
    export default{
        data(){
            return{
                addcategory:{
                    category:'',
                    status:''
                },
                submitted:false,
                errors:{},


            }
        },
        methods: {
            submit() {
                axios.post(postCategory, this.addcategory).then(response => {
                    this.submitted = true;
                    this.addcategory="";
                    window.location.reload(true);

                })
                    .catch((error) => {
                        this.errors = error.response.data;
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

