<?php
error_reporting(E_ALL ^ E_NOTICE);
require_once './src/QcloudApi/QcloudApi.php';


$config = array('SecretId'       => '你的AKIDGQQGyaPJQQJ2hGtsz22vkW6Vity5FlOw',
                'SecretKey'      => '你的a2NzRk1KWn073oO1TlrpcEfuyvkSzPgn',
                'RequestMethod'  => 'POST',
                'DefaultRegion'  => 'gz');

$cvm = QcloudApi::load(QcloudApi::MODULE_CVM, $config);

$package = array("content"=>"李亚鹏挺王菲：加油！孩儿他娘。");

$a = $wenzhi->TextSentiment($package);
// $a = $cvm->generateUrl('DescribeInstances', $package);

if ($a === false) {
    $error = $wenzhi->getError();
    echo "Error code:" . $error->getCode() . ".\n";
    echo "message:" . $error->getMessage() . ".\n";
    echo "ext:" . var_export($error->getExt(), true) . ".\n";
} else {
    var_dump($a);
}

echo "\nRequest :" . $wenzhi->getLastRequest();
echo "\nResponse :" . $wenzhi->getLastResponse();
echo "\n";
