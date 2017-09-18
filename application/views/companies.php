   <section class="content">
        <div class="container-fluid">
             <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                               Company List
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
                                            <th>Code</th>
                                            <th>Name</th>
                                            <th>Location</th>
											<th>Max Conn.</th>
                                            <th>Created by</th>
                                            <th>Created date</th>
                                        </tr>
                                    </thead>
                                   <tbody>
								<?php 
								foreach($rows as $r) { ?>
								   <tr>
                                            <td><?php print anchor('company/add/'.$r['code'], $r['code'], 'title="Edit"');?></td>
                                            <td><?php print $r['name']?></td>
											<td><?php print !empty($r['location'])?$r['location']:'NA'?></td>
											<td><?php print !empty($r['limit'])?$r['limit']:'NA'?></td>
                                            <td><?php print $r['cby']==1?'Admin':$r['cby'];?></td>
                                            <td><?php print $r['cdate']?></td>
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
