<?php

function views_path($path = null)
{
	return "App/Views/$path";
}

function storage_path($path = null)
{
	return "storage/$path";
}

function controllers_path($path = null)
{
	return "/App/Controllers/$path";
}

function models_path($path = null)
{
	return "/App/Models/$path";
}

function migrations_path($path = null)
{
	return "/App/Database/Migrations/$path";
}

function seeds_path($path = null)
{
	return "/App/Database/Seeds/$path";
}

function factories_path($path = null)
{
	return "/App/Database/Factories/$path";
}

function routes_path($path = null)
{
	return "/App/Routes/$path";
}

function helpers_path($path = null)
{
	return "/App/Helpers/$path";
}

function public_path($path = null)
{
	return "/public/$path";
}
