<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3><?php echo $content_title; ?></h3>
            </div>

            <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Go!</button>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>

        <!--Data Tables-->
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <a href="javascript:void(0)" class="btn btn-success" data-toggle="modal" data-target=".bs-example-modal-lg" >Update Prayer Time</a>
                <div class="modal fade bs-example-modal-lg" id="memberModal" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">

                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                                </button>
                                <h4 class="modal-title" id="myModalLabel">Set Prayers Time</h4>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="x_panel">
                                            <div class="x_content">
                                                <form class="form-horizontal form-label-left" action="<?php echo base_url(); ?>Prayers/insert-prayer" method="POST" novalidate>

                                                    <div class="item form-group">
                                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Prayer Name <span class="required">*</span></label>
                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                            <select class="form-control col-md-7 col-xs-12" id="prayer_name" name="prayer_name" required="required">
                                                                <option selected disabled>Select Prayer</option>
                                                                <option value="P1" >Fajr</option>
                                                                <option value="P2" >Sunrise</option>
                                                                <option value="P3" >Dhuhr</option>
                                                                <option value="P4" >Asr</option>
                                                                <option value="P5" >Maghrib</option>
                                                                <option value="P6" >Isha</option>
                                                                <option value="P7" >Qiyam</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="item form-group">
                                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Prayer Start Time <span class="required">*</span>
                                                        </label>
                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                            <div class="input-group bootstrap-timepicker timepicker">
                                                                <input id="timepicker1" type="text" name="pstarttime" class="form-control input-small"><span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item form-group">
                                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Azan Time <span class="required">*</span>
                                                        </label>
                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                            <div class="input-group bootstrap-timepicker timepicker">
                                                                <input id="timepicker2" type="text" name="azantime" class="form-control input-small"><span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item form-group">
                                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Ekama Time <span class="required">*</span>
                                                        </label>
                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                            <div class="input-group bootstrap-timepicker timepicker">
                                                                <input id="timepicker3" type="text" name="ekamtime" class="form-control input-small"><span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item form-group">
                                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Prayer End Time <span class="required">*</span>
                                                        </label>
                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                            <div class="input-group bootstrap-timepicker timepicker">
                                                                <input id="timepicker4" type="text" name="pendtime" class="form-control input-small"><span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Date <span class="required">*</span>
                                                        </label>
                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                            <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" name="pdate" required="required" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="ln_solid"></div>
                                                    <div class="form-group">
                                                        <div class="col-md-6 col-md-offset-3">
                                                        <!--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
                                                            <button type="reset" class="btn btn-primary">Cancel</button>
                                                            <button id="send" type="submit" class="btn btn-success">Update</button>
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
                </div>
                <div class="x_title">
                    <h2><?php echo 'All Prayers Time'; ?> <small>Users</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Settings 1</a>
                                </li>
                                <li><a href="#">Settings 2</a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Prayer Name</th>
                                <th>Start Time</th>
                                <th>Azan Time</th>
                                <th>Ekama Time</th>
                                <th>End Time</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>


                        <tbody>
                            <?php if(isset($all_prayerstime)){ foreach ($all_prayerstime as $prayerstime){ ?>
                            <tr>
                                <td><?php if($prayerstime->PrayerName=='P1'){ echo 'Fajr'; }else if($prayerstime->PrayerName=='P2'){ echo 'Sunrise'; }else if($prayerstime->PrayerName=='P3'){ echo 'Dhuhr'; }else if($prayerstime->PrayerName=='P4'){ echo 'Asr'; }else if($prayerstime->PrayerName=='P5'){ echo 'Maghrib'; }else if($prayerstime->PrayerName=='P6'){ echo 'Isha'; }else if($prayerstime->PrayerName=='P7'){ echo 'Qiyam'; } ?></td>
                                <td><?php echo $prayerstime->PrayerStartTime; ?></td>
                                <td><?php echo $prayerstime->AzanTime; ?></td>
                                <td><?php echo $prayerstime->EkamaTime; ?></td>
                                <td><?php echo $prayerstime->PrayerEndTime; ?></td>
                                <td><?php echo $prayerstime->PrayerIsssueDate; ?></td>
                                <td>
                                    <a href="<?php echo base_url(); ?>Prayers/delete-prayer-time?pid=<?php echo $prayerstime->PrayerId; ?>" title="Delete" ><i style="font-size: 20px;padding: 0px 10px; color: #ff6666" class="glyphicon glyphicon-trash"></i></a>
                                    <a href="<?php echo base_url(); ?>edit-prayer-time?pid=<?php echo $prayerstime->PrayerId; ?>" title="Edit" ><i style="font-size: 20px;padding: 0px 10px;color: #ff9900" class="glyphicon glyphicon-cog"></i></a>
                                </td>
                            </tr>
                            <?php } } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>