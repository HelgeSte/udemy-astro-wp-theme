<?
add_action("init", function(){
    // register custom blocks
    register_block_type(__DIR__ . "/blocks/tickitem");
});