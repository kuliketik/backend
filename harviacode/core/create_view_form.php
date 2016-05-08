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
              <!-- form start -->
                <form role='form' action=\"<?php echo \$action; ?>\" method=\"post\">
                <div class='box-body'>";
                    foreach ($non_pk as $row) {
                        if ($row["data_type"] == 'text') {
                            $string .= "\n\t
                            <div class='form-group'>
                              ". label($row["column_name"]) . " <?php echo form_error('" . $row["column_name"] . "') ?>
                                <textarea class=\"form-control\" rows=\"3\" name=\"" . $row["column_name"] . "\" id=\"" . $row["column_name"] . "\" placeholder=\"" . label($row["column_name"]) . "\"><?php echo $" . $row["column_name"] . "; ?></textarea>
                            </div>";
                        } else {
                            $string .= "\n\t
                            <div class='form-group'>
                              ". label($row["column_name"]) . " <?php echo form_error('" . $row["column_name"] . "') ?>
                                <input type=\"text\" class=\"form-control\" name=\"" . $row["column_name"] . "\" id=\"" . $row["column_name"] . "\" placeholder=\"" . label($row["column_name"]) . "\" value=\"<?php echo $" . $row["column_name"] . "; ?>\" />
                            </div>";
                        }
                    }
                    $string .= "\n\t    <input type=\"hidden\" name=\"" . $pk . "\" value=\"<?php echo $" . $pk . "; ?>\" />
                </div><!-- /.box-body -->
                <div class='box-footer'>
                <a href=\"<?php echo site_url('" . $c_url . "') ?>\" class=\"btn btn-default\">Cancel</a>
                <button type=\"submit\" class=\"btn btn-primary pull-right\"><?php echo \$button ?></button>
                </div><!-- /.box-footer -->
              </form>
            </div><!-- /.box -->
          </div>
      </div>
    </div>
  </section><!-- /.content -->
</div><!-- /.content-wrapper -->";

$hasil_view_form = createFile($string, $target."views/" . $c_url . "/" . $v_form_file);
?>
