<?php
  $ipaddress = getenv('REMOTE_ADDR');
   $json_data["ip_cliente"] = $ipaddress;
   echo json_encode($json_data);