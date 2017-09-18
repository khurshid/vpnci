   <section class="content">
        <div class="container-fluid">
             <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                               App Logs
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>User</th>
                                            <th>Connected Time</th>
											<th>Disconnected Time</th>
											<th>Device</th>
                                           </tr>
                                    </thead>
                                   <tbody>
								<?php 
								foreach($rows as $r) { ?>
								   <tr>
                                            <td><?php print $r['cdate'];?></td>
                                            <td><?php print getUserName($r['uid']);?></td>
											<td><?php print $r['in_time'];?></td>
											<td><?php print $r['out_time']!=null?$r['out_time']:'NA';?></td>
											<td><?php print $r['device'];?></td>
                                   </tr>
								<?php }?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Examples -->
             </div>
    </section>
