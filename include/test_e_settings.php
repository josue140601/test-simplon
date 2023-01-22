<?php
$tdatatest_e = array();
$tdatatest_e[".searchableFields"] = array();
$tdatatest_e[".ShortName"] = "test_e";
$tdatatest_e[".OwnerID"] = "";
$tdatatest_e[".OriginalTable"] = "test-e";


$tdatatest_e[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatatest_e[".originalPagesByType"] = $tdatatest_e[".pagesByType"];
$tdatatest_e[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatatest_e[".originalPages"] = $tdatatest_e[".pages"];
$tdatatest_e[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatatest_e[".originalDefaultPages"] = $tdatatest_e[".defaultPages"];

//	field labels
$fieldLabelstest_e = array();
$fieldToolTipstest_e = array();
$pageTitlestest_e = array();
$placeHolderstest_e = array();

if(mlang_getcurrentlang()=="French")
{
	$fieldLabelstest_e["French"] = array();
	$fieldToolTipstest_e["French"] = array();
	$placeHolderstest_e["French"] = array();
	$pageTitlestest_e["French"] = array();
	$fieldLabelstest_e["French"]["NOM"] = "NOM";
	$fieldToolTipstest_e["French"]["NOM"] = "";
	$placeHolderstest_e["French"]["NOM"] = "";
	$fieldLabelstest_e["French"]["PRENOM"] = "PRENOM";
	$fieldToolTipstest_e["French"]["PRENOM"] = "";
	$placeHolderstest_e["French"]["PRENOM"] = "";
	$fieldLabelstest_e["French"]["NUMERO_DE_TELEPHONE"] = "NUMERO DE TELEPHONE";
	$fieldToolTipstest_e["French"]["NUMERO_DE_TELEPHONE"] = "";
	$placeHolderstest_e["French"]["NUMERO_DE_TELEPHONE"] = "";
	$fieldLabelstest_e["French"]["ADRESSE_MAIL"] = "ADRESSE MAIL";
	$fieldToolTipstest_e["French"]["ADRESSE_MAIL"] = "";
	$placeHolderstest_e["French"]["ADRESSE_MAIL"] = "";
	$fieldLabelstest_e["French"]["Heure_d_enregistrement"] = "Heure D'enregistrement";
	$fieldToolTipstest_e["French"]["Heure_d_enregistrement"] = "";
	$placeHolderstest_e["French"]["Heure_d_enregistrement"] = "";
	$fieldLabelstest_e["French"]["Heure_de_modification"] = "Heure de modification";
	$fieldToolTipstest_e["French"]["Heure_de_modification"] = "";
	$placeHolderstest_e["French"]["Heure_de_modification"] = "";
	$pageTitlestest_e["French"]["add"] = "ENREGISTREZ-VOUS";
	if (count($fieldToolTipstest_e["French"]))
		$tdatatest_e[".isUseToolTips"] = true;
}


	$tdatatest_e[".NCSearch"] = true;



$tdatatest_e[".shortTableName"] = "test_e";
$tdatatest_e[".nSecOptions"] = 0;

$tdatatest_e[".mainTableOwnerID"] = "";
$tdatatest_e[".entityType"] = 0;
$tdatatest_e[".connId"] = "test_at_localhost";


$tdatatest_e[".strOriginalTableName"] = "test-e";

	



$tdatatest_e[".showAddInPopup"] = false;

$tdatatest_e[".showEditInPopup"] = false;

$tdatatest_e[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatatest_e[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatatest_e[".listAjax"] = false;
//	temporary
$tdatatest_e[".listAjax"] = false;

	$tdatatest_e[".audit"] = false;

	$tdatatest_e[".locking"] = false;


$pages = $tdatatest_e[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatest_e[".edit"] = true;
	$tdatatest_e[".afterEditAction"] = 1;
	$tdatatest_e[".closePopupAfterEdit"] = 1;
	$tdatatest_e[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatest_e[".add"] = true;
$tdatatest_e[".afterAddAction"] = 1;
$tdatatest_e[".closePopupAfterAdd"] = 1;
$tdatatest_e[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatest_e[".list"] = true;
}



$tdatatest_e[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatest_e[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatest_e[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatest_e[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatest_e[".printFriendly"] = true;
}



$tdatatest_e[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatest_e[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatest_e[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatest_e[".isUseAjaxSuggest"] = true;

$tdatatest_e[".rowHighlite"] = true;





$tdatatest_e[".ajaxCodeSnippetAdded"] = false;

$tdatatest_e[".buttonsAdded"] = false;

$tdatatest_e[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatest_e[".isUseTimeForSearch"] = false;


$tdatatest_e[".badgeColor"] = "00C2C5";


$tdatatest_e[".allSearchFields"] = array();
$tdatatest_e[".filterFields"] = array();
$tdatatest_e[".requiredSearchFields"] = array();

$tdatatest_e[".googleLikeFields"] = array();
$tdatatest_e[".googleLikeFields"][] = "NOM";
$tdatatest_e[".googleLikeFields"][] = "PRENOM";
$tdatatest_e[".googleLikeFields"][] = "NUMERO DE TELEPHONE";
$tdatatest_e[".googleLikeFields"][] = "ADRESSE MAIL";
$tdatatest_e[".googleLikeFields"][] = "Heure d'enregistrement";
$tdatatest_e[".googleLikeFields"][] = "Heure de modification";



$tdatatest_e[".tableType"] = "list";

$tdatatest_e[".printerPageOrientation"] = 0;
$tdatatest_e[".nPrinterPageScale"] = 100;

$tdatatest_e[".nPrinterSplitRecords"] = 40;

$tdatatest_e[".geocodingEnabled"] = false;










$tdatatest_e[".pageSize"] = 20;

$tdatatest_e[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatest_e[".strOrderBy"] = $tstrOrderBy;

$tdatatest_e[".orderindexes"] = array();


$tdatatest_e[".sqlHead"] = "SELECT NOM,  	PRENOM,  	`NUMERO DE TELEPHONE`,  	`ADRESSE MAIL`,  	`Heure d'enregistrement`,  	`Heure de modification`";
$tdatatest_e[".sqlFrom"] = "FROM `test-e`";
$tdatatest_e[".sqlWhereExpr"] = "";
$tdatatest_e[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatest_e[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatest_e[".arrGroupsPerPage"] = $arrGPP;

$tdatatest_e[".highlightSearchResults"] = true;

$tableKeystest_e = array();
$tableKeystest_e[] = "NUMERO DE TELEPHONE";
$tableKeystest_e[] = "ADRESSE MAIL";
$tdatatest_e[".Keys"] = $tableKeystest_e;


$tdatatest_e[".hideMobileList"] = array();




//	NOM
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "NOM";
	$fdata["GoodName"] = "NOM";
	$fdata["ownerTable"] = "test-e";
	$fdata["Label"] = GetFieldLabel("test_e","NOM");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "NOM";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NOM";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=10";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatest_e["NOM"] = $fdata;
		$tdatatest_e[".searchableFields"][] = "NOM";
//	PRENOM
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "PRENOM";
	$fdata["GoodName"] = "PRENOM";
	$fdata["ownerTable"] = "test-e";
	$fdata["Label"] = GetFieldLabel("test_e","PRENOM");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "PRENOM";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PRENOM";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=30";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatest_e["PRENOM"] = $fdata;
		$tdatatest_e[".searchableFields"][] = "PRENOM";
//	NUMERO DE TELEPHONE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "NUMERO DE TELEPHONE";
	$fdata["GoodName"] = "NUMERO_DE_TELEPHONE";
	$fdata["ownerTable"] = "test-e";
	$fdata["Label"] = GetFieldLabel("test_e","NUMERO_DE_TELEPHONE");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "NUMERO DE TELEPHONE";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`NUMERO DE TELEPHONE`";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "tel";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatest_e["NUMERO DE TELEPHONE"] = $fdata;
		$tdatatest_e[".searchableFields"][] = "NUMERO DE TELEPHONE";
//	ADRESSE MAIL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "ADRESSE MAIL";
	$fdata["GoodName"] = "ADRESSE_MAIL";
	$fdata["ownerTable"] = "test-e";
	$fdata["Label"] = GetFieldLabel("test_e","ADRESSE_MAIL");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "ADRESSE MAIL";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`ADRESSE MAIL`";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "email";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatest_e["ADRESSE MAIL"] = $fdata;
		$tdatatest_e[".searchableFields"][] = "ADRESSE MAIL";
//	Heure d'enregistrement
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Heure d'enregistrement";
	$fdata["GoodName"] = "Heure_d_enregistrement";
	$fdata["ownerTable"] = "test-e";
	$fdata["Label"] = GetFieldLabel("test_e","Heure_d_enregistrement");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "Heure d'enregistrement";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Heure d'enregistrement`";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
		$edata["autoUpdatable"] = true;

	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatest_e["Heure d'enregistrement"] = $fdata;
		$tdatatest_e[".searchableFields"][] = "Heure d'enregistrement";
//	Heure de modification
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Heure de modification";
	$fdata["GoodName"] = "Heure_de_modification";
	$fdata["ownerTable"] = "test-e";
	$fdata["Label"] = GetFieldLabel("test_e","Heure_de_modification");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "Heure de modification";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Heure de modification`";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
		$edata["autoUpdatable"] = true;

	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatest_e["Heure de modification"] = $fdata;
		$tdatatest_e[".searchableFields"][] = "Heure de modification";


$tables_data["test-e"]=&$tdatatest_e;
$field_labels["test_e"] = &$fieldLabelstest_e;
$fieldToolTips["test_e"] = &$fieldToolTipstest_e;
$placeHolders["test_e"] = &$placeHolderstest_e;
$page_titles["test_e"] = &$pageTitlestest_e;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["test-e"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["test-e"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_test_e()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "NOM,  	PRENOM,  	`NUMERO DE TELEPHONE`,  	`ADRESSE MAIL`,  	`Heure d'enregistrement`,  	`Heure de modification`";
$proto0["m_strFrom"] = "FROM `test-e`";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "NOM",
	"m_strTable" => "test-e",
	"m_srcTableName" => "test-e"
));

$proto6["m_sql"] = "NOM";
$proto6["m_srcTableName"] = "test-e";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "PRENOM",
	"m_strTable" => "test-e",
	"m_srcTableName" => "test-e"
));

$proto8["m_sql"] = "PRENOM";
$proto8["m_srcTableName"] = "test-e";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "NUMERO DE TELEPHONE",
	"m_strTable" => "test-e",
	"m_srcTableName" => "test-e"
));

$proto10["m_sql"] = "`NUMERO DE TELEPHONE`";
$proto10["m_srcTableName"] = "test-e";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "ADRESSE MAIL",
	"m_strTable" => "test-e",
	"m_srcTableName" => "test-e"
));

$proto12["m_sql"] = "`ADRESSE MAIL`";
$proto12["m_srcTableName"] = "test-e";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Heure d'enregistrement",
	"m_strTable" => "test-e",
	"m_srcTableName" => "test-e"
));

$proto14["m_sql"] = "`Heure d'enregistrement`";
$proto14["m_srcTableName"] = "test-e";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Heure de modification",
	"m_strTable" => "test-e",
	"m_srcTableName" => "test-e"
));

$proto16["m_sql"] = "`Heure de modification`";
$proto16["m_srcTableName"] = "test-e";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "test-e";
$proto19["m_srcTableName"] = "test-e";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "NOM";
$proto19["m_columns"][] = "PRENOM";
$proto19["m_columns"][] = "NUMERO DE TELEPHONE";
$proto19["m_columns"][] = "ADRESSE MAIL";
$proto19["m_columns"][] = "Heure d'enregistrement";
$proto19["m_columns"][] = "Heure de modification";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "`test-e`";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "test-e";
$proto20=array();
$proto20["m_sql"] = "";
$proto20["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
$proto20["m_strCase"] = "";
$proto20["m_havingmode"] = false;
$proto20["m_inBrackets"] = false;
$proto20["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto20);

$proto18["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto18);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="test-e";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_test_e = createSqlQuery_test_e();


	
		;

						

$tdatatest_e[".sqlquery"] = $queryData_test_e;



$tableEvents["test-e"] = new eventsBase;
$tdatatest_e[".hasEvents"] = false;

?>