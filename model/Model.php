<?php

class Model {
	public function getentiretable()
	{
		$data = json_decode(file_get_contents('http://api.openweathermap.org/data/2.5/group?id=4880731,5000598,5128581,5368361,4887398,5391811,4930956,1275339,1273294,1275004,1264527,524901,703448,2643743,1816670,292223&units=metric&APPID=ea2cc999e9e272185de78f08e2e738fc'),true);  
                                       
									
										$data_required = array();
										for($i=0;$i<count($data['list']);$i++)
										{
										$data_required[$i]["id"]=$data['list'][$i]['id'];
										$data_required[$i]["name"]=$data['list'][$i]['name'];
										$data_required[$i]["country"]=$data['list'][$i]['sys']['country'];
										}
										
										
		return $data_required;
	}
	
	public function filter($name,$country)
	{
		$completedata = $this->getentiretable();
		if(($name == "") && ($country == ""))
		{
			return $completedata;
		}
		else if(($name != "") && ($country == ""))
		{
			$filterdata = array();
			$c=0;
			for($i=0;$i<count($completedata);$i++)
			{
				if($completedata[$i]["name"] == $name)
				{
					$filterdata[$c]["id"]= $completedata[$i]["id"];
					$filterdata[$c]["name"]= $completedata[$i]["name"];
					$filterdata[$c]["country"] = $completedata[$i]["country"];
					$c++;	
				}
			}
			return $filterdata;
		}
		
		else if(($name == "") && ($country != ""))
		{
			$filterdata = array();
			$c=0;
			for($i=0;$i<count($completedata);$i++)
			{
				if($completedata[$i]["country"] == $country)
				{
					$filterdata[$c]["id"]= $completedata[$i]["id"];
					$filterdata[$c]["name"]= $completedata[$i]["name"];
					$filterdata[$c]["country"] = $completedata[$i]["country"];
					$c++;	
				}
			}
			return $filterdata;
		}
		else if(($name != "") && ($country != ""))
		{
			$filterdata = array();
			$c=0;
			for($i=0;$i<count($completedata);$i++)
			{
				if(($completedata[$i]["name"] == $name) && ($completedata[$i]["country"] == $country))
				{
					$filterdata[$c]["id"]= $completedata[$i]["id"];
					$filterdata[$c]["name"]= $completedata[$i]["name"];
					$filterdata[$c]["country"] = $completedata[$i]["country"];
					$c++;	
				}
			}
			return $filterdata;
		}
	}
	
	
}


?>