@extends('templates.master')


@section('content')

<div class="row">
        <div class="col-md-12">
            <h1 class="page-header">
                ข้อมูลส่งต่อ
            </h1>
        </div>
    </div> 
     <!-- /. ROW  -->
  <div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Basic Tabs
            </div>
            <div class="panel-body">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-horizontal">
                            <fieldset>

                              <!-- Form Name -->
                              <legend>Address Details</legend>

                              <!-- Text input-->
                              <div class="form-group">
                                <label class="col-sm-2 control-label" for="textinput">Line 1</label>
                                <div class="col-sm-10">
                                  <input type="text" placeholder="Address Line 1" class="form-control">
                                </div>
                              </div>

                              <!-- Text input-->
                              <div class="form-group">
                                <label class="col-sm-2 control-label" for="textinput">Line 2</label>
                                <div class="col-sm-10">
                                  <input type="text" placeholder="Address Line 2" class="form-control">
                                </div>
                              </div>

                              <!-- Text input-->
                              <div class="form-group">
                                <label class="col-sm-2 control-label" for="textinput">City</label>
                                <div class="col-sm-10">
                                  <input type="text" placeholder="City" class="form-control">
                                </div>
                              </div>

                              <!-- Text input-->
                              <div class="form-group">
                                <label class="col-sm-2 control-label" for="textinput">State</label>
                                <div class="col-sm-4">
                                  <input type="text" placeholder="State" class="form-control">
                                </div>

                                <label class="col-sm-2 control-label" for="textinput">Postcode</label>
                                <div class="col-sm-4">
                                  <input type="text" placeholder="Post Code" class="form-control">
                                </div>
                              </div>



                              <!-- Text input-->
                              <div class="form-group">
                                <label class="col-sm-2 control-label" for="textinput">Country</label>
                                <div class="col-sm-10">
                                  <input type="text" placeholder="Country" class="form-control">
                                </div>
                              </div>


                            </fieldset>
                        </div>
                    </div>
                </div>  
                <hr/>
                <div class="row">
                    <div class="col-lg-12">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#home" data-toggle="tab">ข้อมูลการส่งต่อ</a>
                            </li>
                            <li class=""><a href="#profile" data-toggle="tab">อาการ</a>
                            </li>
                            <li class=""><a href="#messages" data-toggle="tab">Messages</a>
                            </li>
                            <li class=""><a href="#settings" data-toggle="tab">Settings</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade active in" id="home">
                                <h4></h4>
                                <div class="form-horizontal">
                                    <fieldset>
                                      <!-- Text input-->
                                      <div class="form-group">
                                        <label class="col-sm-2 control-label" for="textinput">Line 1</label>
                                        <div class="col-sm-10">
                                          <input type="text" placeholder="Address Line 1" class="form-control">
                                        </div>
                                      </div>
                                      <!-- Text input-->
                                      <div class="form-group">
                                        <label class="col-sm-2 control-label" for="textinput">Line 2</label>
                                        <div class="col-sm-10">
                                          <input type="text" placeholder="Address Line 2" class="form-control">
                                        </div>
                                      </div>
                                      <!-- Text input-->
                                      <div class="form-group">
                                        <label class="col-sm-2 control-label" for="textinput">City</label>
                                        <div class="col-sm-10">
                                          <input type="text" placeholder="City" class="form-control">
                                        </div>
                                      </div>
                                      <!-- Text input-->
                                      <div class="form-group">
                                        <label class="col-sm-2 control-label" for="textinput">State</label>
                                        <div class="col-sm-4">
                                          <input type="text" placeholder="State" class="form-control">
                                        </div>
                                        <label class="col-sm-2 control-label" for="textinput">Postcode</label>
                                        <div class="col-sm-4">
                                          <input type="text" placeholder="Post Code" class="form-control">
                                        </div>
                                      </div>
                                      <!-- Text input-->
                                      <div class="form-group">
                                        <label class="col-sm-2 control-label" for="textinput">Country</label>
                                        <div class="col-sm-10">
                                          <input type="text" placeholder="Country" class="form-control">
                                        </div>
                                      </div>
                                    </fieldset>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="profile">
                                <h4>Profile Tab</h4>
                                <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Username</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>@fat</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>@twitter</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            </div>
                            <div class="tab-pane fade" id="messages">
                                <h4>Messages Tab</h4>
                                <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Username</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>@fat</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>@twitter</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            </div>
                            <div class="tab-pane fade" id="settings">
                                <h4>Settings Tab</h4>
                                <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Username</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>@fat</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>@twitter</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>
@endsection