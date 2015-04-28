<script>


$array = [];

getAllServers();


function getSingleServer($val) {

  $.ajax({
    url : "http://harrisonsouth.co.uk/blip/api/servers/" + $val,
    method : "GET",
    success : function(data){
     $(data).each(function(index){


      $name=data.name;
      $location=data.location;
      $ip=data.ip_address;

      console.log(data);

      document.getElementById('serverNameHolder').innerHTML=$name;
      document.getElementById('ipHolder').innerHTML=$ip;



    });


   }


 });


  $globalServer=$val;

}

function getGlobalServer() {

  return $globalServer;

}


function getAllServers(){
  $.ajax({
    url : "http://harrisonsouth.co.uk/blip/api/servers",
    method : "GET",
    success : function(data){
     $(data).each(function(index){
      $("#li-test").append('<li role="presentation" class="wideHover"><a onClick="getSingleServer(' + data[index].server_id +')">' + data[index].name + ' - ' + data[index].server_id + '</a></li>');

      console.log(data[index].name);

      $array.push(data[index].server_id);
      console.log("!!" +$array[index]);
      
    });

   }
 });
  return $array;
}

function getAverageCPU() {

  $ids=getAllServers();
  console.log("OOOOOOOO" + $ids[0]);


}


</script>




<ul class="nav nav-pillsnav-stacked">
  <div id="li-test">
   <li role="presentation" class="wideHover"><a href="index.php">Dashboard</a></li>

 </div>




</ul>


<?php /*
   require_once('Server.php');


   if (isset($_GET["id"])) {
    $id=$_GET["id"];
  }

  

  if (!isset($id)) {



    echo '<li role="presentation" class="active wideHover"><a href="index.php">Dashboard</a></li>';

  } else {
   echo '<li role="presentation" class="wideHover"><a href="index.php">Dashboard</a></li>';
 
}

 for ($i = 1; $i <= sizeOf($sList); $i++) {

   if ((isset($id))&&($id==$i)) {
    echo '<li role="presentation" class="pillactive wideHover"><a href="servers.php?id='. $i .'">'. $sList[$i-1]->getName() .'</a></li>';
  } else {
    echo '<li role="presentation" class="wideHover"><a href="servers.php?id='. $i .'">'. $sList[$i-1]->getName() .'</a></li>';
  }
}
*/
?>
*/