<?php
$app->get('router')->get('/', function() use($app) {
    $app->view('index');
 });
 
 $app->get('router')->get('/campaigns', function() use($app) {
    $app->view('campaigns');
 });
 $app->get('router')->get('/corporate-partnership', function() use($app) {
    $app->view('corporate-partnership');
 });
 $app->get('router')->get('/education', function() use($app) {
    $app->view('education');
 });
 $app->get('router')->get('/environmental-care-for-all', function() use($app) {
    $app->view('environmental-care-for-all');
 });
 $app->get('router')->get('/health-care', function() use($app) {
    $app->view('health-care');
 });
 $app->get('router')->get('/individual', function() use($app) {
    $app->view('individual');
 });
 $app->get('router')->get('/north-west-region', function() use($app) {
    $app->view('north-west-region');
 });
 $app->get('router')->get('/organization-chart', function() use($app) {
    $app->view('organization-chart');
 });
 $app->get('router')->get('/ourpartners', function() use($app) {
    $app->view('ourpartners');
 });
 $app->get('router')->get('/ourteam', function() use($app) {
    $app->view('ourteam');
 });
 $app->get('router')->get('/ourvalues', function() use($app) {
    $app->view('ourvalues');
 });
 $app->get('router')->get('/shelter', function() use($app) {
    $app->view('shelter');
 });
 $app->get('router')->get('/south-west-region', function() use($app) {
    $app->view('south-west-region');
 });
 $app->get('router')->get('/thelight-care-cameroon', function() use($app) {
    $app->view('thelight-care-cameroon');
 });
 $app->get('router')->get('/livelihood', function() use($app) {
   $app->view('livelihood');
});
 
/*  $app->get('router')->get('/{slug}', function($slug) use($app) {
   echo "Param: $slug";

 });
 
 $app->get('router')->get('/api', function() use($app, $config) {
     $app->json(["api_key" => $config['api']['key']]);
 });
 
 $app->get('router')->post('/api', function() use($app) {
     $app->json($app->request->getJson(), 201);
 }); */
?>