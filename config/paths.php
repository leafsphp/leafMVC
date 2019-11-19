<?php

function views_path($path = null) {
	return "/app/views/$path";
};

function storage_path($path = null) {
	return "/storage/$path";
};

function controllers_path($path = null) {
	return "/app/controllers/$path";
}

function models_path($path = null) {
	return "/app/models/$path";
};

function migrations_path($path = null) {
	return "/app/database/migrations/$path";
};

function seeds_path($path = null) {
	return "/app/database/seeds/$path";
};

function factories_path($path = null) {
	return "/app/database/factories/$path";
};

function routes_path($path = null) {
	return "/app/routes/$path";
};

function helpers_path($path = null) {
	return "/app/helpers/$path";
};

function public_path($path = null) {
	return "/public/$path";
};