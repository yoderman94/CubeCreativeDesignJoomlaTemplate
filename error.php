<?php
defined('_JEXEC') or die;
if (($this->error->getCode()) == '404') {
header('Location: /error');
exit;
}
?>