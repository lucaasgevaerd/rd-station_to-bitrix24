<?
require_once (__DIR__.'/crest.php');

$result = CRest::call(
		'crm.lead.add',
		{{query[params][PARAMS]}}
	);

echo '<pre>';
	print_r($result);
echo '</pre>';