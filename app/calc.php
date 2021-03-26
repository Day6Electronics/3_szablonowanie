<?php
require_once dirname(__FILE__) . '/../config.php';
require_once _ROOT_PATH.'/lib/smarty/Smarty.class.php';

function getParams(&$form) {
    $form['v1'] = isset($_REQUEST['v1']) ? $_REQUEST['v1'] : null;
    $form['v2'] = isset($_REQUEST['v2']) ? $_REQUEST['v2'] : null;
    $form['amp'] = isset($_REQUEST['amp']) ? $_REQUEST['amp'] : null;
}

function validate(&$form, &$msg, &$info) {
    if (!(isset($form['v1']) && isset($form['v2']) && isset($form['amp']))) return false;

    $info [] = "Przekazano parametry.";
    
    if ($form['v1'] == "") $msg [] = 'Nie podano napięcia zasilania!';
    if ($form['v2'] == "") $msg [] = 'Nie podano napięcia przewodzenia!';
    if ($form['amp'] == "") $msg [] = 'Nie podano prądu przewodzenia!';
    
    if (count($msg) != 0) return false;

    if (empty($msg)) {
        if (!is_numeric($form['v1'])) $msg [] = 'Błędny zapis napięcia zasilania!';
        if (!is_numeric($form['v2'])) $msg [] = 'Błędny zapis napięcia przewodzenia!';
        if (!is_numeric($form['amp'])) $msg [] = 'Błędny zapis prądu przewodzenia!';
    }
    
    if (count($msg) != 0) return false;

    if (empty($msg)) {
        if ($form['v1'] <= $form['v2']) $msg [] = 'Wartość napięcia zasilania musi być większa od wartości napięcia przewodzenia!';
    }
    
    if (count($msg) != 0) return false;
    else return true;
}

function process(&$form, &$msg, &$info, &$resistor) {
    
    $info [] = "Wszystkie parametry są poprawne.";
    
    $form['v1'] = doubleval($form['v1']);
    $form['v2'] = doubleval($form['v2']);
    $form['amp'] = doubleval ($form['amp']);

    $resistor = ($form['v1'] - $form['v2']) / ($form['amp'] / 1000);
}

$form = null;
$resistor = null;
$info = array();
$msg = array();

getParams($form);
if (validate($form, $msg, $info)) {
    process($form, $msg, $info, $resistor);
}

$smarty = new Smarty();

$smarty->assign('app_url',_APP_URL);
$smarty->assign('root_path',_ROOT_PATH);
$smarty->assign('page_title','Kalkulator');
$smarty->assign('page_description','Kalkulator umożliwiający dobranie odpowiedniego rezystora do diody LED.');
$smarty->assign('page_header','Kalkulator rezystora diody LED');
$smarty->assign('author','Zaprojektowany przez: Dawid Gruszecki');

$smarty->assign('form',$form);
$smarty->assign('resistor',$resistor);
$smarty->assign('msg',$msg);
$smarty->assign('info',$info);

$smarty->display(_ROOT_PATH.'/app/calc.tpl');

