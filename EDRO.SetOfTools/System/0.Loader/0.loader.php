<?php
//© A.A.CheckMaRev assminog@gmail.com tubmulur@yandex.ru
echo '[v]Loader'."\n";
$ч0Шаг		= 0;
function сВремя()
	{
	return round(microtime(true), 4);
	}
$мЗагрузка	=
	array();
function мПроверитьЗагрузку($сТриггер, $сИмяФайла)
	{
	$мВремя	=
		array(
		'дСтарт'	=>0.00,
		'дФиниш'	=>0.00,
		'дРазница'	=>0.00
		);
	switch($сТриггер)
		{
		case"Нач":
			
		break;
		case"Кон":
			
		break;
		}
	}
function мКИМ($ч0Шаг, $мЗагрузка)
	{
	$ч0Шаг++;
	$мЗагрузка[$ч0Шаг]['дВремяШаг']		= сВремя();
	$мЗагрузка[$ч0Шаг]['дДельтаВремяСтарт']	= ($мЗагрузка['дВремяСтарт']-$мЗагрузка['дВремяСтарт']);
	$мЗагрузка[$ч0Шаг]['дДельтаЧётВремяШаг']=

	$мЗагрузка[$ч0Шаг]['дВыполненоЧастей']	= 0;  //Десятичная Дробь, Целостность задачи, выполнено, когда равно 1.
	//$мЗагрузка['дВремяСтарт']		= //
	//$мЗагрузка[$ч0Шаг]['ч0Шаг']		= $ч0Шаг++,
	}









$мЗагрузка[]	=
	array(
	'дВремяСтарт'		=> сВремя(),
	'дВремяШаг'		=> сВремя(),
	'дДельтаВремяСтарт'	=> 0.00,
	'дДельтаЧётВремяШаг'	=> 0.00,
	'дВыполненоЧастей'	=> 0, 
	'фКон'			=> false,
	);



$мЗагрузка		= мКИМ($ч0Шаг ,$мЗагрузка);
$ч0ВыполненоЧастей	= 0;


//while($мЗагрузка=фКИМ($мЗагрузка))
//	{
	require('/home/EDRO.SetOfTools/System/1.Reporter/0.ReportError.php');
	require('/home/EDRO.SetOfTools/System/1.Reporter/1.Report.php');
	require('/home/EDRO.SetOfTools/System/1.Reporter/2.ReportComplain_Violation_CitizenCountry1_Country2_.php');
	require('/home/EDRO.SetOfTools/System/1.Reporter/2.ReportComplain_Violation_УКРФ.php');
	require('/home/EDRO.SetOfTools/System/1.Reporter/2.ReportViloationLaw_ResidenceCountry.php');
	require('/home/EDRO.SetOfTools/System/1.Reporter/2.ReportViolation_ResourceRules.php'); //+
	//require('/home/EDRO.SetOfTools/System/1.Оповещение/0.ОтправкаПисьмаАдминистраторуСистемы/ПочтовыйРобот/SendMail/');
	//require('/home/EDRO.SetOfTools/System/1.Оповещение/0.ОтправкаПисьмаАдминистраторуСистемы/ПочтовыйРобот/SuspectKeys/Complains');
	//require('/home/EDRO.SetOfTools/System/1.Оповещение/0.ОтправкаПисьмаАдминистраторуСистемы/ПочтовыйРобот/SuspectKeys/Violation/ResidenceCountryLaw');
	//require('/home/EDRO.SetOfTools/System/1.Оповещение/0.ОтправкаПисьмаАдминистраторуСистемы/ПочтовыйРобот/SuspectKeys/Violation/ResurceRules');
	//require('/home/EDRO.SetOfTools/System/1.Оповещение/0.ОтправкаПисьмаАдминистраторуСистемы/ПочтовыйРобот/SuspectKeys/Violation/Rights_ResidentCounttry1_residentCountry2');
	require('/home/EDRO.SetOfTools/System/2.Functions/0.key.php');
	require('/home/EDRO.SetOfTools/System/2.Functions/1.FunctionsSetup.php');
	require('/home/EDRO.SetOfTools/System/2.Functions/2.Platforms.php');
	require('/home/EDRO.SetOfTools/System/2.Functions/3.Functions.php');
	require('/home/EDRO.SetOfTools/System/2.Functions/4.Фразы.php');
	require('/home/EDRO.SetOfTools/System/2.Functions/5.Dyn.php');
	require('/home/EDRO.SetOfTools/System/2.Functions/6.StringFunctions.php');

	require('/home/EDRO.SetOfTools/System/3.VectorKIIM/0.KIIM.php');
	require('/home/EDRO.SetOfTools/System/3.VectorKIIM/1.objKIIM.activation.php');
	require('/home/EDRO.SetOfTools/System/3.VectorKIIM_Helper/1.objKIIM.activation.php');
	require('/home/EDRO.SetOfTools/System/4.RAMBuffer/0.EDRO_Objects.php');
	require('/home/EDRO.SetOfTools/System/5.Styles/0.CSS.Styles.php');
	require('/home/EDRO.SetOfTools/System/6.HTML_Interfaces/0.HTML_HeadInterface.php');
	require('/home/EDRO.SetOfTools/System/7.Templates/0.strKIIM.Template.php');
	//$ч0Шаг++;
//	}
exit;
echo '[.]Loader'."\n";
?>