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
                            <a href="http://localhost/escuela/students/form/1">

                                <?php echo $row->first_name;?>

                            </a>
                    </td>
                    <td class=" ">$45</td>
                    <td class="hidden-480 ">----</td>
                    <td class=" ">Feb 12</td>

                    <td class="hidden-480 ">
                            <span class="label label-sm label-warning">Expiring</span>
                    </td>

                    <td class=" " align="center">
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
<?php endforeach?>                                            
