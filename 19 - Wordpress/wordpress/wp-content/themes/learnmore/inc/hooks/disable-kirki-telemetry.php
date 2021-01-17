<?php
/**
 * Disabling Kirki's telemetry module so the data about users is not gathered.
 *
 * @package LearnMore
 */
add_filter( 'kirki_telemetry', '__return_false' );
