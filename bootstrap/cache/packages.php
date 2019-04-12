<?php return array (
  'barryvdh/laravel-httpcache' => 
  array (
    'providers' => 
    array (
      0 => 'Barryvdh\\HttpCache\\ServiceProvider',
    ),
  ),
  'barryvdh/laravel-stack-middleware' => 
  array (
    'providers' => 
    array (
      0 => 'Barryvdh\\StackMiddleware\\ServiceProvider',
    ),
    'aliases' => 
    array (
      'Stack' => 'Barryvdh\\StackMiddleware\\Facade',
    ),
  ),
  'intervention/image' => 
  array (
    'providers' => 
    array (
      0 => 'Intervention\\Image\\ImageServiceProvider',
    ),
    'aliases' => 
    array (
      'Image' => 'Intervention\\Image\\Facades\\Image',
    ),
  ),
  'jenssegers/agent' => 
  array (
    'providers' => 
    array (
      0 => 'Jenssegers\\Agent\\AgentServiceProvider',
    ),
    'aliases' => 
    array (
      'Agent' => 'Jenssegers\\Agent\\Facades\\Agent',
    ),
  ),
  'laravel/scout' => 
  array (
    'providers' => 
    array (
      0 => 'Laravel\\Scout\\ScoutServiceProvider',
    ),
  ),
  'laravelcollective/html' => 
  array (
    'providers' => 
    array (
      0 => 'Collective\\Html\\HtmlServiceProvider',
    ),
    'aliases' => 
    array (
      'Form' => 'Collective\\Html\\FormFacade',
      'Html' => 'Collective\\Html\\HtmlFacade',
    ),
  ),
  'nesbot/carbon' => 
  array (
    'providers' => 
    array (
      0 => 'Carbon\\Laravel\\ServiceProvider',
    ),
  ),
  'teamtnt/laravel-scout-tntsearch-driver' => 
  array (
    'providers' => 
    array (
      0 => 'TeamTNT\\Scout\\TNTSearchScoutServiceProvider',
    ),
  ),
);