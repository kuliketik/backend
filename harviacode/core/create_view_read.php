<?php

$string = "
<div class='content-wrapper'>
  <section class='content-header'>
    <h1>
      Dashboard
      <small>".  strtoupper($table_name)."</small>
    </h1>
    <ol class='breadcrumb'>
      <li><a href='#'><i class='fa fa-dashboard'></i> Home</a></li>
      <li class='active'>".  strtoupper($table_name)."</li>
    </ol>
  </section>
  <section class='content'>
    <div class='row'>
      <div class='col-xs-12'>
        <div class='col-md-6'>
            <!-- Horizontal Form -->
            <div class='box box-solid box-info'>
              <div class='box-header'>
                <h3 class='box-title'>Form Input ".  strtoupper($table_name)."</h3>
              </div><!-- /.box-header -->
                <div class='box-body'>";
                foreach ($non_pk as $row) {
                  $string .= "\n\t
                  <div class='form-group'>
                    ". label($row["column_name"]) . "
                    <input type='text' class='form-control' value='<?php echo $".$row["column_name"]."; ?>' disabled>
                  </div>";
                }
                $string .="
                </div>
                <div class='box-footer'>
                <a href=\"<?php echo site_url('".$c_url."') ?>\" class=\"btn btn-default\">Back</a>
                </div>
            </div><!-- /.box -->
          </div>
      </div>
    </div>
</section><!-- /.content -->
</div><!-- /.content-wrapper -->
                ";
$hasil_view_read = createFile($string, $target."views/" . $v_read_file);

?>
