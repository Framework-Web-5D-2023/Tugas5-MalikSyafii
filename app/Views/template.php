<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Tautan ke Bootstrap CSS -->
  <link href="{{ ROOT_URL }}bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <title><?= $title ?></title>
</head>

<body>
  <?= $this->renderSection('content') ?>
</body>

<script type="text/javascript" src="{{  }}bootstrap/js/bootstrap.min.js"></script>

<script>
  // codingan javascript
</script>

</html>