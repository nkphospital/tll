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
{{--             <div class="panel-heading">
                Basic Tabs
            </div> --}}
            <div class="panel-body">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-horizontal">
                            <fieldset>

                              <!-- Form Name -->
                              <legend>ข้อมูลการส่งต่อ</legend>

                              <!-- Text input-->
                              <div class="form-group">
                                <label class="col-xs-1 control-label" for="textinput">Date</label>
                                <div class="col-xs-2">
                                  <input type="text" class="form-control">
                                </div>

                                <label class="col-xs-1 control-label" for="textinput">Time</label>
                                <div class="col-xs-1">
                                  <input type="text" class="form-control">
                                </div>

                                <label class="col-xs-2 control-label" for="textinput">รับแจ้งจาก รพ/ตึก</label>
                                <div class="col-xs-3">
                                    <input type="text" class="form-control">
                                </div>

                                <div class="control-label col-xs-2">
                                    <input type="radio" name="risk" id="inlineCheckbox1" value="option1"> Trauma
                                     <input type="radio" name="risk" id="inlineCheckbox2" value="option1"> Non-Trauma                             
                                </div>

                              </div>

                              <!-- Text input-->
                              <legend>ข้อมูลผู้ป่วย</legend>
                              <div class="form-group">

                                <label class="col-xs-1 control-label" for="textinput">PERFIX</label>
                                <div class="col-xs-2">
                                  <select class="form-control">
                                    <option>Mr.</option>
                                    <option>Mrs.</option>
                                    <option>Miss.</option>
                                    <option>Master.</option>
                                  </select>
                                </div>

                                <label class="col-xs-1 control-label" for="textinput">FIRSTNAME</label>
                                <div class="col-xs-2">
                                  <input type="text" class="form-control">
                                </div>

                                <label class="col-xs-1 control-label" for="textinput">LASTNAME</label>
                                <div class="col-xs-2">
                                  <input type="text" class="form-control">
                                </div>

                                <label class="col-xs-1 control-label" for="textinput">AGE</label>
                                <div class="col-xs-1">
                                  <input type="text" class="form-control">
                                </div>

                              </div>

                              <!-- Text input-->
                              <div class="form-group">
                                <label class="col-xs-1 control-label" for="textinput">Diagnosis</label>
                                <div class="col-xs-5">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search for...">
                                        <span class="input-group-btn">
                                        <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
                                        </span>
                                    </div>
                                </div>

                                <label class="col-xs-1 control-label" for="textinput">Cause</label>
                                <div class="col-xs-5">
                                  <input type="text" placeholder="Post Code" class="form-control">
                                </div>
                              </div>



                              <!-- Text input-->
                              <div class="form-group">
                                <label class="col-xs-1 control-label" for="textinput">Doctor</label>
                                <div class="col-xs-5">
                                  <input type="text" placeholder="Country" class="form-control">
                                </div>

                                <label class="col-xs-1 control-label" for="textinput">HN</label>
                                <div class="col-xs-2">
                                  <input type="text" placeholder="Country" class="form-control">
                                </div>

                                <label class="col-xs-1 control-label" for="textinput">Adm Ward</label>
                                <div class="col-xs-2">
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
<<<<<<< HEAD
                            <li class="active"><a href="#home" data-toggle="tab">ข้อมูลการส่งต่อ</a>
                            </li>
                            <li class=""><a href="#profile" data-toggle="tab">อาการ</a>
=======
                            <li class="active"><a href="#home" data-toggle="tab">อาการแรกรับ</a>
                            </li>
                            <li class=""><a href="#profile" data-toggle="tab">การรักษาที่ได้รับ</a>
>>>>>>> origin/master
                            </li>
                            <li class=""><a href="#messages" data-toggle="tab">การรักษา/อาการที่ส่งต่อ</a>
                            </li>
                            <li class=""><a href="#settings" data-toggle="tab">CONSULT</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade active in" id="home">
                                <h4></h4>
                                <div class="form-horizontal">
                                    <fieldset>
                                      <!-- Text input-->
                                      <div class="form-group">
                                        <label class="col-xs-2 control-label" for="textinput">Line 1</label>
                                        <div class="col-xs-10">
                                          <input type="text" placeholder="Address Line 1" class="form-control">
                                        </div>
                                      </div>
                                      <!-- Text input-->
                                      <div class="form-group">
                                        <label class="col-xs-2 control-label" for="textinput">Line 2</label>
                                        <div class="col-xs-10">
                                          <input type="text" placeholder="Address Line 2" class="form-control">
                                        </div>
                                      </div>
                                      <!-- Text input-->
                                      <div class="form-group">
                                        <label class="col-xs-2 control-label" for="textinput">City</label>
                                        <div class="col-xs-10">
                                          <input type="text" placeholder="City" class="form-control">
                                        </div>
                                      </div>
                                      <!-- Text input-->
                                      <div class="form-group">
                                        <label class="col-xs-2 control-label" for="textinput">State</label>
                                        <div class="col-xs-4">
                                          <input type="text" placeholder="State" class="form-control">
                                        </div>
<<<<<<< HEAD
                                        <label class="col-sm-2 control-label" for="textinput">Postcode</label>
                                        <div class="col-sm-4">
=======

                                        <label class="col-xs-2 control-label" for="textinput">Postcode</label>
                                        <div class="col-xs-4">
>>>>>>> origin/master
                                          <input type="text" placeholder="Post Code" class="form-control">
                                        </div>
                                      </div>
                                      <!-- Text input-->
                                      <div class="form-group">
                                        <label class="col-xs-2 control-label" for="textinput">Country</label>
                                        <div class="col-xs-10">
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