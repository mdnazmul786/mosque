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
                <a href="javascript:void(0)" class="btn btn-success" data-toggle="modal" data-target=".bs-example-modal-lg" >Add Imam</a>
                <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">

                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                                </button>
                                <h4 class="modal-title" id="myModalLabel">Create Imam Profile</h4>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="x_panel">
                                            <div class="x_content">
                                                <form class="form-horizontal form-label-left" novalidate action="<?php echo base_url(); ?>Imams/create-imam" method="POST" enctype="multipart/form-data">

                                                    <div class="item form-group">
                                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Name of Imam<span class="required">*</span>
                                                        </label>
                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                            <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="imamname" placeholder="full name" required="required" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="item form-group">
                                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Imam Details <span class="required">*</span></label>
                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                            <textarea id="textarea" required="required" name="imamdetails" class="form-control col-md-7 col-xs-12"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="item form-group">
                                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Educational Details <span class="required">*</span>
                                                        </label>
                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                            <textarea id="textarea" required="required" name="educationdetails" class="form-control col-md-7 col-xs-12"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="item form-group">
                                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Nikah <span class="required">*</span>
                                                        </label>
                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                            <label class="radio-inline"><input type="radio" value="1" name="nikah">Yes</label>
                                                            <label class="radio-inline"><input type="radio" value="0" name="nikah">No</label>
                                                        </div>
                                                    </div>
                                                    <div class="item form-group">
                                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Divorce <span class="required">*</span>
                                                        </label>
                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                            <label class="radio-inline"><input type="radio" value="1" name="divorce">Yes</label>
                                                            <label class="radio-inline"><input type="radio" value="0" name="divorce">No</label>
                                                        </div>
                                                    </div>
                                                    <div class="item form-group">
                                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Khatnah <span class="required">*</span>
                                                        </label>
                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                            <label class="radio-inline"><input type="radio" value="1" name="khatnah">Yes</label>
                                                            <label class="radio-inline"><input type="radio" value="0" name="khatnah">No</label>
                                                        </div>
                                                    </div>
                                                    <div class="item form-group">
                                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Imam Image<span class="required">*</span>
                                                        </label>
                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                            <input id="my-file-selector" type="file" name="imamimage">
                                                        </div>
                                                    </div>
                                                    <div class="ln_solid"></div>
                                                    <div class="form-group">
                                                        <div class="col-md-6 col-md-offset-3">
                                                            <button type="reset" class="btn btn-primary">Cancel</button>
                                                            <button id="send" type="submit" class="btn btn-success">Save</button>
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
                    <h2>All Imams Profile <small>Users</small></h2>
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
                    <p class="text-muted font-13 m-b-30">
                        The Buttons extension for DataTables provides a common set of options, API methods and styling to display buttons on a page that will interact with a DataTable. The core library provides the based framework upon which plug-ins can built.
                    </p>
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Images</th>
                                <th>Name</th>
                                <th>Nikah</th>
                                <th>Divorce</th>
                                <th>Khatnah</th>
                                <th>Join Date</th>
                            </tr>
                        </thead>


                        <tbody>
                            <?php foreach ($all_imams as $imams){ ?>
                            <tr>
                                <td><img src="<?php echo $imams->ImamImages; ?>" alt="Imam's Images" width="100" ></td>
                                <td ><?php echo $imams->ImamName; ?></td>
                                <td style="text-align: center" ><?php if($imams->ImamNikah){ ?><i style="color: #009966;" class="fa fa-check-square"></i><?php }else{ ?><i style="color: red;" class="fa fa-remove"></i><?php } ?></td>
                                <td style="text-align: center" ><?php if($imams->ImamDivorce){ ?><i style="color: #009966;" class="fa fa-check-square"></i><?php }else{ ?><i style="color: red;" class="fa fa-remove"></i><?php } ?></td>
                                <td style="text-align: center" ><?php if($imams->ImamKhatnah){ ?><i style="color: #009966;" class="fa fa-check-square"></i><?php }else{ ?><i style="color: red;" class="fa fa-remove"></i><?php } ?></td>
                                <td><?php echo $imams->ImamIssueDate; ?></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>