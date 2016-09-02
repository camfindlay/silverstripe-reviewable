<?php
define('REVIEWABLE_MODULE', 'reviewable');

if (basename(dirname(__FILE__)) != REVIEWABLE_MODULE) {
throw new Exception(REVIEWABLE_MODULE . ' module not installed in correct directory');
}