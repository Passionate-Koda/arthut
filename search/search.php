<?php

$clean = array_map('trim', $_POST);
$key = $clean['query'];
$tb = $clean['data'];

if($key == ""){
  die;
}

if($tb == ""){
  die;
}

if($tb == 'blog'){
  $tb = 'arthutco_blog';

$stmt = $conn->prepare("SELECT * FROM $tb WHERE title LIKE :key OR body LIKE :key ");
$bindKey = "%".$key."%";
$stmt->bindParam(":key",$bindKey);
    $stmt->execute();
    if($stmt->rowCount() > 0){
      echo "<h3 style='font-size:30px'>Results: ".$stmt->rowCount()." </h3><hr>";
      while($row= $stmt->fetch(PDO::FETCH_BOTH)){
        extract($row);
  $bd = previewBody($body,22);
  // $post = cleans($title);
        echo '<div class="item">
        <div class="item-content" style="margin-left:0px">
        <h2 style="font-size:30px"><a target="_blank" href="/viewBlog?hid='.$hash_id.'&data=blog">'.strtoupper($title).'</a></h2>
        <span style="width:30%;float:left;" class="item-meta">
          <img src="/'.$image_1.'" width="100" height="100">
        </span>
        <span style="margin-left:2px; width:65%; float:left;">'.$bd.'</span>
        </div>
        </div><div class="clearfix"></div><hr>';
      }
    }else{
      echo '<div class="composs-comments">
      <div class="comment-list">
      <div class="comments-big-message">
      <strong>No Result</strong>
      <p>Try other search keywords</p>
      </div>
      </div>
      </div>';
    }
  }elseif ($tb == 'product') {
    $stmt = $conn1->prepare("SELECT * FROM $tb WHERE product_name LIKE :key OR description LIKE :key ");
    $bindKey = "%".$key."%";
    $stmt->bindParam(":key",$bindKey);
        $stmt->execute();
        if($stmt->rowCount() > 0){
          echo "<h3>Results: ".$stmt->rowCount()."</h3><hr>";
          while($row= $stmt->fetch(PDO::FETCH_BOTH)){
            extract($row);
$bd = previewBody($description,22);
            echo '<div class="item">
            <div class="item-content" style="margin-left:0px">
            <h2><a target="_blank" href="/preview?hid='.$hash_id.'">'.strtoupper($product_name)." (NGN".$price.")".'</a></h2>
            <span style="width:30%;float:left;" class="item-meta">
              <img src="/'.$file_path.'" width="100" height="100">
            </span>
            <span style="margin-left:2px; width:65%; float:left;">'.$bd.'</span>
            </div>
            </div><div class="clearfix"></div><hr>';
          }
        }else{
          echo '<div class="composs-comments">
          <div class="comment-list">
          <div class="comments-big-message">
          <strong>No Result</strong>
          <p>Try other search keywords</p>
          </div>
          </div>
          </div>';
        }
  }
