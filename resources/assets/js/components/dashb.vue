<template>
    <div>
        <div class="page-content-wrapper">
            <div class="page-content" style="min-height:1499px">
                <div class="page-bar">
                    <div class="page-title-breadcrumb">
                        <div class=" pull-left">
                            <div class="page-title">Dashboard</div>
                        </div>
                        <ol class="breadcrumb page-breadcrumb pull-right">
                            <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                            </li>
                            <li class="active">Dashboard</li>
                        </ol>
                    </div>
                </div>
                <!-- start widget -->
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="analysis-box m-b-0 bg-purple">
                            <h3 class="text-white box-title">Books Listed <span class="pull-right"><i class="fa fa-caret-up"></i>{{allbooks.length}}</span></h3>
                            <div id="sparkline7"><canvas width="50" height="45" style="display: inline-block; width: 50px; height: 45px; vertical-align: top;"></canvas></div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="analysis-box m-b-0 bg-danger">
                            <h3 class="text-white box-title">Times books Issued <span class="pull-right"><i class="fa fa-caret-up"></i> {{booking.length}}</span></h3>
                            <div id="sparkline12"><canvas width="128" height="45" style="display: inline-block; width: 128px; height: 45px; vertical-align: top;"></canvas></div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="analysis-box m-b-0 bg-blue">
                            <h3 class="text-white box-title"> Books Returned<span class="pull-right"><i class="fa fa-caret-up"></i>4</span></h3>
                            <div id="sparkline9"><canvas width="206" height="45" style="display: inline-block; width: 206px; height: 45px; vertical-align: top;"></canvas></div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="analysis-box m-b-0 bg-success">
                            <h3 class="text-white box-title">Registered <br> Student <span class="pull-right"><i class="fa fa-caret-up"></i>{{users.length}}</span></h3>
                            <div id="sparkline16" class="text-center"><canvas width="206" height="50" style="display: inline-block; width: 206px; height: 50px; vertical-align: top;"></canvas></div>
                        </div>
                    </div>
                </div>
                <!-- end widget -->
                <!-- chart start -->
                <!-- start new student list -->
                <!--<div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="card  card-box">
                            <div class="card-head">
                                <header>New Student List</header>
                                <div class="tools">
                                    <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                                    <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                                    <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                                </div>
                            </div>
                            <div class="card-body ">
                                <div class="table-wrap">
                                    <div class="table-responsive">
                                        <table class="table display product-overview mb-30">
                                            <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Name</th>
                                                <th>Assigned Professor</th>
                                                <th>Date Of Admit</th>
                                                <th>Fees</th>
                                                <th>Branch</th>
                                                <th>Edit</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Jens Brincker</td>
                                                <td>Kenny Josh</td>
                                                <td>27/05/2016</td>
                                                <td>
                                                    <span class="label label-sm label-success">paid</span>
                                                </td>
                                                <td>Mechanical</td>
                                                <td><a href="javascript:void(0)" class="" data-toggle="tooltip" title="Edit"><i class="fa fa-check"></i></a> <a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="fa fa-trash"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Mark Hay</td>
                                                <td> Mark</td>
                                                <td>26/05/2017</td>
                                                <td>
                                                    <span class="label label-sm label-warning">unpaid </span>
                                                </td>
                                                <td>Science</td>
                                                <td><a href="javascript:void(0)" class="" data-toggle="tooltip" title="Edit"><i class="fa fa-check"></i></a> <a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="fa fa-trash"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Anthony Davie</td>
                                                <td>Cinnabar</td>
                                                <td>21/05/2016</td>
                                                <td>
                                                    <span class="label label-sm label-success ">paid</span>
                                                </td>
                                                <td>Commerce</td>
                                                <td><a href="javascript:void(0)" class="" data-toggle="tooltip" title="Edit"><i class="fa fa-check"></i></a> <a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="fa fa-trash"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>David Perry</td>
                                                <td>Felix </td>
                                                <td>20/04/2016</td>
                                                <td>
                                                    <span class="label label-sm label-danger">unpaid</span>
                                                </td>
                                                <td>Mechanical</td>
                                                <td><a href="javascript:void(0)" class="" data-toggle="tooltip" title="Edit"><i class="fa fa-check"></i></a> <a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="fa fa-trash"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>Anthony Davie</td>
                                                <td>Beryl</td>
                                                <td>24/05/2016</td>
                                                <td>
                                                    <span class="label label-sm label-success ">paid</span>
                                                </td>
                                                <td>M.B.A.</td>
                                                <td><a href="javascript:void(0)" class="" data-toggle="tooltip" title="Edit"><i class="fa fa-check"></i></a> <a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="fa fa-trash"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>Alan Gilchrist</td>
                                                <td>Joshep</td>
                                                <td>22/05/2016</td>
                                                <td>
                                                    <span class="label label-sm label-warning ">unpaid</span>
                                                </td>
                                                <td>Science</td>
                                                <td><a href="javascript:void(0)" class="" data-toggle="tooltip" title="Edit"><i class="fa fa-check"></i></a> <a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="fa fa-trash"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>7</td>
                                                <td>Mark Hay</td>
                                                <td>Jayesh</td>
                                                <td>18/06/2016</td>
                                                <td>
                                                    <span class="label label-sm label-success ">paid</span>
                                                </td>
                                                <td>Commerce</td>
                                                <td><a href="javascript:void(0)" class="" data-toggle="tooltip" title="Edit"><i class="fa fa-check"></i></a> <a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="fa fa-trash"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>8</td>
                                                <td>Sue Woodger</td>
                                                <td>Sharma</td>
                                                <td>17/05/2016</td>
                                                <td>
                                                    <span class="label label-sm label-danger">unpaid</span>
                                                </td>
                                                <td>Mechanical</td>
                                                <td><a href="javascript:void(0)" class="" data-toggle="tooltip" title="Edit"><i class="fa fa-check"></i></a> <a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="fa fa-trash"></i></a></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                --><!-- end new student list -->
            </div>
        </div>

    </div>
</template>
<script>
    import {getAllBooks} from '../Utilities/Config'
    import {allissued} from '../Utilities/Config'
    import {getAllUsers} from '../Utilities/Config'
    export default{
        data(){
            return{
                allbooks:{},
                booking:{},
                users:{}
            }
        },
        created(){
            this.getBooks();
            this.toBeIssue();
            this.getUsers();
        },
        methods:{
            getBooks(){
                axios.get(getAllBooks).then((res) => {
                    this.allbooks = res.data
                })

            },
            toBeIssue(){
                axios.get(allissued).then((res) => {
                    this.booking = res.data
                })

            },
            getUsers(){
                axios.get(getAllUsers).then((res) => {
                    this.users = res.data
                })

            }
        }
    }
</script>