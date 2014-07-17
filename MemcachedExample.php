<?php
class MemcachedExample {
  public function populate() {
	$m = new Memcached();
	$m->addServer('localhost', 11211);
	$m->set('int', 99);
	return $m->get('int');
  }
}
?>
