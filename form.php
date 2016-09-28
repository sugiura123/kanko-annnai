<?php
$prefectures = array(
  7  => "選択してください",
  8  => "茨城県",
  9  => "栃木県",
  10 => "群馬県",
  11 => "埼玉県",
  12 => "千葉県",
  13 => "東京都",
  14 => "神奈川県",
);

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>関東地方の観光スポット検索</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  <style>
    h1 {
      margin: 0 0 30px 0;
      padding: 20px 30px;
      border-bottom: 1px solid #ccc;
      background-color: #f8f8f8;
    }
    footer {
      text-align:center;
    }
    .search-result {
      margin: 10px 0;
    }
  </style>
</head>
<body>
  <h1>関東地方の観光スポット検索</h1>
  <div class="container">

<form class="form-inline" action="result.php" method="post">
      <div class="form-group">

        <select name="prefectures" class="form-control">
        <?php  foreach ($prefectures as $key => $value); ?>
        <option value="<?php echo $value; ?>"> '<?php echo $value; ?>' </option>

        </select>



      </div>
<button class="btn btn-primary btn-sm"> 検 索 </button>
</form>


  <hr>
  <footer>&copy; 観光スポット検索協会 </footer>
</body>
</html>
