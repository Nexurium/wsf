--TEST--
Test for RetArrayAnyType1D_one_string sample
--FILE--


<?php


try {

    $client = new WSClient(array("wsdl"=>"http://131.107.72.15/SoapWsdl_ComplexDataTypes_XmlFormatter_Service_Indigo/ComplexDataTypesDocLitB.svc?wsdl",
                                 "useSOAP" => "1.1",
                                 "to" => "http://localhost:9090/SoapWsdl_ComplexDataTypes_XmlFormatter_Service_Indigo/ComplexDataTypesDocLitB.svc"));
    $proxy = $client->getProxy();
    $person_array = array("Age" => 25, "ID" => 203.56, "Male" => TRUE, "Name" => "WSO2 PHP DEVELOPER");
    $num_array = array(1, 0, 1);
    $sn_array = array("BaseDetails"=> $person_array, "HireDate" => date(DATE_ATOM), "JobID" => 0, "numbers" => $num_array);
    $val =  $proxy->RetStructSNSA($sn_array);    
    echo "\n";
    var_dump($val);

} catch (Exception $e) {

		printf("Message = %s\n",$e->getMessage());
}
?>

--EXPECT--
Response = <ns1:echo xmlns:ns1="http://php.axis2.org/samples">
		<text>Hello World!</text>
	</ns1:echo>








