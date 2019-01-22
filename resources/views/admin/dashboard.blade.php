@extends('layouts.admin')

@section('content')
    <!--  Traffic  -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="box-title">Traffic </h4>
                </div>
                <div class="row">
                    <div class="col-lg-8">
                        <div class="card-body">
                            <!-- <canvas id="TrafficChart"></canvas>   -->
                            <div id="traffic-chart" class="traffic-chart"></div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card-body">
                            <div class="progress-box progress-1">
                                <h4 class="por-title">Visits</h4>
                                <div class="por-txt">96,930 Users (40%)</div>
                                <div class="progress mb-2" style="height: 5px;">
                                    <div class="progress-bar bg-flat-color-1" role="progressbar" style="width: 40%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="progress-box progress-2">
                                <h4 class="por-title">Bounce Rate</h4>
                                <div class="por-txt">3,220 Users (24%)</div>
                                <div class="progress mb-2" style="height: 5px;">
                                    <div class="progress-bar bg-flat-color-2" role="progressbar" style="width: 24%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="progress-box progress-2">
                                <h4 class="por-title">Unique Visitors</h4>
                                <div class="por-txt">29,658 Users (60%)</div>
                                <div class="progress mb-2" style="height: 5px;">
                                    <div class="progress-bar bg-flat-color-3" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="progress-box progress-2">
                                <h4 class="por-title">Targeted  Visitors</h4>
                                <div class="por-txt">99,658 Users (90%)</div>
                                <div class="progress mb-2" style="height: 5px;">
                                    <div class="progress-bar bg-flat-color-4" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div> <!-- /.card-body -->
                    </div>
                </div> <!-- /.row -->
                <div class="card-body"></div>
            </div>
        </div><!-- /# column -->
    </div>
    <!--  Traffic  -->

    <div class="clearfix"></div>

    <!-- Orders -->
    <div class="orders">
        <div class="row">
            <div class="col-xl-8">
                <div class="card">
                    <div class="card-body">
                        <h4 class="box-title">Orders </h4>
                    </div>
                    <div class="card-body--">
                        <div class="table-stats order-table ov-h">
                            <table class="table ">
                                <thead>
                                    <tr>
                                        <th class="serial">#</th>
                                        <th class="avatar">Avatar</th>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Product</th>
                                        <th>Quantity</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="serial">1.</td>
                                        <td class="avatar">
                                            <div class="round-img">
                                                <a href="#"><img class="rounded-circle" src="{{ asset('admin/images/avatar/1.jpg') }}" alt=""></a>
                                            </div>
                                        </td>
                                        <td> #5469 </td>
                                        <td>  <span class="name">Louis Stanley</span> </td>
                                        <td> <span class="product">iMax</span> </td>
                                        <td><span class="count">231</span></td>
                                        <td>
                                            <span class="badge badge-complete">Complete</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="serial">2.</td>
                                        <td class="avatar">
                                            <div class="round-img">
                                                <a href="#"><img class="rounded-circle" src="{{ asset('admin/images/avatar/2.jpg') }}" alt=""></a>
                                            </div>
                                        </td>
                                        <td> #5468 </td>
                                        <td>  <span class="name">Gregory Dixon</span> </td>
                                        <td> <span class="product">iPad</span> </td>
                                        <td><span class="count">250</span></td>
                                        <td>
                                            <span class="badge badge-complete">Complete</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="serial">3.</td>
                                        <td class="avatar">
                                            <div class="round-img">
                                                <a href="#"><img class="rounded-circle" src="{{ asset('admin/images/avatar/3.jpg') }}" alt=""></a>
                                            </div>
                                        </td>
                                        <td> #5467 </td>
                                        <td>  <span class="name">Catherine Dixon</span> </td>
                                        <td> <span class="product">SSD</span> </td>
                                        <td><span class="count">250</span></td>
                                        <td>
                                            <span class="badge badge-complete">Complete</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="serial">4.</td>
                                        <td class="avatar">
                                            <div class="round-img">
                                                <a href="#"><img class="rounded-circle" src="{{ asset('admin/images/avatar/4.jpg') }}" alt=""></a>
                                            </div>
                                        </td>
                                        <td> #5466 </td>
                                        <td>  <span class="name">Mary Silva</span> </td>
                                        <td> <span class="product">Magic Mouse</span> </td>
                                        <td><span class="count">250</span></td>
                                        <td>
                                            <span class="badge badge-pending">Pending</span>
                                        </td>
                                    </tr>
                                    <tr class=" pb-0">
                                        <td class="serial">5.</td>
                                        <td class="avatar pb-0">
                                            <div class="round-img">
                                                <a href="#"><img class="rounded-circle" src="{{ asset('admin/images/avatar/6.jpg') }}" alt=""></a>
                                            </div>
                                        </td>
                                        <td> #5465 </td>
                                        <td>  <span class="name">Johnny Stephens</span> </td>
                                        <td> <span class="product">Monitor</span> </td>
                                        <td><span class="count">250</span></td>
                                        <td>
                                            <span class="badge badge-complete">Complete</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div> <!-- /.table-stats -->
                    </div>
                </div> <!-- /.card -->
            </div>  <!-- /.col-lg-8 -->

            <div class="col-xl-4">
                <div class="row">
                    <div class="col-lg-6 col-xl-12">
                        <div class="card br-0">
                            <div class="card-body">
                                <div class="chart-container ov-h">
                                    <div id="flotPie1" class="float-chart"></div>
                                </div>
                            </div>
                        </div><!-- /.card -->
                    </div>

                    <div class="col-lg-6 col-xl-12">
                        <div class="card bg-flat-color-3  ">
                            <div class="card-body">
                                <h4 class="card-title m-0  white-color ">August 2018</h4>
                            </div>
                             <div class="card-body">
                                 <div id="flotLine5" class="flot-line"></div>
                             </div>
                        </div>
                    </div>
                </div>
            </div> <!-- /.col-md-4 -->
        </div>
    </div>
    <!-- /.orders -->

    <!-- To Do and Live Chat -->
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title box-title">To Do List</h4>
                    <div class="card-content">
                        <div class="todo-list">
                            <div class="tdl-holder">
                                <div class="tdl-content">
                                    <ul>
                                        <li>
                                            <label>
                                                <input type="checkbox"><i class="check-box"></i><span>Conveniently fabricate interactive technology for ....</span>
                                                <a href='#' class="fa fa-times"></a>
                                                <a href='#' class="fa fa-pencil"></a>
                                                <a href='#' class="fa fa-check"></a>
                                            </label>
                                        </li>
                                        <li>
                                            <label>
                                                <input type="checkbox"><i class="check-box"></i><span>Creating component page</span>
                                                <a href='#' class="fa fa-times"></a>
                                                <a href='#' class="fa fa-pencil"></a>
                                                <a href='#' class="fa fa-check"></a>
                                            </label>
                                        </li>
                                        <li>
                                            <label>
                                                <input type="checkbox" checked><i class="check-box"></i><span>Follow back those who follow you</span>
                                                <a href='#' class="fa fa-times"></a>
                                                <a href='#' class="fa fa-pencil"></a>
                                                <a href='#' class="fa fa-check"></a>
                                            </label>
                                        </li>
                                        <li>
                                            <label>
                                                <input type="checkbox" checked><i class="check-box"></i><span>Design One page theme</span>
                                                <a href='#' class="fa fa-times"></a>
                                                <a href='#' class="fa fa-pencil"></a>
                                                <a href='#' class="fa fa-check"></a>
                                            </label>
                                        </li>

                                        <li>
                                            <label>
                                                <input type="checkbox" checked><i class="check-box"></i><span>Creating component page</span>
                                                <a href='#' class="fa fa-times"></a>
                                                <a href='#' class="fa fa-pencil"></a>
                                                <a href='#' class="fa fa-check"></a>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div> <!-- /.todo-list -->
                    </div>
                </div> <!-- /.card-body -->
            </div><!-- /.card -->
        </div>

        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title box-title">Live Chat</h4>
                    <div class="card-content">
                        <div class="messenger-box">
                            <ul>
                                <li>
                                    <div class="msg-received msg-container">
                                        <div class="avatar">
                                           <img src="{{ asset('admin/images/avatar/64-1.jpg') }}" alt="">
                                           <div class="send-time">11.11 am</div>
                                        </div>
                                        <div class="msg-box">
                                            <div class="inner-box">
                                                <div class="name">
                                                    John Doe
                                                </div>
                                                <div class="meg">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis sunt placeat velit ad reiciendis ipsam
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- /.msg-received -->
                                </li>
                                <li>
                                    <div class="msg-sent msg-container">
                                        <div class="avatar">
                                           <img src="{{ asset('admin/images/avatar/64-2.jpg') }}" alt="">
                                           <div class="send-time">11.11 am</div>
                                        </div>
                                        <div class="msg-box">
                                            <div class="inner-box">
                                                <div class="name">
                                                    John Doe
                                                </div>
                                                <div class="meg">
                                                    Hay how are you doing?
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- /.msg-sent -->
                                </li>
                            </ul>
                            <div class="send-mgs">
                                <div class="yourmsg">
                                    <input class="form-control" type="text">
                                </div>
                                <button class="btn msg-send-btn">
                                    <i class="pe-7s-paper-plane"></i>
                                </button>
                            </div>
                        </div><!-- /.messenger-box -->
                    </div>
                </div> <!-- /.card-body -->
            </div><!-- /.card -->
        </div>
    </div>
    <!-- /To Do and Live Chat -->
@endsection