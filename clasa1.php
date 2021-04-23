<?php
                                                                           class request {
                                                                              // Properties
                                                                              public $year;
                                                                              public $type_1;

                                                                              // Methods
                                                                              function set_year($year) {
                                                                                $this->year = $year;
                                                                              }
                                                                              function get_year() {
                                                                                return $this->year;
                                                                              }
                                                                              function set_type_1($type_1){
                                                                                 $this->type_1 = $type_1;
                                                                              }
                                                                              function get_type_1(){
                                                                                return $this->type_1;
                                                                              }
                                                                            }

                                                                            $Converse = new edits();
                                                                            $Converse->set_year('2017-2018');
                                                                            $Converse->set_type_1('Instagram Ready');
                                                                            echo "YEAR:" . $Converse->get_year();
                                                                            echo "<br>";
                                                                            echo "#1" . $Converse->get_type_1();
                                                                            ?>
