<?php

$string = "
<div class='content-wrapper'>
  <section class='content-header'>
    <h1>
      Dashboard
      <small>".ucfirst($table_name)." List</small>
    </h1>
    <ol class='breadcrumb'>
      <li><a href='#'><i class='fa fa-dashboard'></i> Home</a></li>
      <li class='active'>".ucfirst($table_name)." List</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class='content'>
    <div class='row'>
      <div class='col-xs-12'>
        <div class='box box-solid box-info'>
          <div class='box-header with-border'>
            <h3 class='box-title'>".ucfirst($table_name)." List</h3>
          </div><!-- /.box-header -->
          <div class='box-body'>
            <div class=\"col-md-4\">
                <?php echo anchor(site_url('".$c_url."/create'),'Create', 'class=\"btn btn-success\"'); ?> | ";
                if ($export_excel == '1') {
                    $string .= "\n\t\t<?php echo anchor(site_url('".$c_url."/excel'), 'Excel', 'class=\"btn btn-primary\"'); ?>";
                }
                if ($export_word == '1') {
                    $string .= "\n\t\t<?php echo anchor(site_url('".$c_url."/word'), 'Word', 'class=\"btn btn-primary\"'); ?>";
                }
                if ($export_pdf == '1') {
                    $string .= "\n\t\t<?php echo anchor(site_url('".$c_url."/pdf'), 'PDF', 'class=\"btn btn-primary\"'); ?>";
                }

$string .="</div>";
$string .="<div class=\"col-md-4 text-center\">
                <div style=\"margin-top: 8px\" id=\"message\">
                    <?php echo \$this->session->userdata('message') <> '' ? \$this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class=\"col-md-4 text-right\">
                <form action=\"<?php echo site_url('$c_url/index'); ?>\" class=\"form-inline\" method=\"get\">
                    <div class=\"input-group\">
                        <input type=\"text\" class=\"form-control\" name=\"q\" value=\"<?php echo \$q; ?>\">
                        <span class=\"input-group-btn\">
                            <?php
                                if (\$q <> '')
                                {
                                    ?>
                                    <a href=\"<?php echo site_url('$c_url'); ?>\" class=\"btn btn-default\">Reset</a>
                                    <?php
                                }
                            ?>
                          <button class=\"btn btn-primary\" type=\"submit\">Search</button>
                        </span>
                    </div>
                </form>
            </div>
          </div>
          <div class='box-body'>
            <table class='table table-hover'>
            <tr>
                <th>No</th>";
                foreach ($non_pk as $row) {
                    $string .= "\n\t\t<th>" . label($row['column_name']) . "</th>";
                }
                $string .= "\n\t\t<th>Action</th>
            </tr>";
            $string .= "<?php
                        foreach ($" . $c_url . "_data as \$$c_url)
                        {
                            ?>
                            <tr>";

            $string .= "\n\t\t\t<td width=\"80px\"><?php echo ++\$start ?></td>";
            foreach ($non_pk as $row) {
                $string .= "\n\t\t\t<td><?php echo $" . $c_url ."->". $row['column_name'] . " ?></td>";
            }


            $string .= "\n\t\t\t<td style=\"text-align:center\" width=\"200px\">"
                    . "\n\t\t\t\t<?php "
                    . "\n\t\t\t\techo anchor(site_url('".$c_url."/read/'.$".$c_url."->".$pk."),'<i class=\"fa fa-eye\"></i>',array('title'=>'Read','class'=>'btn btn-danger btn-sm')); "
                    . "\n\t\t\t\techo ' | '; "
                    . "\n\t\t\t\techo anchor(site_url('".$c_url."/update/'.$".$c_url."->".$pk."),'<i class=\"fa fa-pencil-square-o\"></i>',array('title'=>'Update','class'=>'btn btn-danger btn-sm')); "
                    . "\n\t\t\t\techo ' | '; "
                    . "\n\t\t\t\techo anchor(site_url('".$c_url."/delete/'.$".$c_url."->".$pk."),'<i class=\"fa fa-trash-o\"></i>','title=\"Delete\" class=\"btn btn-danger btn-sm\" onclick=\"javasciprt: return confirm(\\'Are You Sure ?\\')\"'); "
                    . "\n\t\t\t\t?>"
                    . "\n\t\t\t</td> \n\t\t</tr> <?php } ?>";
            $string .="
            </table>
          </div><!-- /.box-body -->
          <div class='box-footer'>
            <div class=\"col-md-4\">
            Total Record : <?php echo \$total_rows ?>
            </div>
            <div class=\"col-md-4 text-center\">
              <?php echo \$pagination ?>
            </div>
          </div><!-- box-footer -->
        </div><!-- /.box -->
      </div>
    </div>
  </section><!-- /.content -->
</div><!-- /.content-wrapper --> ";
$hasil_view_list = createFile($string, $target."views/" . $c_url . "/" . $v_list_file);


?>
