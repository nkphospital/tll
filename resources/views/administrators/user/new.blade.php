@extends('templates.master')


@section('content')

<div class="row">
        <div class="col-md-12">
            <h1 class="page-header">
                <i class="fa fa-user-plus"></i> User
            </h1>
        </div>
    </div> 
     <!-- /. ROW  -->
  <div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
               Information
            </div>
            <div class="panel-body">

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-horizontal">
                        	<fieldset>

                              <!-- Form Name -->
                              <legend>Personal Information</legend>

                              <!-- Text input-->
                              <div class="form-group">
                                <label class="col-sm-2 control-label" for="textinput">Full Name</label>
                                <div class="col-sm-10">
                                  <input type="text"  class="form-control">
                                </div>
                              </div>

                              <!-- Text input-->
                              <div class="form-group">
                                <label class="col-sm-2 control-label" for="textinput">Full Name</label>
                                <div class="col-sm-10">
                                  <input type="text"  class="form-control">
                                </div>
                              </div>

                              <!-- Text input-->
                              <div class="form-group">
                                <label class="col-sm-2 control-label" for="textinput">Password</label>
                                <div class="col-sm-10">
                                  <input type="text"  class="form-control">
                                </div>
                              </div>

                              <!-- Text input-->
                              <div class="form-group">
                                <label class="col-sm-2 control-label" for="textinput">Confirm Password</label>
                                <div class="col-sm-10">
                                  <input type="text"  class="form-control">
                                </div>
                              </div>

                              <!-- Text input-->
                              <div class="form-group">
                                <label class="col-sm-2 control-label" for="textinput">Confirm Password</label>
                                <div class="col-sm-4">
                                  <input type="text" placeholder="State" class="form-control">
                                </div>

                                <label class="col-sm-2 control-label" for="textinput">Postcode</label>
                                <div class="col-sm-4">
                                  <input type="text" placeholder="Post Code" class="form-control">
                                </div>
                              </div>





                            </fieldset>

                            <fieldset>

                              <!-- Form Name -->
                              <legend>Account</legend>

                              <!-- Text input-->
                              <div class="form-group">
                                <label class="col-sm-2 control-label" for="textinput">User Name</label>
                                <div class="col-sm-10">
                                  <input type="text"  class="form-control">
                                </div>
                              </div>

                              <!-- Text input-->
                              <div class="form-group">
                                <label class="col-sm-2 control-label" for="textinput">Full Name</label>
                                <div class="col-sm-10">
                                  <input type="text"  class="form-control">
                                </div>
                              </div>

                              <!-- Text input-->
                              <div class="form-group">
                                <label class="col-sm-2 control-label" for="textinput">Password</label>
                                <div class="col-sm-10">
                                  <input type="text"  class="form-control">
                                </div>
                              </div>

                              <!-- Text input-->
                              <div class="form-group">
                                <label class="col-sm-2 control-label" for="textinput">Confirm Password</label>
                                <div class="col-sm-10">
                                  <input type="text"  class="form-control">
                                </div>
                              </div>

                              <!-- Text input-->
                              <div class="form-group">
                                <label class="col-sm-2 control-label" for="textinput">Confirm Password</label>
                                <div class="col-sm-4">
                                  <input type="text" placeholder="State" class="form-control">
                                </div>

                                <label class="col-sm-2 control-label" for="textinput">Postcode</label>
                                <div class="col-sm-4">
                                  <input type="text" placeholder="Post Code" class="form-control">
                                </div>
                              </div>





                            </fieldset>
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