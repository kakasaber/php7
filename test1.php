<?php 
// 强制模式 
$server = new Swoole\Server("0.0.0.0", 9501);

$server->set(array(
  'worker_num'      => 2,
  'task_worker_num' => 2,
));
$server->on('pipeMessage', function ($server, $src_worker_id, $data) {
  echo "#{$server->worker_id} message from #$src_worker_id: $data\n";
});
$server->on('task', function ($server, $task_id, $reactor_id, $data) {
  var_dump($task_id, $reactor_id, $data);
});
$server->on('finish', function ($server, $fd, $reactor_id) {

});
$server->on('receive', function (Swoole\Server $server, $fd, $reactor_id, $data) {
  if (trim($data) == 'task') {
      $server->task("async task coming");
  } else {
      $worker_id = 1 - $server->worker_id;
      $server->sendMessage("hello task process", $worker_id);
  }
});

$server->start();
?>