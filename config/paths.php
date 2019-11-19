<?php

function views_path($path) {
	return "/app/views/$path";
};

function storage_path($path) {
	return "/storage/$path";
};

function controllers_path($path) {
	return "/app/controllers/$path";
}

function models_path($path) {
	return "/app/models/$path";
};

function migrations_path($path) {
	return "/app/database/migrations/$path";
};

function seeds_path($path) {
	return "/app/database/seeds/$path";
};

function factories_path($path) {
	return "/app/database/factories/$path";
};

function routes_path($path) {
	return "/app/routes/$path";
};

function helpers_path($path) {
	return "/app/helpers/$path";
};

function public_path($path) {
	return "/public/$path";
};