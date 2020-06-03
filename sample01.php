<?php
$data = $_POST;

$date = $_POST['date'];
$content = $_POST['content'];
//入力データを.txtファイルとして保存
if (!empty($data)) {
    $dataPath = dirname(__FILE__) . "/data/";
    $title = $_POST['title'];
    //$fileName = hash("md5", $data["body"]).date('Ymd') . ".txt";
    $fileName = $title . date('Ymd') . ".txt";
    $file = $dataPath . $fileName;
    $current = json_encode($data);
    // 結果をファイルに書き出します
    file_put_contents($file, $current);
}
$datapath = dirname(__FILE__) . "/data/"; //ディレクトリパス取得

if ($_GET["id"]) {
    $filepath = $datapath . $_GET['id'] . "txt";
    $txtString = file_get_contents($filepath);
    $contents = json_decode($txtString, true);
} else {
    $contents = [];
}
$date = date('Y,m,d');
?>

<!--index.php（自分自身）にタイトル、日付、内容を送信-->
<form action="index.php" method="POST" enctype="multipart/form-data">
    title:<input type="text" name="title"><br>
    date:<input name="date" value="date"><br>
    content:<br>
    <textarea name="content"></textarea><br>
    <input type="submit" value="送信">
</form>

<body>
    <h3>ファイル名</h3>
    <ul>
        <li><a href="./data/20200602.txt">test</a></li>
        <li><a href="./data/test-00120200602.txt">test-001</a></li>
        <li><a href="./data/test-00320200602.txt">test-003</a></li>
    </ul>



    <?php
//$msg = null;

//$filepath = dirname(__FILE__) . "/data/";
//if(isset($_FILES['title'])&& is_uploaded_file($_FILES['title']['tmp_name'])){
  //  $old_name = $_FILES['title']['tmp_name'];
  //  $new_name = $_FILES['title']['name'];
  //  if (move_uploaded_file($old_name, $new_name )){
   //     $msg = 'アップロードしました';
  //  }else{
  //      $msg = 'アップロードできませんでした。';
  //  }
//}
//var_dump($msg);

//入力したデータをjsonファイルとして保存
 

    //$filepath = dirname(__FILE__) . "/data/"; //dataディレクトリのpathを取得
    //$file = file_get_contents($filepath . $_GET['filename']);
    //$jsonfile = json_decode($file,true);
    //var_dump($jsonfile);
    //var_dump($_GET);
