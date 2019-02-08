<?php
ini_set( 'assert.exception',1);
class classError extends AssertionError {};

  assert( false, new ClassError('Mensaje Error') );

 ?>
