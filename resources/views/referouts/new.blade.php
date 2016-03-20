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
                            <li class="active"><a href="#Fastrac" data-toggle="tab">Fastrac MI/Stroke</a>
                            </li>
                            <li><a href="#home" data-toggle="tab">อาการแรกรับ</a>
                            </li>
                            <li class=""><a href="#profile" data-toggle="tab">การรักษาที่ได้รับ</a>
                            </li>
                            <li class=""><a href="#messages" data-toggle="tab">การรักษา/อาการที่ส่งต่อ</a>
                            </li>
                            <li class=""><a href="#settings" data-toggle="tab">CONSULT</a>
                            </li>
                        </ul>
                        <div class="tab-content">

                            <div class="tab-pane fade active in" id="Fastrac">
                                <h4></h4>
                                <div class="form-horizontal">
                                    <fieldset>
                                        <div class="form-group">
                                            <label>&nbsp&nbsp&nbsp LR G</label>
                                                <input type="text" class="text-center" style="width:50px">
                                            <label>P</label>
                                                <input type="text" class="text-center" style="width:50px">
                                            <label>A</label>
                                                <input type="text" class="text-center" style="width:50px">
                                            <label>I</label>
                                                <input type="text" class="text-center" style="width:50px">
                                            <label>GA</label>
                                                <input type="text" class="text-center" style="width:50px">
                                            <label>WK</label>

                                            <label>&nbsp&nbsp&nbsp I</label>
                                                <input type="text" class="text-center" style="width:50px">
                                            <label>D</label>
                                                <input type="text" class="text-center" style="width:50px">
                                            <label>Eff</label>
                                                <input type="text" class="text-center" style="width:50px">
                                            <label>%</label>
                                            <label>&nbsp&nbsp&nbsp Station</label>
                                                <input type="text" class="text-center" style="width:50px">
                                            <label>MR/MI</label>

                                            <label>&nbsp&nbsp&nbsp FHS</label>
                                                <input type="text" class="text-center" style="width:50px">
                                            <label>ครั้ง</label>
                                        </div> 

                                        <div class="form-group">
                                            <label>&nbsp&nbsp&nbsp V/S แรกรับ BP</label>
                                                <input type="text" class="text-center" style="width:50px">/<input type="text" class="text-center" style="width:50px">
                                            <label>mmHg</label>
                                            <label>P</label>
                                                <input type="text" class="text-center" style="width:80px">
                                            <label>RR</label>
                                                <input type="text" class="text-center" style="width:80px">
                                            <label>T</label>
                                                <input type="text" class="text-center" style="width:80px">
                                            <label>spo2</label>
                                                <input type="text" class="text-center" style="width:80px">
                                            <label>GCS E</label>
                                                <input type="text" class="text-center" style="width:80px">
                                            <label>V</label>
                                                <input type="text" class="text-center" style="width:80px">
                                            <label>M</label>
                                                <input type="text" class="text-center" style="width:80px">
                                        </div> 
                                    </fieldset>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="home">
                                <h4></h4>
                                <div class="form-horizontal">
                                    <fieldset>
                                        <textarea class="form-control" rows="5"></textarea>
                                    </fieldset>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="profile">
                                <h4></h4>
                                <div class="table-responsive">
                                    <textarea class="form-control" rows="5"></textarea>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="messages">
                                <h4></h4>
                                <div class="table-responsive">
                                    <textarea class="form-control" rows="5"></textarea>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="settings">
                                <h4></h4>
                                <div class="table-responsive">
                                    <div class="form-group">
                                        <label>&nbsp&nbsp&nbsp V/S ก่อนออกมา BP</label>
                                                <input type="text" class="text-center" style="width:50px">/<input type="text" class="text-center" style="width:50px">
                                        <label>mmHg</label>
                                        <label>P</label>
                                            <input type="text" class="text-center" style="width:80px">
                                        <label>RR</label>
                                            <input type="text" class="text-center" style="width:80px">
                                        <label>T</label>
                                            <input type="text" class="text-center" style="width:80px">
                                        <label>spo2</label>
                                            <input type="text" class="text-center" style="width:80px">
                                        <label>GCS E</label>
                                            <input type="text" class="text-center" style="width:80px">
                                        <label>V</label>
                                            <input type="text" class="text-center" style="width:80px">
                                        <label>M</label>
                                            <input type="text" class="text-center" style="width:80px">
                                    </div> 
                                    <div class="form-group">
                                        <label>&nbsp&nbsp&nbsp แพทย์รับCONSULT ชื่อ</label>
                                                <input type="text" class="text-center" style="width:300px">
                                        <label></label>
                                        <label>&nbsp&nbsp&nbsp จนท. นำส่ง</label>
                                            <input type="radio" name="refer" id="inlineCheckbox1" value="option1"> พขร
                                            <input type="radio" name="refer" id="inlineCheckbox1" value="option1"> RN
                                            <input type="radio" name="refer" id="inlineCheckbox1" value="option1"> EMT
                                            <input type="radio" name="refer" id="inlineCheckbox1" value="option1"> AID
                                    </div> 
                                    <div class="form-group">
                                        <label>&nbsp&nbsp&nbsp เอกสารผู้ป่วยที่จำเป็น</label>  
                                    </div>
                                    <div class="form-group">
                                            <label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
                                            <input type="radio" name="refer" id="inlineCheckbox1" value="option1"> ใบRefer
                                            <input type="radio" name="refer" id="inlineCheckbox1" value="option1"> X-ray                                
                                            <input type="radio" name="refer" id="inlineCheckbox1" value="option1"> CT
                                            <input type="radio" name="refer" id="inlineCheckbox1" value="option1"> EKG
                                            <input type="radio" name="refer" id="inlineCheckbox1" value="option1"> LAB
                                            <input type="radio" name="refer" id="inlineCheckbox1" value="option1"> สิทธิบัตร 
                                            <input type="radio" name="refer" id="inlineCheckbox1" value="option1"> ใบRequest 
                                            <input type="radio" name="refer" id="inlineCheckbox1" value="option1"> อื่นๆ 
                                    </div>
                                    <div class="form-group">
                                        <label>&nbsp&nbsp&nbsp ปัญหาที่พบในขณะส่งต่อ</label>  
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" rows="5"></textarea> 
                                    </div>
                                    <div class="form-group">
                                        <label>&nbsp&nbsp&nbsp ผู้ประสาน</label>
                                                <input type="text" class="text-center" style="width:300px">
                                        <label></label>
                                        <label>
                                        (
                                            <input type="radio" name="refer" id="inlineCheckbox1" value="option1"> แพทย์
                                            <input type="radio" name="refer" id="inlineCheckbox1" value="option1"> พยาบาล  
                                            <input type="radio" name="refer" id="inlineCheckbox1" value="option1"> EMT 
                                        )
                                        </label>

                                        <label>&nbsp&nbsp&nbsp ผู้ประสาน</label>
                                                <input type="text" class="text-center" style="width:300px">
                                        <label></label>
                                        <label>
                                        (
                                            <input type="radio" name="refer" id="inlineCheckbox1" value="option1"> แพทย์
                                            <input type="radio" name="refer" id="inlineCheckbox1" value="option1"> พยาบาล  
                                            <input type="radio" name="refer" id="inlineCheckbox1" value="option1"> EMT
                                        )
                                        </label>

                                    </div> 
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