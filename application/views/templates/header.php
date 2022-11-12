<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SCMIC | <?= $title ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url('assets/template') ?>/plugins/fontawesome-free/css/all.min.css">
  <script src="https://kit.fontawesome.com/0ced587f8c.js" crossorigin="anonymous"></script>
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?= base_url('assets/template') ?>/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url('assets/template') ?>/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('assets/template') ?>/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <script type="text/javascript" src="fussionchart/js/fusioncharts.js"></script>
    <script type="text/javascript" src="fussionchart/js/themes/fusioncharts.theme.fint.js"></script>
    <script type="text/javascript">
      FusionCharts.ready(function () {
        var revenueChart = new FusionCharts({
          type: 'column2d',
          renderAt: 'posisix',
          width: '500',
          height: '300',
          dataFormat: 'jsonurl',
          dataSource: 'fussionchart/db2json.php',
        });
        revenueChart.render();
      });
    </script>
</head>