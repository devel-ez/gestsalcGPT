<?php

require_once "controllers/template.controller.php";
require_once "controllers/usuario.controller.php";
require_once "models/usuario.model.php";

$template = new TemplateController;
$template->Carregartemplate("index");