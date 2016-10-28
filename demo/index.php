<?php
/**
 * Created by PhpStorm.
 * User: Iven.Wu
 * Date: 2016-10-28
 * Time: 11:12
 */

// Standard GPL and phpdocs
require_once(__DIR__ . '/../../../config.php');
require_once($CFG->libdir.'/adminlib.php');

admin_externalpage_setup('tooldemo');

// Set up the page.
$title = get_string('pluginname', 'tool_demo');
$pagetitle = $title;
$url = new moodle_url("/admin/tool/demo/index.php");
$PAGE->set_url($url);
$PAGE->set_title($title);
$PAGE->set_heading($title);

$output = $PAGE->get_renderer('tool_demo');

echo $output->header();
echo $output->heading($pagetitle);

$renderable = new \tool_demo\output\index_page('Some text');
echo $output->render($renderable);

echo $output->footer();