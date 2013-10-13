<div class="page-content">
<div class="page-header">
        <h1>
                <?php echo $rowsTitle; ?>
                <small>
                        <i class="icon-double-angle-right"></i>
                        Static &amp; Dynamic Tablessss
                </small>
        </h1>
</div><!-- /.page-header -->

<div class="row">
        <div class="col-xs-12">
                <!-- PAGE CONTENT BEGINS -->
                <div class="row">
                        <div class="col-xs-12">

                                <div class="table-header">
                                        Results for "Latest Registered Domains"
                                </div>

                                <div class="table-responsive">
                                        <div id="sample-table-2_wrapper" class="dataTables_wrapper" role="grid"><div class="row"><div class="col-sm-6"><div id="sample-table-2_length" class="dataTables_length"><label>Display <select size="1" name="sample-table-2_length" aria-controls="sample-table-2"><option value="10" selected="selected">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> records</label></div></div><div class="col-sm-6"><div class="dataTables_filter" id="sample-table-2_filter"><label>Search: <input type="text" aria-controls="sample-table-2"></label></div></div></div><table id="sample-table-2" class="table table-striped table-bordered table-hover dataTable" aria-describedby="sample-table-2_info">
                                                <thead>
                                                        <tr role="row"><th class="center sorting_disabled" role="columnheader" rowspan="1" colspan="1" aria-label="




                                                                " style="width: 58px;">
                                                                        <label>
                                                                                <input type="checkbox" class="ace">
                                                                                <span class="lbl"></span>
                                                                        </label>
                                                                </th><th class="sorting" role="columnheader" tabindex="0" aria-controls="sample-table-2" rowspan="1" colspan="1" aria-label="Domain: activate to sort column ascending" style="width: 163px;">Domain</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="sample-table-2" rowspan="1" colspan="1" aria-label="Price: activate to sort column ascending" style="width: 117px;">Price</th><th class="hidden-480 sorting" role="columnheader" tabindex="0" aria-controls="sample-table-2" rowspan="1" colspan="1" aria-label="Clicks: activate to sort column ascending" style="width: 128px;">Clicks</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="sample-table-2" rowspan="1" colspan="1" aria-label="

                                                                        Update
                                                                : activate to sort column ascending" style="width: 191px;">
                                                                        <i class="icon-time bigger-110 hidden-480"></i>
                                                                        Update
                                                                </th><th class="hidden-480 sorting" role="columnheader" tabindex="0" aria-controls="sample-table-2" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 157px;">Status</th><th class="sorting_disabled" role="columnheader" rowspan="1" colspan="1" aria-label="" style="width: 168px;"></th></tr>
                                                </thead>


                                        <tbody role="alert" aria-live="polite" aria-relevant="all">
                                            
                                            <?php
                                            $index = 0;
                                            foreach($rows as $key=>$row): 
                                            
                                            $k= (($index%2)==1)?'even':'odd';    
                                            ?>
                                            <tr class="<?php echo  $k; ?>">
                                                                <td class="center  sorting_1">
                                                                        <label> 
                                                                                <input type="checkbox" class="ace">
                                                                                <span class="lbl"></span>
                                                                        </label>
                                                                </td>

                                                                <td class=" ">
                                                                        <a href="<?php echo $row->getEditLink() ?>"><?php echo "{$row->name} {$row->last_name} {$row->mother_name}" ?></a>
                                                                </td>
                                                                <td class=" ">$45</td>
                                                                <td class="hidden-480 ">3,330</td>
                                                                <td class=" ">Feb 12</td>

                                                                <td class="hidden-480 ">
                                                                        <span class="label label-sm label-warning">Expiring</span>
                                                                </td>

                                                                <td class=" "  align="center">
                                                                        <div class="visible-md visible-lg hidden-sm hidden-xs action-buttons">
                                                                                <a class="blue" href="#">
                                                                                        <i class="icon-zoom-in bigger-130"></i>
                                                                                </a>

                                                                                <a class="green" href="#">
                                                                                        <i class="icon-pencil bigger-130"></i>
                                                                                </a>

                                                                                <a class="red" href="#">
                                                                                        <i class="icon-trash bigger-130"></i>
                                                                                </a>
                                                                        </div>

                                                                        <div class="visible-xs visible-sm hidden-md hidden-lg">
                                                                                <div class="inline position-relative">
                                                                                        <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown">
                                                                                                <i class="icon-caret-down icon-only bigger-120"></i>
                                                                                        </button>

                                                                                        <ul class="dropdown-menu dropdown-only-icon dropdown-yellow pull-right dropdown-caret dropdown-close">
                                                                                                <li>
                                                                                                        <a href="#" class="tooltip-info" data-rel="tooltip" title="" data-original-title="View">
                                                                                                                <span class="blue">
                                                                                                                        <i class="icon-zoom-in bigger-120"></i>
                                                                                                                </span>
                                                                                                        </a>
                                                                                                </li>

                                                                                                <li>
                                                                                                        <a href="#" class="tooltip-success" data-rel="tooltip" title="" data-original-title="Edit">
                                                                                                                <span class="green">
                                                                                                                        <i class="icon-edit bigger-120"></i>
                                                                                                                </span>
                                                                                                        </a>
                                                                                                </li>

                                                                                                <li>
                                                                                                        <a href="#" class="tooltip-error" data-rel="tooltip" title="" data-original-title="Delete">
                                                                                                                <span class="red">
                                                                                                                        <i class="icon-trash bigger-120"></i>
                                                                                                                </span>
                                                                                                        </a>
                                                                                                </li>
                                                                                        </ul>
                                                                                </div>
                                                                        </div>
                                                                </td>
                                              </tr>
                                              <?php endforeach; ?>          
                                                        
                                              </tbody>
                                        </table>
                                     <div class="row">
                                         <div class="col-sm-6">
                                             <div class="dataTables_info" id="sample-table-2_info">Showing 1 to 10 of 23 entries</div></div><div class="col-sm-6"><div class="dataTables_paginate paging_bootstrap"><ul class="pagination"><li class="prev disabled"><a href="#"><i class="icon-double-angle-left"></i></a></li><li class="active"><a href="#">1</a></li><li><a href="#">2</a></li><li><a href="#">3</a></li><li class="next"><a href="#"><i class="icon-double-angle-right"></i></a></li></ul></div></div></div></div>
                                </div>
                        </div>
                </div>
                <!-- PAGE CONTENT ENDS -->
        </div><!-- /.col -->
</div><!-- /.row -->
</div>