<?php
function app() {
	global $app;
	return $app;
}

function d() {
	return app()->date;
}

function dbRow($table, $row_id, $columns = "*") {
	app()->db->auto_connect();
	return app()->db->select($table, $columns)->where("id", $row_id)->fetchAll();
}

function fs() {
	return app()->fs;
}

function email(array $email) {
	$mail = new \Leaf\Mail;
	if (getenv("MAIL_DRIVER") === "smtp") {
		$mail->smtp_connect(
			getenv("MAIL_HOST"),
			getenv("MAIL_PORT"),
			!getenv("MAIL_USERNAME") ? false : true,
			getenv("MAIL_USERNAME") ?? null,
			getenv("MAIL_PASSWORD") ?? null,
			getenv("MAIL_ENCRYPTION") ?? "STARTTLS"
		);
	}
	$mail->write($email)->send();
}

function markup($data) {
	app()->response->renderMarkup($data);
}

function plural($value, $count = 2) {
	return Leaf\Str::plural($value, $count);
}

function render(string $view, array $data = [], array $mergeData = []) {
	markup(view($view, $data, $mergeData));
}

function requestBody() {
	return app()->request->body();
}

function requestData($param) {
	return app()->request->get($param);
}

function respond($data) {
	app()->response->respond($data);
}

function respondWithCode($data, $code = 500) {
	app()->response->respondWithCode($data, $code);
}

function Route($methods, $pattern, $fn) {
	app()->match($methods, $pattern, $fn);
}

function sessionBody() {
	return app()->session->body();
}

function sessionGet($param) {
	return app()->session->get($param);
}

function sessionSet($data, $value = null) {
	return app()->session->set($data, $value);
}

function singular($value) {
	return Leaf\Str::singular($value);
}

function throwErr($error, int $code = 500, bool $use_message = false) {
	app()->response->throwErr($error, $code, $use_message);
}

function view(string $view, array $data = [], array $mergeData = []) {
	app()->blade->configure(views_path(), storage_path("framework/views"));
	return app()->blade->render($view, $data, $mergeData);
}
