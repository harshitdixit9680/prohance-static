<?php 
/**
 * Custom functions file
 */

 function ph_get_all_job_departments($pdo_conn = '', $show_empty = true) { 
   if(empty($pdo_conn)) { 
      $database_username = 'devphcareer';
      $database_password = 'Cpdb3_MrmI-I@@=0';
      $pdo_conn = new PDO( 'mysql:host=localhost;dbname=careerpage', $database_username, $database_password ); 
   }
   if($show_empty){ 
      $sql = $pdo_conn->query("SELECT `id`,`title` FROM `job_departments` WHERE `status` = '1' ORDER BY `title` ASC");
   } else {
      $sql = $pdo_conn->query("SELECT DISTINCT JD.id, JD.title FROM `job_departments` as JD INNER JOIN `jobs` as J on JD.title = J.department WHERE JD.status = '1' AND J.status = '1' ORDER BY JD.title ASC");
   }
   $rows = $sql->fetchAll();
   $result = array();

   if(!empty($rows) && is_array($rows)) {
      foreach ($rows as $row) {
         $title = isset($row['title']) ? $row['title'] : '';
         $result[$title] = $title;
      }
   }
   return $result;
 }

 function ph_get_all_job_type($pdo_conn = '', $show_empty = true) { 
   if(empty($pdo_conn)) { 
      $database_username = 'devphcareer';
      $database_password = 'Cpdb3_MrmI-I@@=0';
      $pdo_conn = new PDO( 'mysql:host=localhost;dbname=careerpage', $database_username, $database_password ); 
   }
   if($show_empty){ 
      $sql = $pdo_conn->query("SELECT `id`,`title` FROM `job_types` WHERE `status` = '1' ORDER BY `title` ASC");
   } else {
      $sql = $pdo_conn->query("SELECT DISTINCT JT.id, JT.title FROM `job_types` as JT INNER JOIN `jobs` as J on JT.title = J.job_type WHERE JT.status = '1' AND J.status = '1' ORDER BY JT.title ASC");
   }
   
   $rows = $sql->fetchAll();
   $result = array();

   if(!empty($rows) && is_array($rows)) {
      foreach ($rows as $row) {
         $title = isset($row['title']) ? $row['title'] : '';
         $result[$title] = $title;
      }
   }
   return $result;
 }


 function ph_get_all_job_locations($pdo_conn = '', $show_empty = true) { 
   if(empty($pdo_conn)) { 
      $database_username = 'devphcareer';
      $database_password = 'Cpdb3_MrmI-I@@=0';
      $pdo_conn = new PDO( 'mysql:host=localhost;dbname=careerpage', $database_username, $database_password ); 
   }
   if($show_empty){ 
      $sql = $pdo_conn->query("SELECT `id`,`title` FROM `job_locations` WHERE `status` = '1' ORDER BY `title` ASC");
   } else {
      $sql = $pdo_conn->query("SELECT DISTINCT JL.id, JL.title FROM `job_locations` as JL INNER JOIN `jobs` as J on JL.title = J.location WHERE JL.status = '1' AND J.status = '1' ORDER BY JL.title ASC");
   }
   
   $rows = $sql->fetchAll();
   $result = array();

   if(!empty($rows) && is_array($rows)) {
      foreach ($rows as $row) {
         $title = isset($row['title']) ? $row['title'] : '';
         $result[$title] = $title;
      }
   }
   return $result;
 }

 function ph_get_all_jobs() {
    $perPage = 10;
    $page = (isset($_GET['page'])) ? (int) $_GET['page'] : 1;
    //$offset = $perPage * ($page - 1);

    //$result = mysql_query("SELECT * FROM 'jobs' WHERE 'status'= '1' ORDER BY 'id' DESC LIMIT $offset, $perPage");

    // display results here the way you want

    $query = mysql_query("SELECT COUNT(`id`) as total FROM `jobs` WHERE 'status'= '1'");
    $r = mysql_fetch_array($query);
    $totalPages = ceil($r['total'] / $perPage);

    $links = "";
    for ($i = 1; $i <= $totalPages; $i++) {
    $links .= ($i != $page ) 
                ? "<a href='index.php?page=$i'>Page $i</a> "
                : "$page ";
    }
    echo $links; // show links to other pages
 }

 function pa($a=array(), $h='') {
   echo '<pre>';
   echo $h ? '<h2>'.$h.'</h2>' : '';
   print_r($a);
   echo '</pre>';
 }

 function ph_upload_file($input_name) {
   $target_dir = "uploads/";
   $target_file = $target_dir . basename($_FILES[$input_name]["name"]);
   $resumeFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION)); 
   // Check if file already exists
   if (empty($_FILES[$input_name]['tmp_name'])) {
      return array('status' => false, 'message' => 'Please add your resume.');
   } else if (file_exists($target_file)) {
      return array('status' => false, 'message' => 'File is already exists.');
   } else if ($_FILES["fileToUpload"]["size"] > 15728640) {
      return array('status' => false, 'message' => 'File size is too large. File size should be less than 15 MB.');
   } else if(!in_array($resumeFileType, array('pdf', 'doc', 'docx'))) {
      return array('status' => false, 'message' => 'File should be in pdf, doc or docs format.');
   } else {
      $temp = explode(".", $_FILES[$input_name]["name"]);
      $newfilename = $target_dir .time() . '.' . end($temp);
      if (move_uploaded_file($_FILES[$input_name]["tmp_name"], $newfilename)) {
         return array('status' => true, 'message' => "The file ". htmlspecialchars( basename( $_FILES[$input_name]["name"])). " has been successfully uploaded.", 'value' => $newfilename);
      } else {
         return array('status' => false, 'message' => "Sorry, there was an error while uploading your file.");
      }
   }
 }

//  function ph_get_job_by_id($job_id) {
//    require_once 'db.php';
//    $sql = $pdo_conn->query("SELECT * FROM `jobs` WHERE `id` = ".$job_id);
//    return $job_data = $sql->fetch();
//  }