<?php
//© A.A.CheckMaRev assminog@gmail.com tubmulur@yandex.ru
echo '[v]Dyn'."\n";
//http://hifiintelligentclub.com/strArtistName
//    ?strName			=
//    &strStyle			=
//    &strGenre			=trance
//    &strHiFiType		=/HiFi%20beginner
//    &intBitrate		=0
//    &strCodec			=
//    &int0Page			=38
//    &int1OnPage		=1
//    &int0PlayingStationNum	=
//    &strPlayingStationStyle	=
//    &strPlayingStationId	=XBUkAnNcbn9eXFBiQxpQY0RnQnh3VUpRYkQbDTkELAо26оо26о
//    &strStationId		=XBUkAnNcbn9eXFBiQxpQY0RnQnh3VUpRYkQbDTkELAо26оо26о

//$arrr = arrRestrictAndReportActionAndParametrs($_arrIncome=array());
//print_r($arrr);

function сРасширение($_сЗапрос)
	{
	
	}
function strSafeUsers($_strRequest)
	{
	return str_replace(array('%3C','%3E',"<",">",'о20о','о21о', 'U+02C2', 'U+02C3', 'U+003E', 'U+003C'), "_", $_strRequest);
	}
function arrReadRequestFromListenersBrowser($_rRadio)
	{
/*!*/	$sListenerRadio		= strSafeUsers(fread($_rRadio, 4096));
	if(!empty($sListenerRadio))
		{
		$arrListenerSetup	= explode("\n", $sListenerRadio	);
		}
	else
		{
		_Report('fread($sListenerRadio, 4096) empty.');
		}
	if(!is_array($arrListenerSetup))
		{
		$arrListenerSetup	= array();
		}
	$arrListenerSetup['rRadio']	= $_rRadio;
	print_r($arrListenerSetup);
	return $arrListenerSetup;
	}
function arrRequest2IndexArray($_arrEvent)
	{
	//print_r($_arrEvent);
	//$arrEvent['rRadio']='False/Resource';
	//$arrEvent['arr']=

	//
	//
	//
	//
	if(!isset($_arrEvent['rRadio'])&&empty($_arrEvent['rRadio'])) //It can not happen's but checking, 
		{					//because system are working  in time
							_Report('No radio is not working!!!');
		return $arrEvent['rRadio']		= FALSE;
		}
	$arrReality['rRadio']			= $_arrEvent['rRadio'];
					    unset($_arrEvent['rRadio']);
	$arrEvent['arrListener']['strPlatform']		= 'x';
	$arrEvent['arrListener']['strHost']			= 'x';
	$arrEvent['arrListener']['strAccept']			= 'x';
	$arrEvent['arrListener']['strAcceptLanguage']		= 'x';
	$arrEvent['arrListener']['strAcceptEncoding']		= 'x';
	$arrEvent['arrListener']['strConnection']		= 'x';
	$arrEvent['arrListener']['strCacheControl']		= 'x';
	foreach($_arrEvent as $strListenerReality)
		{
		echo $strListenerReality;
		echo "\n";
		if(($strListenerRealityName=сНачДоСимвола($strListenerReality, ' '))!==FALSE)
			{
			echo '$strListenerRealityName:'.$strListenerRealityName;
			//echo strlen($strListenerRealityName);
			echo "\n";
			$arrReality['arrListener']['strName']		= $strListenerRealityName;
			echo '$arrReality[arrListener][strName]:'.$arrReality['arrListener']['strName'];
			echo "\n";
			$int1ListenerLenEventName			= strlen($arrReality['strName']);
			$strListenerProto				= сКонцДоСимвола($strListenerReality, ' ');
			echo '$strListenerProto:'.$strListenerProto;
			echo "\n";
			$int1ListenerLenProto				= strlen($strListenerProto);
			$arrReality['strListenerProto']			= $strListenerProto;
			echo '$arrReality[strListenerProto]:'.$arrReality['strListenerProto'];
			echo "\n";
			//$strListenerAccept	= str_replace( ':', '', $strIndex);
			if($strListenerRealityName=="GET"||$strListenerRealityName=="POST"||$strListenerRealityName=="PUT")
				{
				//echo '<>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>qeqeqwe'."\n";
				echo "\n";
				echo '$strListenerRealityRequest:';
				echo $strListenerRealityRequest			= trim(CheckMaSubstr($strListenerReality , $int1ListenerLenEventName,  -$int1ListenerLenProto));
				echo "\n";

				echo "\n";
				echo '$strListenerRealityObject:';
				echo $strListenerRealityObject			= сНачДоСимвола($strListenerRealityRequest, "?");
				echo "\n";

				echo "\n";
				echo '$strListenerRealityObjectParams:';
				echo $strListenerRealityObjectParams		= сНачОтСимвола($strListenerRealityRequest, "?", 0, 1);
				echo "\n";

				echo "\n";
				echo '$arrReality[strObject]:';
				echo $arrReality['arrListener']['strObject']	= $strListenerRealityObject;
				echo "\n";

				echo "\n";
				echo '$arrReality[strObjectParams]:';
				echo $arrReality['strObjectParams']		= arrEventParams2Array($strListenerRealityParams);
				echo "\n";

				echo "\n";
    				echo $strExt					= сКонцДоСимвола($arrReality['strParamName'], '.');
				echo "\n";
				echo $arrReality['strExt']			= $strExt?FALSE:$strExt;
				echo "\n";
				///_Report('Unusall position of Event string $arrEvent[strEvent]: '.$strEvent);
				}
			print_r($arrReality);
			exit;
			/*elseif($strListenerRealityName=='Host')
				{
				$arrEvent['strHost'] 		= $strEvent;
				}
			elseif($strListenerRealityName=='Accept')
				{
				$arr=explode(',' ,trim($strEvent));
				if(is_array($arr))
					{
					}
				else
					{
					$arr	=array();
					}
				$arrEvent['strAccept'] 		= $arr;
				}
			elseif($strIndex=='Connection')
				{
				$arrEvent['strConnection'] 	= $strEvent;
				}
			elseif($strIndex=='User-Agent')
				{
				$arrEvent['strPlatform'] 	= $strEvent;
				$arrEvent['arrPlatform'] 	= arrUserAgent2Platform($arrEvent['strPlatform']);
				}
			elseif($strIndex=='Accept-Language')
				{
				$arrEvent['strAcceptLanguage'] 	= $strEvent;
				}
			elseif($strIndex=='Accept-Encoding')
				{
				$arrEvent['strAcceptEncoding'] 	= $strEvent;
				}
			else
				{
				$arrEvent[$strIndex]		= $strEvent;
				_Report('Unusall position of Event string $arrEvent[strEvent]: '.$strIndex.'/'.$strEvent);
				}*/
			}
		}
	return $arrEvent;
	}
function arrGetEvent($rRadio)
/*+4+*/ {
	//$rRadio 				= stream_socket_accept($rRadio, -1);
	//$arrReadRequestFromListenersBrowser	= arrRequest2IndexArray(arrReadRequestFromListenersBrowser($rRadio));
/*+6+*/ //return $arrReadRequestFromListenersBrowser;
/*+7+*/	}

function arrEventParams2Array($_strQuery)
	{
	$arrResult	=array();
	$strQuery	=$_strQuery;
		   unset($_strQuery);

	$arrQuery=arrPrepare($strQuery);
	               unset($strQuery);

	foreach($arrQuery as $strQuery)
		{
		$arrBeforeValidate		= arrPrepare2($strQuery);
		$strParamName			= $arrBeforeValidate[0];
		$strParamValue			= $arrBeforeValidate[1];
		$arrResult[$strParamName]	= urldecode(urldecode(сПреобразовать($strParamValue, "вСтроку")));
		}
	return $arrResult;
	}
function arrGetEventSetter($rRadio)
/*!0!*/	{
/*!1!*/	//$arrEvent				= array();
///+	$arrEvent['rRadio'] 			= '';
/*!2!*/	//$arrEvent['strEvent']			= '';
/*!3!*/	//$arrEvent['arrReality']			= array();
/*!4!*/	//$arrEvent['arrListener'] 		= array();

/*!5!*/	//$arrListener		= arrGetEvent($rRadio);
	//print_r($arrListener);
/*!6*/	//echo $strEvent			= $arrListener['strEvent'];
/*!7*/	//$arrEvent			= arrRestrictAndReportEventsAndParametrs(
	//				array(
	//					'strEvent'	=>urldecode($strEvent), //Why it is encoded? Shall find
	//					'arrReality'	=>arrEventParams2Array($strEvent),
	//					)
	//				);
	//print_r($arrEvent);
	//$arrEvent['arrListener']	= $arrEvent['arrListener'];
	//echo '<pre>';
	//print_r($arrEvent);
	//echo '</pre>';
	//exit;
/*14!*/	//return $arrEvent;
/*15!*/	}


function arrRestrictAndReportEventsAndParametrs($_arrIncome, $_strReplaceName='', $_strReplaceValue='')
	{
	$arrResult['strEvent']		= '';
	$arrResult['arrReality']	= array();
	$arrFallBack			= arrAllEventIncomeParametrsFallBack();
	//$arrFallBack['arrFallBack']

	if(is_array($_arrIncome))
		{
		$arrIncome		= $_arrIncome;
				   unset($_arrIncome);
		}
	else
		{
		$arrIncome		= array();
		}
	$strReplaceName			= $_strReplaceName;
				    unset($_strReplaceName);
	$strReplaceValue		= $_strReplaceValue;
				    unset($_strReplaceValue);
	if(is_file('/home/ЕДРО:ПОЛИМЕР/о2о.БазаДанных/'.strDataBase().'/Events/'.сПреобразовать($arrIncome['strEvent'], "вКоманду").'/run.php'))
		{
		$arrResult['strEvent']		= $arrIncome['strEvent'];
		}
	else
		{
		_Report('Событие не сществует в реальности!: '.$arrResult['strEvent']);
		$arrResult['strEvent']		= '/';
		}
	foreach($arrFallBack['arrReality'] as $strFallBackName=>$arrFallBackParams)
		{
		$arrResult['arrReality'][$strFallBackName]	=$arrFallBackParams['int0FallBack']; //attach strFaallBack(defaults)

		foreach($arrIncome['arrReality'] as $strIncomeName=>$strIncomeValue)
			{
			if($strFallBackName==$strIncomeName)
				{
				if(isset($arrFallBackParams['int0MaxValue'])&&($strIncomeValue>$arrFallBackParams['int0MaxValue']))
					{
												_Report($strIncomeName.'>'.$arrFallBackParams['int0MaxValue'].': '.$strIncomeValue);
					$strIncomeValue						= $arrFallBackParams['int0MaxValue'];
					$arrResult['arrReality'][$strIncomeName]		= $strIncomeValue;
	    				}
				if(isset($arrFallBackParams['int0MaxLength'])&&(strlen($strIncomeValue)>$arrFallBackParams['int0MaxLength']))
					{
												_Report($arrIncome['arrReality'][$strIncomeName].'length>'.$arrFallBackParams['int0MaxLength']);
					$strIncomeValue						= substr($arrIncome['arrReality'][$strIncomeName],0, $arrFallBackParams['int0MaxLength']);
					$arrResult['arrReality'][$strIncomeName]		= $strIncomeValue;
					}
				else
					{
					$arrResult['arrReality'][$strIncomeName]		= $strIncomeValue;
					}
				}
			}
		}
	//print_r($arrResult);
	//exit;
	return $arrResult;
	}
function arrPrepare($_strQuery, $_arrDataTypes=array())
	{
	$arrQuery	= array();
	$strQuery	= $_strQuery;
	    unset($_strQuery);
	
	if(strpos($strQuery, '&'))
		{
		$arrQuery	= explode('&', $strQuery);
		}
	elseif(strpos($strQuery, '='))
		{
		$arrQuery[0]	= $strQuery;
		//$arrQuery=explode('=', $strQuery);
		}
	else
		{
		}
	return $arrQuery;
	}
function arrPrepare2($_strQuery, $_arrDataTypes=array())
	{
	$arrQuery	= array();
	$strQuery	= $_strQuery;
	    unset($_strQuery);
	if(strpos($strQuery, '='))
		{
		$arrQuery	= explode('=', $strQuery);
		}
	else
		{
		}
	return $arrQuery;
	}
$ч0ВыполненоЧастей++;
echo '[.]Dyn'."\n";
?>