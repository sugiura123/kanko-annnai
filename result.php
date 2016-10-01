<?php
$key = $_POST["prefectures"];
//echo $key;

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




$places = array(
  // 栃木県の観光スポット
  9 => array(
    array(
      'name'   => '西洋の邸宅',
      'detail' => '西洋の邸宅はとても良い所です。西洋の邸宅はとても良い所です。
                   西洋の邸宅はとても良い所です。西洋の邸宅はとても良い所です。
                   西洋の邸宅はとても良い所です。西洋の邸宅はとても良い所です。
                   西洋の邸宅はとても良い所です。西洋の邸宅はとても良い所です。',
      'image'  => 'place_4.jpg',
    ),
  ),
  // 群馬県の観光スポット
  10 => array(
    array(
      'name'   => '赤い門',
      'detail' => '赤い門はとても良い所です。赤い門はとても良い所です。
                   赤い門はとても良い所です。赤い門はとても良い所です。
                   赤い門はとても良い所です。赤い門はとても良い所です。
                   赤い門はとても良い所です。赤い門はとても良い所です。',
      'image'  => 'place_5.jpg',
    ),
  ),
  // 東京都の観光スポット
  13 => array(
    array(
      'name'   => '緑の階段',
      'detail' => '緑の階段はとても良い所です。緑の階段はとても良い所です。
                   緑の階段はとても良い所です。緑の階段はとても良い所です。
                   緑の階段はとても良い所です。緑の階段はとても良い所です。
                   緑の階段はとても良い所です。緑の階段はとても良い所です。',
      'image'  => 'place_1.jpg',
    ),
    array(
      'name'   => '雷門',
      'detail' => '雷門はとても良い所です。雷門はとても良い所です。雷門はとても良い所です。
                   雷門はとても良い所です。雷門はとても良い所です。雷門はとても良い所です。
                   雷門はとても良い所です。雷門はとても良い所です。',
      'image'  => 'place_6.jpg',
    ),
    array(
      'name'   => '東京タワー',
      'detail' => '東京タワーはとても良い所です。東京タワーはとても良い所です。
                   東京タワーはとても良い所です。東京タワーはとても良い所です。
                   東京タワーはとても良い所です。東京タワーはとても良い所です。
                   東京タワーはとても良い所です。東京タワーはとても良い所です。',
      'image'  => 'place_7.jpg',
    ),
  ),
  // 神奈川県の観光スポット
  14 => array(
    array(
      'name'   => '日本の城',
      'detail' => '日本の城はとても良い所です。日本の城はとても良い所です。
                   日本の城はとても良い所です。日本の城はとても良い所です。
                   日本の城はとても良い所です。日本の城はとても良い所です。
                   日本の城はとても良い所です。日本の城はとても良い所です。',
      'image'  => 'place_2.jpg',
    ),
    array(
      'name'   => '旅館の部屋',
      'detail' => '旅館の部屋はとても良い所です。旅館の部屋はとても良い所です。
                   旅館の部屋はとても良い所です。旅館の部屋はとても良い所です。
                   旅館の部屋はとても良い所です。旅館の部屋はとても良い所です。
                   旅館の部屋はとても良い所です。旅館の部屋はとても良い所です。',
      'image'  => 'place_3.jpg',
    ),
  ),
);
//var_dump($places);
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
          <?php foreach ($prefectures as $form_key => $form_value) : ?>
            <?php if($key == $form_key) : ?>
              <option value="<?php $form_value; ?>" selected><?php echo $form_value; ?></option>
            <?php else: ?>
              <option value="<?php $form_value; ?>"><?php echo $form_value; ?></option>
            <?php endif; ?>
          <?php endforeach; ?>
        </select>
      </div>
<button class="btn btn-primary btn-sm"> 検 索 </button>
</form>
<br>

    <p class="search-result">
    <?php
          echo $prefectures[$key]; ?>
          の観光スポットは
    <?php
          if ($places[$key] > 0 ) {
              echo count($places[$key])."件見つかりました。";
//            }elseif ($places[$key] == null ) {
//              echo "見つかりませんでした。" ;
            } else { echo "見つかりませんでした。";
            };
          ?>
    <div class="media">


        <?php for ($i=0; $i <count($places[$key]) ; $i++) {
          if (count($places[$key]) > 0 ):
              echo
            '<div class="media-left"><img src='. $places[$key][$i]["image"]. ' class="media-object img-thumbnail" align="left"><br><br><br><br><br><br><br><br>';
          endif;
          };?>


        <?php for ($i=0; $i <count($places[$key]) ; $i++) {
          if (count($places[$key]) > 0 ):
              echo '<div class="media-body"> <h4 class="media-heading">'. $places[$key][$i]["name"].'</h4>';
          endif;
          };?><br>

       <?php for ($i=0; $i <count($places[$key]) ; $i++) {
          if (count($places[$key]) > 0 ):
              echo $places[$key][$i]["detail"];
          endif;
          };?>


<!--
<div class="media-left">
        <img src="place_2.jpg" class="media-object img-thumbnail" align="left" ><br>
      </div>
      <div class="media-body">
        <h4 class="media-heading">日本の城</h4>
                   日本の城はとても良い所です。日本の城はとても良い所です。
                   日本の城はとても良い所です。日本の城はとても良い所です。
                   日本の城はとても良い所です。日本の城はとても良い所です。
                   日本の城はとても良い所です。日本の城はとても良い所です。
      </div>
      <br>
      <div class="media-left">
        <img src="place_3.jpg" class="media-object img-thumbnail" align="left">
      </div>
      <div class="media-body">
        <h4 class="media-heading">緑の階段</h4>
                   旅館の部屋はとても良い所です。旅館の部屋はとても良い所です。
                   旅館の部屋はとても良い所です。旅館の部屋はとても良い所です。
                   旅館の部屋はとても良い所です。旅館の部屋はとても良い所です。
                   旅館の部屋はとても良い所です。旅館の部屋はとても良い所です。 -->


    </div>
   </div>
  </div>
  <hr>
  <footer>&copy; 観光スポット検索協会 </footer>
</body>
</html>