<template>
    <div>

        <div class="tab-content">
            <div class="tab-pane active fontawesome-demo" >
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-box">
                            <div class="card-head">
                                <header>Manage books</header>
                                <!--<div class="tools">
                                    <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                                    <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                                    <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                                </div>-->
                            </div>

                            <div class="card-body " style="">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-6">
                                        <div class="btn-group">
                                            <a href="" id="addRow" class="btn btn-info">
                                                Lists of Books <i class="fa fa-plus"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-6">
                                        <div class="btn-group pull-right">
                                            <a class="btn deepPink-bgcolor  btn-outline dropdown-toggle" data-toggle="dropdown">Tools
                                                <i class="fa fa-angle-down"></i>
                                            </a>
                                            <ul class="dropdown-menu pull-right">
                                                <li>
                                                    <a href="">
                                                        <i class="fa fa-print"></i> Print </a>
                                                </li>
                                                <li>
                                                    <a href="">
                                                        <i class="fa fa-file-pdf-o"></i> Save as PDF </a>
                                                </li>
                                                <li>
                                                    <a href="">
                                                        <i class="fa fa-file-excel-o"></i> Export to Excel </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-scrollable">
                                    <div  class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer"><div class="row">
                                        <div class="col-sm-12 col-md-6"><div class="dataTables_length" id="example4_length"><label>Show <select name="example4_length" aria-controls="example4" class="form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="example4_filter" class="dataTables_filter">
                                        <label>Search:<input type="search" v-model="filterKey" class="form-control form-control-sm" placeholder="" aria-controls="example4"></label>
                                    </div>
                                    </div>
                                    </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <table class="table table-striped table-bordered table-hover table-checkable order-column valign-middle dataTable no-footer" id="example4" role="grid" aria-describedby="example4_info">
                                        <thead>
                                        <tr role="row">
                                            <th class="sorting_asc" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" aria-sort="ascending" aria-label=": activate to sort column descending" style="width: 40px;"></th>
                                            <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" aria-label=" Name : activate to sort column ascending" style="width: 65px;"> BookName </th>
                                            <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" aria-label=" Department : activate to sort column ascending" style="width: 88px;"> Category </th>
                                            <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" aria-label=" Gender : activate to sort column ascending" style="width: 53px;"> Author </th>
                                            <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" aria-label=" Degree : activate to sort column ascending" style="width: 58px;"> Shelf </th>
                                            <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" aria-label=" Mobile : activate to sort column ascending" style="width: 82px;"> Isbn </th>
                                            <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" aria-label=" Email : activate to sort column ascending" style="width: 137px;"> Price </th>
                                            <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" aria-label="Joining Date: activate to sort column ascending" style="width: 58px;">Total Books</th>
                                            <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" aria-label="Joining Date: activate to sort column ascending" style="width: 58px;">Total Books<br>(available)</th>
                                            <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" aria-label=" Action : activate to sort column ascending" style="width: 47px;"> Action </th></tr>
                                        </thead>
                                        <tbody>
                                        <tr v-for="cat in filteredData"  class="gradeX odd" role="row">
                                            <td class="patient-img sorting_1">
                                                <img src="" alt="">
                                            </td>
                                            <td>{{ cat.name}}</td>
                                            <td class="left">{{cat.category.category}}</td>
                                            <td class="left">{{cat.author.author}}</td>
                                            <td class="left">{{cat.shelf.bookshelf}} </td>
                                            <td><a href="">
                                                {{cat.isbn}} </a></td>
                                            <td><a href="">
                                                {{cat.price}} </a></td>
                                            <td class="left">{{cat.total}}</td>
                                            <td class="left">b</td>
                                            <td>
                                                <a href="" class="btn btn-primary btn-xs"  data-toggle="modal" data-target="#myModal2" title="Edit">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                                <a :href="`/delete-books/${cat.id}`"  class="btn btn-danger btn-xs" title="Delete">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                                <span v-if="allBooks && allBooks.length == 0 ">
            <h2 class="success" style="color:tomato">No book Available...</h2>
        </span>
                                            </div>
                                        </div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="example4_info" role="status" aria-live="polite">Showing 1 to 10 of 14 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="example4_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="example4_previous"><a href="http://radixtouch.in/templates/admin/smart/source/dark/all_professors.html#" aria-controls="example4" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="http://radixtouch.in/templates/admin/smart/source/dark/all_professors.html#" aria-controls="example4" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="http://radixtouch.in/templates/admin/smart/source/dark/all_professors.html#" aria-controls="example4" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item next" id="example4_next"><a href="http://radixtouch.in/templates/admin/smart/source/dark/all_professors.html#" aria-controls="example4" data-dt-idx="3" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="tab2">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card card-box">
                            <div class="card-body no-padding ">
                                <div class="doctor-profile">
                                    <img src="" class="doctor-pic" alt="">
                                    <div class="profile-usertitle">
                                        <div class="doctor-name">Pooja Patel </div>
                                        <div class="name-center"> Mathematics </div>
                                    </div>
                                    <p>A-103, shyam gokul flats, Mahatma Road <br>Mumbai</p>
                                    <div><p><i class="fa fa-phone"></i><a href="tel:(123)456-7890">  (123)456-7890</a></p> </div>
                                    <div class="profile-userbuttons">
                                        <a href="" class="btn btn-circle deepPink-bgcolor btn-sm">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-box">
                            <div class="card-body no-padding ">
                                <div class="doctor-profile">
                                    <img src="" class="doctor-pic" alt="">
                                    <div class="profile-usertitle">
                                        <div class="doctor-name">Rajesh </div>
                                        <div class="name-center"> Science </div>
                                    </div>
                                    <p>45, Krishna Tower, Near Bus Stop, Satellite, <br>Mumbai</p>
                                    <div><p><i class="fa fa-phone"></i><a href="">  (123)456-7890</a></p> </div>
                                    <div class="profile-userbuttons">
                                        <a href="" class="btn btn-circle deepPink-bgcolor btn-sm">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-box">
                            <div class="card-body no-padding ">
                                <div class="doctor-profile">
                                    <img src="" class="doctor-pic" alt="">
                                    <div class="profile-usertitle">
                                        <div class="doctor-name">Sarah Smith </div>
                                        <div class="name-center"> Computer </div>
                                    </div>
                                    <p>456, Estern evenue, Courtage area, <br>New York</p>
                                    <div><p><i class="fa fa-phone"></i><a href="">  (123)456-7890</a></p> </div>
                                    <div class="profile-userbuttons">
                                        <a href="" class="btn btn-circle deepPink-bgcolor btn-sm">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card card-box">
                            <div class="card-body no-padding ">
                                <div class="doctor-profile">
                                    <img src="" class="doctor-pic" alt="">
                                    <div class="profile-usertitle">
                                        <div class="doctor-name">John Deo </div>
                                        <div class="name-center"> Engineering </div>
                                    </div>
                                    <p>A-103, shyam gokul flats, Mahatma Road <br>Mumbai</p>
                                    <div><p><i class="fa fa-phone"></i><a href="">  (123)456-7890</a></p> </div>
                                    <div class="profile-userbuttons">
                                        <a href="" class="btn btn-circle deepPink-bgcolor btn-sm">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-box">
                            <div class="card-body no-padding ">
                                <div class="doctor-profile">
                                    <img src="" class="doctor-pic" alt="">
                                    <div class="profile-usertitle">
                                        <div class="doctor-name">Jay Soni </div>
                                        <div class="name-center"> Music </div>
                                    </div>
                                    <p>45, Krishna Tower, Near Bus Stop, Satellite, <br>Mumbai</p>
                                    <div><p><i class="fa fa-phone"></i><a href="">  (123)456-7890</a></p> </div>
                                    <div class="profile-userbuttons">
                                        <a href="" class="btn btn-circle deepPink-bgcolor btn-sm">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row">


                    <div class="col-md-4">
                        <div class="card card-box">
                            <div class="card-body no-padding ">
                                <div class="doctor-profile">
                                    <img src="" class="doctor-pic" alt="">
                                    <div class="profile-usertitle">
                                        <div class="doctor-name">Sarah Smith </div>
                                        <div class="name-center"> Computer </div>
                                    </div>
                                    <p>456, Estern evenue, Courtage area, <br>New York</p>
                                    <div><p><i class="fa fa-phone"></i><a href="">  (123)456-7890</a></p> </div>
                                    <div class="profile-userbuttons"><a href="" class="btn btn-circle deepPink-bgcolor btn-sm">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card card-box">
                            <div class="card-body no-padding ">
                                <div class="doctor-profile">
                                    <img src="" class="doctor-pic" alt="">
                                    <div class="profile-usertitle">
                                        <div class="doctor-name">Pooja Patel </div>
                                        <div class="name-center"> Mathematics </div>
                                    </div>
                                    <p>A-103, shyam gokul flats, Mahatma Road <br>Mumbai</p>
                                    <div><p><i class="fa fa-phone"></i><a href="">  (123)456-7890</a></p> </div>
                                    <div class="profile-userbuttons">
                                        <a href="" class="btn btn-circle deepPink-bgcolor btn-sm">Read More</a>
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
    import {getAllBooks} from '../Utilities/Config'
    export default{
        data(){
            return{
                managebooks:{

                },
                allBooks:{},
                sortKey: '',
                sortOrders: 1,
                filterKey:''
            }
        },
        created(){
            this.getBooks();
        },
        computed: {
            filteredData(){
                let sortKey = this.sortKey
                let filterKey = this.filterKey && this.filterKey.toLowerCase()
                let order = this.sortOrders[sortKey] || 1
                let data = this.allBooks
                if (filterKey) {
                    data = data.filter(function (row) {
                        return Object.keys(row).some(function (key) {
                            return String(row[key]).toLowerCase().indexOf(filterKey) > -1
                        })
                    })
                }
                if (sortKey) {
                    data = data.slice().sort(function (a, b) {
                        a = a[sortKey]
                        b = b[sortKey]
                        return (a === b ? 0 : a > b ? 1 : -1) * order
                    })
                }
                return data
            }
        },
        methods:{
            getBooks(){
                axios.get(getAllBooks).then((res) => {
                    this.allBooks = res.data
                })

            }
        }

    }
</script>
