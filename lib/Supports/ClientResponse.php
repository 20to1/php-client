<?php

namespace Offchaindata\Supports;

class ClientResponse
{
	protected $resources;

	public function getBodyRaw()
	{
		return $this->resources->getBody();
	}

	public function getBody()
	{
		return json_decode($this->resources->getBody(), true);
	}
}