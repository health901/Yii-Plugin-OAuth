<?php
interface OAuthInterface{
	public function __construct($appid,$appkey);
	public function authorize();
	public function getToken();
	public function login($token);
}