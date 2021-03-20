<?php
/*© A.A.CheckMaRev assminog@gmail.com tubmulur@yandex.ru*/
////// EDRO
   //   /\
  //  <  **> 
 //     Jl  
////// 2020
//EDRO.Buffering.
//		EDRO.Buffer
//		EDRO.Process(HFIC.Construct)
		//R 'Report' -> Browser
		//R 'ReportError' -> Browser
		//R FMEM
		//R
		//R
		//R
		//W [x]
		//W [x]
		//W [x]
		//W [x]
		//W [x]
		//W [x]

//LOADER('EDRO_Buffering');
echo 'EDRO_Buffering'."\n";
class EDRO_Buffering
	{
	private $strName	='';
	private $strPath	='';
	private $arrLib	= 
		array(
			//EDRO components
			'O2oЗаписьИтого'					=>'/home/EDRO/4.Objects/Write/Cloud/Disk/Element/O2oЗаписьИтого.php',
			'ПрочитатьСлушателя'					=>'/home/EDRO/4.Objects/Read/Cloud/Disk/ПрочитатьСлушателей.php',
			'СоздатьСеанс'						=>'/home/EDRO/4.Objects/Write/Cloud/Disk/Element/СоздатьСеанс.php',
			'[O] EDRO.Objects'					=>'/home/EDRO/4.Objects/Objects.php',
			'[R] EDRO.Reality'					=>'/home/EDRO/3.Reality/Reality.php',
			'[D] EDRO.Design'					=>'/home/EDRO/2.Design/Design.php',
			'[E] EDRO.Event'					=>'/home/EDRO/1.Event/Event.php',
			
			
			'EDRO_Objects.ObjectConstructor'			=>'/home/EDRO/EDRO.php',
			

			//EDRO object constructor
			

			//Wi is a short record of Waveinspiration
			//WiReach объединяет участников в проект.
			//WiReach - Assembles parttakers in to a complete project.  
		//	'WiReach_DjWorking'				=>'/home/EDRO/4.Objects/Read/Net/WiReach_DjWorking.php',
		//	'WiReach_HFIC_ParttakersSignatures'		=>'/home/EDRO/4.Objects/Write/Display/Element/WiReach_HFIC_ParttakersSignatures.php',
			'Overlay'						=>'/home/EDRO/4.Objects/Write/Listener/Display/Element/Overlay/Overlay.php',
			'Listener'						=>'/home/EDRO/4.Objects/Write/Listener/Display/Element/Listener/Listener.php',
			'Listeners'						=>'/home/EDRO/4.Objects/Write/Listener/Display/Element/Listener/Listeners.php',
//			'Shader'						=>'/home/EDRO/4.Objects/Write/Listener/Display/Element/Shader/Shader.php',
//			'Image'							=>'/home/EDRO/4.Objects/Write/Listener/Display/Element/Image/Image.php',
			'StatiticIndicator'					=>'/home/EDRO/4.Objects/Write/Listener/Display/Element/SystemEventIndicatorStream/StatisticIndicator.php',
			'StationBlock'						=>'/home/EDRO/4.Objects/Write/Listener/Display/Element/Station/StationBlock.php',
			'StationSearchBlock'					=>'/home/EDRO/4.Objects/Write/Listener/Display/Element/SearchBlocks/StationSearchBlock.php',
			// 'Genre'							=>'/home/EDRO/4.Objects/Write/Listener/Display/Element/Genre/Genre.php',
			'Tag'							=>'/home/EDRO/4.Objects/Write/Listener/Display/Element/Tag/Tag.php',
			// 'GenreTag'						=>'/home/EDRO/4.Objects/Write/Listener/Display/Element/Genre/GenreTag.php',
			'FormInput'						=>'/home/EDRO/4.Objects/Write/Listener/Display/Form/FormInput.php',
			'Login'							=>'/home/EDRO/4.Objects/Write/Listener/Display/Element/Login/Login.php',
			'Registration'						=>'/home/EDRO/4.Objects/Write/Listener/Display/Element/Registration/Registration.php',
			// 'Bitrate'						=>'/home/EDRO/4.Objects/Write/Listener/Display/Element/Bitrate/Bitrate.php',
			// 'BitrateTag'						=>'/home/EDRO/4.Objects/Write/Listener/Display/Element/Bitrate/BitrateTag.php',
			'ICQRType'						=>'/home/EDRO/4.Objects/Write/Listener/Display/Element/Station/AudioType/ICQRType.php',
			'AudioType'						=>'/home/EDRO/4.Objects/Write/Listener/Display/Element/Station/AudioType/AudioType.php',
			// 'CreatorType'						=>'/home/EDRO/4.Objects/Write/Listener/Display/Element/CreatorType/CreatorType.php',
			'StationLink'						=>'/home/EDRO/4.Objects/Write/Listener/Display/Element/Station/StationLink.php',
			'StationQualityUPLink'					=>'/home/EDRO/4.Objects/Write/Listener/Display/Element/Station/StationQualityUPLink.php',
			'StationPlayerHeader'					=>'/home/EDRO/4.Objects/Write/Listener/Display/Element/Station/Header/Header.php',
			// 'StationPlayerEventIndicator'				=>'/home/EDRO/4.Objects/Write/Listener/Display/Element/SystemEventIndicatorStream/PlayerEventIndicator.php',
			'IndicatorPlayer'					=>'/home/EDRO/4.Objects/Write/Listener/Display/Element/SystemEventIndicatorStream/IndicatorPlayer.php',
			'StationPlayer'						=>'/home/EDRO/4.Objects/Write/Listener/Display/Element/Station/Player/Player.php',
			'SystemEventIndicatorStream'				=>'/home/EDRO/4.Objects/Write/Listener/Display/Element/SystemEventIndicatorStream/SystemEventIndicatorStream.php',
			'IndicatorRole'						=>'/home/EDRO/4.Objects/Write/Listener/Display/Element/SystemEventIndicatorStream/IndicatorRole.php',
			'IndicatorNetwork'					=>'/home/EDRO/4.Objects/Write/Listener/Display/Element/SystemEventIndicatorStream/IndicatorNetwork.php',
			'IndicatorMasterClock'					=>'/home/EDRO/4.Objects/Write/Listener/Display/Element/SystemEventIndicatorStream/IndicatorMasterClock.php',
			'IndicatorLang'						=>'/home/EDRO/4.Objects/Write/Listener/Display/Element/SystemEventIndicatorStream/IndicatorLang.php',
			'IndicatorHiFi'						=>'/home/EDRO/4.Objects/Write/Listener/Display/Element/SystemEventIndicatorStream/IndicatorHiFi.php',
			'IndicatorDimensions'					=>'/home/EDRO/4.Objects/Write/Listener/Display/Element/SystemEventIndicatorStream/IndicatorDimensions.php',
			'Pagination'						=>'/home/EDRO/4.Objects/Write/Listener/Display/Element/Pagination/Pagination.php',
			'HiFiNavigation'					=>'/home/EDRO/4.Objects/Write/Listener/Display/Element/HiFiNavigation/HiFiNavigation.php',
			'DynaScreenEventIndicator'				=>'/home/EDRO/4.Objects/Write/Listener/Display/Element/SystemEventIndicatorStream/DynaScreenEventIndicator.php',

			'DynaScreen'						=>'/home/EDRO/4.Objects/Write/Listener/Display/Element/DynaScreen/DynaScreen.php',
			// 'DynaBlock'						=>'/home/EDRO/4.Objects/Write/Listener/Display/Element/DynaBlock/DynaBlock.php',
			// 'FileUploadForm'					=>'/home/EDRO/4.Objects/Write/Listener/Display/Form/FileUploadForm.php',

			// 'FileSetupRead'						=>'/home/EDRO/4.Objects/Read/Cloud/Disk/FileSetupRead.php',
			'MyXML'							=>'/home/EDRO/4.Objects/Read/Cloud/Disk/MyXML.php',
			'JSON'							=>'/home/EDRO/4.Objects/Read/Cloud/Disk/MyJSON.php',
			'FileRead'						=>'/home/EDRO/4.Objects/Read/Cloud/Disk/FileRead.php',
			'ЕДРО:ПОЛИМЕР'						=>'/home/ЕДРО:ПОЛИМЕР/ЕДРО.php',
			// 'FilePathsValidate'					=>'/home/EDRO/4.Objects/Read/Cloud/Disk/FilePathsValidate.php',

			// 'FileTypeApply'						=>'/home/EDRO/4.Objects/Write/Listener/Display/Element/File/FileTypeApply.php',
			// 'FileTemplateApply'					=>'/home/EDRO/4.Objects/Write/Listener/Display/Element/File/FileTemplateApply.php',

			// 'FileInfoRead'						=>'/home/EDRO/4.Objects/Read/Cloud/Disk/FileInfoRead.php',
			// 'FileListRead'						=>'/home/EDRO/4.Objects/Read/Cloud/Disk/FileListRead.php',

			// 'File'							=>'/home/EDRO/4.Objects/Write/Listener/Display/Element/File/File.php',

			// 'FileList'						=>'/home/EDRO/4.Objects/Write/Listener/Display/List/FileList.php',
			// 'StationList'						=>'/home/EDRO/4.Objects/Write/Listener/Display/Element/Station/StationLink.php',
			'StationList'						=>'/home/EDRO/4.Objects//Write/Listener/Display/Element/Station/StationList.php',
			//  'FileTreet'						=>'/home/EDRO/4.Objects/Write/Listener/Display/List/FileTree.php',
			// 'FileListSort'						=>'/home/EDRO/4.Objects/Write/Listener/Display/List/FileListSort.php',
			
			
			'FileWrite'						=>'/home/EDRO/4.Objects/Write/Cloud/Disk/Element/FileWrite.php',

			'FileHistoryWrite'					=>'/home/EDRO/4.Objects/Write/Cloud/Disk/Element/FileHistoryWrite.php',

			// 'FileUploadProcessWrite'				=>'/home/EDRO/4.Objects/Write/Cloud/Disk/Element/FileUploadProcessWrite.php',
		);
		// 'Error'		=>'/home/chekmarev/Job/EDRO.SetOfTools/System/0.Reporter/Error.php',
		// 'Waveinspiration'	=>'/home/RCe.EDRO/4.Objects/Waveinspiration/Waveinspiration.php',
		 // 'FileReality'	=>'/home/chekmarev/Job/EDRO.SetOfTools/EDRO/4.Objects/File/Reality/FileAccess.php'
		// 'FileStream'		=>'/home/chekmarev/Job/EDRO.SetOfTools/EDRO/4.Objects/File/Stream/FileStream.php',
		// 'FileIndexWrite'	=>'/home/chekmarev/Job/EDRO.SetOfTools/EDRO/4.Objects/ConstructorFile/LocalDisk/Write/FileIndexWrite.php',
		// 'FileUpload'		=>'/home/chekmarev/Job/EDRO.SetOfTools/EDRO/4.Objects/File/Upload//Upload.php',
		// 'FileUploadDesign'	=>'/home/chekmarev/Job/EDRO.SetOfTools/EDRO/4.Objects/File/Display/Upload/Design/UploadDesign.php',
		// FileAccess'		=>'/home/RCe.EDRO/4.Objects/Waveinspiration/File/FileAccess.php',
		// FileWrite'		=>'/home/RCe.EDRO/4.Objects/Waveinspiration/File/FileWrite.php',
		// FileIndex'		=>'/home/RCe.EDRO/4.Objects/Waveinspiration/File/FileIndex.php',
		// FileShow'		=>'/home/RCe.EDRO/4.Objects/Waveinspiration/File/FileShow.php',
	public function __construct()
		{
		foreach($this->arrLib as $strName=>$strPath)
			{
			$this->strName	=$strName;
			$this->strPath	=$strPath;
			$this->_Read($strName);
			//sleep(1);
			}
		}
	private function _Read($_strName)
		{
		require($this->strPath);
		}
	public static function RAM()
		{
		$objEDRO_Buffering=new EDRO_Buffering();
		}
	}
EDRO_Buffering::RAM();
?>