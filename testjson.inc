<?php
class RpcController{}
class RpcAction{}

class TestJson extends RpcController{

	public function __getActions(){

		return array();
	}

	public function __getShowMethods(){


		return array(
		'test' => new Test(),
		);
	}

}

class Test extends RpcAction{	

	public function run(){

	}

	public function getData(){
		//$query = new DQuery("Запрос");
		//$query->Execute();
		$data = $this->getDataFromFile();	
		return explode(",\n", $data);
}

	protected function getDataFromFile()
	{
		return file_get_contents(__DIR__ . '/data.txt');
	}
}


