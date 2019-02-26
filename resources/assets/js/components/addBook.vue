<template>
    <div>
        <div class="page-content-wrapper">
            <div class="page-content" style="min-height:1579px">
                <div class="page-bar">
                    <div class="page-title-breadcrumb">
                        <div class=" pull-left">
                            <div class="page-title">School Library  {{ loggedInUser.name }}</div>
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
                                <header>Add Book</header>
                                <button id="panel-button" class="mdl-button mdl-js-button mdl-button--icon pull-right" data-upgraded=",MaterialButton">
                                    <i class="material-icons">more_vert</i>
                                </button>
                                <div class="mdl-menu__container is-upgraded"><div class="mdl-menu__outline mdl-menu--bottom-right"></div><ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect mdl-js-ripple-effect--ignore-events" data-mdl-for="panel-button" data-upgraded=",MaterialMenu,MaterialRipple">
                                    <li class="mdl-menu__item mdl-js-ripple-effect" tabindex="-1" data-upgraded=",MaterialRipple"><i class="material-icons">assistant_photo</i>Action<span class="mdl-menu__item-ripple-container"><span class="mdl-ripple"></span></span></li>
                                    <li class="mdl-menu__item mdl-js-ripple-effect" tabindex="-1" data-upgraded=",MaterialRipple"><i class="material-icons">print</i>Another action<span class="mdl-menu__item-ripple-container"><span class="mdl-ripple"></span></span></li>
                                    <li class="mdl-menu__item mdl-js-ripple-effect" tabindex="-1" data-upgraded=",MaterialRipple"><i class="material-icons">favorite</i>Something else here<span class="mdl-menu__item-ripple-container"><span class="mdl-ripple"></span></span></li>
                                </ul></div>
                            </div>
                            <div class="card-body" id="bar-parent">
                                <div class="alert alert-success" v-if="submitted">
                                    <button class="close" type="button" data-dismiss="alert" aria-hidden="true">&#215;</button>
                                    Book is Successfully added
                                </div>
                                <form @submit.prevent="submit()" class="form-horizontal">
                                    <input type="hidden" v-model="loggedInUser.id">
                                    <div class="form-body">
                                        <div class="form-group row">
                                            <label class="control-label col-md-3">Book Name
                                                <span class="required"> * </span>
                                            </label>
                                            <div class="col-md-5">
                                                <input type="text" name="name" v-model="addbook.name" placeholder="enter bookname" class="form-control input-height"> </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-3">Category
                                                <span class="required"> * </span>
                                            </label>
                                            <div class="col-md-5">
                                                <select class="form-control input-height" v-model="addbook.category_id" name="category_id">
                                                    <option value="">Select...</option>
                                                    <option v-for="cat in category"  v-bind:value="cat.id">{{ cat.category }}</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="control-label col-md-3">Author
                                                <span class="required"> * </span>
                                            </label>
                                            <div class="col-md-5">
                                                <select class="form-control input-height" v-model="addbook.author_id" name="author_id">
                                                    <option value="">Select...</option>
                                                    <option v-for="cat in author"  v-bind:value="cat.id">{{ cat.author }}</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="control-label col-md-3">Bookshelf
                                                <span class="required"> * </span>
                                            </label>
                                            <div class="col-md-5">
                                                <select class="form-control input-height" v-model="addbook.shelf_id" name="category_id">
                                                    <option value="">Select...</option>
                                                    <option v-for="cat in bookshelves"  v-bind:value="cat.id">{{ cat.bookshelf }}</option>
                                                </select>
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <label class="control-label col-md-3">Isbn No.
                                                <span class="required"> * </span>
                                            </label>
                                            <div class="col-md-5">
                                                <input name="isbn" type="text" v-model="addbook.isbn" placeholder=" number" class="form-control input-height"> </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-3">Price
                                                <span class="required"> * </span>
                                            </label>
                                            <div class="col-md-5">
                                                <input type="text" name="price"  v-model="addbook.price" placeholder="enter price" class="form-control input-height"> </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-3">Total Book
                                                <span class="required"> * </span>
                                            </label>
                                            <div class="col-md-5">
                                                <input name="total" type="text"  v-model="addbook.total" placeholder="total" class="form-control input-height"> </div>
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
    import {postBook} from '../Utilities/Config'
    import {getCategor} from '../Utilities/Config'
    import {getAutho} from '../Utilities/Config'
    import {getShelve} from '../Utilities/Config'
    import {getAuthenticated} from '../Utilities/Config'

    export default{
        data(){
            return{
                addbook:{
                    name:'',
                    category_id:'',
                    author_id:'',
                    shelf_id:'',
                    isbn:'',
                    price:'',
                    total:''
                },
                submitted:false,
                errors:{},
                category:{},
                author:{},
                loggedInUser: [],
                bookshelves:{}



            }
        },
        created(){
            this.getCat();
            this.getHead();
            this.authentic();
            this.getBookShelves();
        },
        methods: {
            submit() {
                axios.post(postBook, this.addbook).then(response => {
                    this.submitted = true;
                    this.addbook="";
                    window.location.reload(true);


                })
                    .catch((error) => {
                        this.errors = error.response.data;
                    });

            },
            authentic(){
                axios.get(getAuthenticated).then((res) => {
                    this.loggedInUser = res.data
                })
            },
            getCat(){
                axios.get(getCategor).then((res) => {
                    this.category = res.data
                })

            },
            getHead(){
                axios.get(getAutho).then((res) => {
                    this.author = res.data
                })

            },
            getBookShelves(){
                axios.get(getShelve).then((res) => {
                    this.bookshelves = res.data
                })

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
