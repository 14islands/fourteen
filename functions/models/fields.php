<?php

class Fields {

  function __construct() {
	$this->generate_fields();
  }

  private function generate_fields() {
	$fields = get_fields();
	foreach ($fields as $fieldName => $fieldValue) {
	  $this->{$fieldName} = $fieldValue;
	}
  }

  public function __get($property) {
	return (get_sub_field($property)) ? get_sub_field($property) : get_field($property);
  }

}
