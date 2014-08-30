<?php
    /**
     * Class AbstractSuperUserEmployeeController
     *
     * filename:   AbstractSuperUserEmployeeController.php
     *
     * @author      Chukwuma J. Nze <chukkynze@ekinect.com>
     * @since       7/8/14 5:19 AM
     *
     * @copyright   Copyright (c) 2014 www.eKinect.com
     */


class AbstractSuperUserEmployeeController extends AbstractEmployeeController
{
    use EmployeeControls;

    public $layoutData;
    public $viewRootFolder = 'admin/employees/superuser/';

    /**
     * The layout that should be used for responses.
     */
    protected $layout = 'layouts.employee-cloud';


    public function __construct()
    {
        parent::__construct();

        $this->layoutData         =   $this->getCloudLayoutVariables("array");
    }


    /**
     * @param \Illuminate\View\View $layout
     */
    public function setLayout($layout)
    {
        $this->layout = $layout;
    }

    /**
     * @return \Illuminate\View\View
     */
    public function getLayout()
    {
        return $this->layout;
    }



    public function superUserLogout()
    {
        // Perform superuser specific action before logging out

        $this->employeeLogout();

        // Redirect to the logged out page
        return $this->makeResponseView('application/employees/employee-logout', array());
    }



    public function forceSuperUserEmployeeLogout()
    {
        // Redirect to the logged out page
        return  array
                (
                    'name'  =>  'superUserLogout',
                    'data'  =>  array(),
                );
    }

    /**
     * Gets default/current values for the cloud layout.
     * Subsequent values are defined by regular AJAX calls
     *
     * @param   string  $outputFormat
     *
     * @return bool|string|array
     */
    public function getCloudLayoutVariables($outputFormat="array")
    {
        $EmployeeDetailsObject	                =	$this->getEmployeeDetailsObject($this->employeeDetailsID);

		/**
		 * Update Class Properties
		 */
		$this->employeeNamePrefix   			=   $EmployeeDetailsObject->getEmployeeDetailsPrefix("text");
		$this->employeeFirstName   			    =   $EmployeeDetailsObject->getEmployeeDetailsFirstName();
		$this->employeeMidName1   			    =   $EmployeeDetailsObject->getEmployeeDetailsMidName1();
		$this->employeeMidName2  				=   $EmployeeDetailsObject->getEmployeeDetailsMidName2();
    	$this->employeeLastName   			    =   $EmployeeDetailsObject->getEmployeeDetailsLastName();
    	$this->employeeFullName				    =	$EmployeeDetailsObject->getEmployeeDetailsFullName();
    	$this->employeeDisplayName			    =	$EmployeeDetailsObject->getEmployeeDetailsDisplayName();
    	$this->employeeNameSuffix				=	$EmployeeDetailsObject->getEmployeeDetailsSuffix("text");

    	$this->employeeGender					=	$EmployeeDetailsObject->getEmployeeDetailsGender('text');
    	$this->employeeGenderRaw				=	$EmployeeDetailsObject->getEmployeeDetailsGender('raw');
    	$this->employeeBirthDate				=	$EmployeeDetailsObject->getEmployeeDetailsBirthDate();

		$this->employeePersonalSummary		    =	$EmployeeDetailsObject->getEmployeeDetailsPersonalSummary();

		$this->employeeLargeProfilePicUrl 	    =	$EmployeeDetailsObject->getEmployeeDetailsProfilePicUrl();
		$this->employeeMediumProfilePicUrl 	    =	$EmployeeDetailsObject->getEmployeeDetailsProfilePicUrl();
		$this->employeeSmallProfilePicUrl 	    =	$EmployeeDetailsObject->getEmployeeDetailsProfilePicUrl();
		$this->employeeXSmallProfilePicUrl 	    =	$EmployeeDetailsObject->getEmployeeDetailsProfilePicUrl();

		$this->employeePersonalWebsiteLink 	    =	$EmployeeDetailsObject->getEmployeeDetailsPersonalSiteUrl();
		$this->employeeSocialLinkLinkedIn 	    =	$EmployeeDetailsObject->getEmployeeDetailsLinkedInUrl();
		$this->employeeSocialLinkGooglePlus 	=	$EmployeeDetailsObject->getEmployeeDetailsGooglePlusUrl();
		$this->employeeSocialLinkTwitter 		=	$EmployeeDetailsObject->getEmployeeDetailsTwitterUrl();
		$this->employeeSocialLinkFacebook		=	$EmployeeDetailsObject->getEmployeeDetailsFacebookUrl();

    	$this->employeeHomeLink				    =	'/superuser/home';
    	$this->employeeProfileLink			    =	'/superuser/profile';

		/**
		 * ALERT Dropdown Variables
		 */
		$ALERT_listItemsArray	=	array
									(
										array
										(
											'alertLink' 			=>	'/superuser/alert/notice/',
											'alertLinkID'			=>	'1',
											'alertLabelClass'		=>	'label label-success',
											'alertIconClass'		=>	'fa fa-user',
											'alertContent'			=>	'5 users online.',
											'alertFuzzyTime'		=>	'Just Now',
											'alertExactTime'		=>	'1234567890',
										),
										array
										(
											'alertLink' 			=>	'/superuser/alert/notice/',
											'alertLinkID'			=>	'1',
											'alertLabelClass'		=>	'label label-primary',
											'alertIconClass'		=>	'fa fa-comment',
											'alertContent'			=>	'5 users online.',
											'alertFuzzyTime'		=>	'Just Now',
											'alertExactTime'		=>	'1234567890',
										),
										array
										(
											'alertLink' 			=>	'/superuser/alert/notice/',
											'alertLinkID'			=>	'1',
											'alertLabelClass'		=>	'label label-warning',
											'alertIconClass'		=>	'fa fa-lock',
											'alertContent'			=>	'5 users online.',
											'alertFuzzyTime'		=>	'Just Now',
											'alertExactTime'		=>	'1234567890',
										),
									);
		$ALERT_listItemsCount 	=	count($ALERT_listItemsArray) > 0 ? count($ALERT_listItemsArray) : 0;

		/**
		 * INBOX Dropdown Variables
		 */
		$INBOX_listItemsArray	=	array
									(
										array
										(
											'messageLink' 			=>	'/superuser/inbox/message/',
											'messageLinkID'			=>	'1',
											'messageAvatar'			=>	'/app/employees/superuser/img/avatars/avatar8.jpg',
											'messageAvatarAltText'	=>	'Jane Doe',
											'messageFromEmployeeType'	=>	'Signing Agency',
											'messageFrom'			=>	'Jane Doe',
											'messageFromShort'		=>	'Jane Doe',
											'messageContent'		=>	'Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse mole ...',
											'messageContentShort'	=>	'Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse mole ...',
											'messageFuzzyTime'		=>	'Just Now',
											'messageExactTime'		=>	'1234567890',
										),
										array
										(
											'messageLink' 			=>	'/superuser/inbox/message/',
											'messageLinkID'			=>	'2',
											'messageAvatar'			=>	'/app/employees/superuser/img/avatars/avatar7.jpg',
											'messageAvatarAltText'	=>	'Jane Doe',
											'messageFromEmployeeType'	=>	'Somebody',
											'messageFrom'			=>	'Jane Doe',
											'messageFromShort'		=>	'Jane Doe',
											'messageContent'		=>	'Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse mole ...',
											'messageContentShort'	=>	'Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse mole ...',
											'messageFuzzyTime'		=>	'Just Now',
											'messageExactTime'		=>	'1234567890',
										),
										array
										(
											'messageLink' 			=>	'/superuser/inbox/message/',
											'messageLinkID'			=>	'3',
											'messageAvatar'			=>	'/app/employees/superuser/img/avatars/avatar6.jpg',
											'messageAvatarAltText'	=>	'Jane Doe',
											'messageFromEmployeeType'	=>	'Signing Source',
											'messageFrom'			=>	'Jane Doe',
											'messageFromShort'		=>	'Jane Doe',
											'messageContent'		=>	'Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse mole ...',
											'messageContentShort'	=>	'Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse mole ...',
											'messageFuzzyTime'		=>	'Just Now',
											'messageExactTime'		=>	'1234567890',
										),
										array
										(
											'messageLink' 			=>	'/superuser/inbox/message/',
											'messageLinkID'			=>	'3',
											'messageAvatar'			=>	'/app/employees/superuser/img/avatars/default-male.jpg',
											'messageAvatarAltText'	=>	'Jane Doe',
											'messageFromEmployeeType'	=>	'Client',
											'messageFrom'			=>	'Jane Doe',
											'messageFromShort'		=>	'Jane Doe',
											'messageContent'		=>	'Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse mole ...',
											'messageContentShort'	=>	'Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse mole ...',
											'messageFuzzyTime'		=>	'4 hours ago',
											'messageExactTime'		=>	'1234567890',
										),
										array
										(
											'messageLink' 			=>	'/superuser/inbox/message/',
											'messageLinkID'			=>	'3',
											'messageAvatar'			=>	'/app/employees/superuser/img/avatars/default-male.jpg',
											'messageAvatarAltText'	=>	'Jane Doe',
											'messageFromEmployeeType'	=>	'Guest',
											'messageFrom'			=>	'Jane Doe',
											'messageFromShort'		=>	'Jane Doe',
											'messageContent'		=>	'Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse mole ...',
											'messageContentShort'	=>	'Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse mole ...',
											'messageFuzzyTime'		=>	'4 hours ago',
											'messageExactTime'		=>	'1234567890',
										),
									);
		$INBOX_listItemsCount 	=	count($INBOX_listItemsArray) > 0 ? count($INBOX_listItemsArray) : 0;


		/**
		 * TO-DO Dropdown Variables
		 */
		$TODO_listItemsArray 	=	array
									(
										array
										(
											'taskID'							=>	'1',
											'taskHeading'						=>	'Enter Signing Information', // Max 25 Characters
											'taskOverallCompletionLevel'		=>	'60',
											'taskProgressBarIsStriped'			=>	FALSE,
											'taskProgressBarIsStripedActive' 	=>	FALSE,

											'taskProgressBarIsComposite'		=>	FALSE, // The DISPLAY of this one task is broken into bits that add up to taskOverallCompletionLevel
											'taskBits'							=>	array
																					(
																						array
																						(
																							'taskBitProgressBarType' 	=>	'success', // success | info | warning | danger
																							'taskBitCompletionLevel'	=>	'60', // Out of 100%. Do not add the percent sign
																						),
																					),
										),
										array
										(
											'taskID'							=>	'2',
											'taskHeading'						=>	'Enter Signing Agency Info',
											'taskOverallCompletionLevel'		=>	'60',
											'taskProgressBarIsStriped'			=>	FALSE,
											'taskProgressBarIsStripedActive' 	=>	FALSE,

											'taskProgressBarIsComposite'		=>	FALSE, // The DISPLAY of this one task is broken into bits that add up to taskOverallCompletionLevel
											'taskBits'							=>	array
																					(
																						array
																						(
																							'taskBitProgressBarType' 	=>	'success', // Cannot be empty. Choose success | info | warning | danger
																							'taskBitCompletionLevel'	=>	'40', // Out of 100%. Do not add the percent sign
																						),
																						array
																						(
																							'taskBitProgressBarType' 	=>	'warning', // success | info | warning | danger
																							'taskBitCompletionLevel'	=>	'20', // Out of 100%. Do not add the percent sign
																						),
																					),
										),
										array
										(
											'taskID'							=>	'2',
											'taskHeading'						=>	'Order # 12345678901234567',
											'taskOverallCompletionLevel'		=>	'40',
											'taskProgressBarIsStriped'			=>	TRUE,
											'taskProgressBarIsStripedActive' 	=>	TRUE,
											'taskBits'							=>	array
																					(
																						array
																						(
																							'taskBitProgressBarType' 	=>	'danger', // Cannot be empty. Choose success | info | warning | danger
																							'taskBitCompletionLevel'	=>	'40', // Out of 100%. Do not add the percent sign
																						),
																					),
										),
									);

		$defaultLargeProfilePicUrl  	=	isset($this->employeeGender) ? '/app/employees/superuser/img/avatars/default-' . strtolower($this->employeeGender) . '-large.jpg'    :   '/app/employees/superuser/img/avatars/default-female-large.jpg';
		$defaultMediumProfilePicUrl  	=	isset($this->employeeGender) ? '/app/employees/superuser/img/avatars/default-' . strtolower($this->employeeGender) . '.jpg'          :   '/app/employees/superuser/img/avatars/default-female.jpg';
		$defaultSmallProfilePicUrl  	=	isset($this->employeeGender) ? '/app/employees/superuser/img/avatars/default-' . strtolower($this->employeeGender) . '.jpg'          :   '/app/employees/superuser/img/avatars/default-female.jpg';
		$defaultXSmallProfilePicUrl  	=	isset($this->employeeGender) ? '/app/employees/superuser/img/avatars/default-' . strtolower($this->employeeGender) . '.jpg'          :   '/app/employees/superuser/img/avatars/default-female.jpg';

		$employeePicUrlLarge		    =	$EmployeeDetailsObject->getEmployeeDetailsProfilePicUrl();
		$employeePicUrlMedium		    =	$EmployeeDetailsObject->getEmployeeDetailsProfilePicUrl();
		$employeePicUrlSmall			=	$EmployeeDetailsObject->getEmployeeDetailsProfilePicUrl();
		$employeePicUrlXSmall			=	$EmployeeDetailsObject->getEmployeeDetailsProfilePicUrl();


		/**
		 * User Menu Dropdown
		 *
		 * link - The link the option should go to
		 * iconClass - the class based icon to display
		 * sectionName - The name to display in the menu section
		 * labelClass - The label class used to highlight the icon and section. Default is no highlighting.
		 *
		 * Additional sections and highlighting can be added to the array given any logic you need
		 */
		$employeeUserMenuArray	=	array
									(
										/**
										 * Standard Sections
										 */
										array
										(
											'link'			=>	'/superuser/profile',
											'iconClass'		=>	'fa fa-user',
											'sectionName'	=>	'My Profile',
											'labelClass'	=>	'',
										),
										array
										(
											'link'			=>	'/superuser/account-ettings',
											'iconClass'		=>	'fa fa-cog',
											'sectionName'	=>	'Account Settings',
											'labelClass'	=>	'',
										),
										array
										(
											'link'			=>	'/superuser/address-book',
											'iconClass'		=>	'fa fa-book',
											'sectionName'	=>	'Address Book',
											'labelClass'	=>	'',
										),
										array
										(
											'link'			=>	'/superuser/privacy-settings',
											'iconClass'		=>	'fa fa-eye',
											'sectionName'	=>	'Privacy Settings',
											'labelClass'	=>	'',
										),
										array
										(
											'link'			=>	'/superuser/change-password',
											'iconClass'		=>	'fa fa-lock',
											'sectionName'	=>	'Change Password',
											'labelClass'	=>	'',
										),
										array
										(
											'link'			=>	'/superuser/logout',
											'iconClass'		=>	'fa fa-power-off',
											'sectionName'	=>	'Log Out',
											'labelClass'	=>	'',
										),
										array
										(
											'link'			=>	'/superuser/terms',
											'iconClass'		=>	'fa fa-lock',
											'sectionName'	=>	'Terms',
											'labelClass'	=>	'',
										),
										array
										(
											'link'			=>	'/superuser/privacy',
											'iconClass'		=>	'fa fa-power-off',
											'sectionName'	=>	'Privacy Policy',
											'labelClass'	=>	'',
										),
									);


        $output =   array
                    (
                        'employeeID'      =>  $this->employeeID,
                        'displayName'  =>  $this->employeeDisplayName,
                        'profileLink'  =>  'superuser/profile',


                        /**
                         *
                         */
                        'crewsSectionButtonText_xs'  =>  '1 pending | 2 complete',
                        'crewsSectionButtonText_sm'  =>  '1 pending | 2 complete',
                        'crewsSectionButtonText_md'  =>  '1 pending | 2 complete',
                        'crewsSectionButtonText_lg'  =>  '1 pending | 2 complete',

                        'jobsSectionButtonText_xs'  =>  '1 pending | 2 complete',
                        'jobsSectionButtonText_sm'  =>  '1 pending | 2 complete',
                        'jobsSectionButtonText_md'  =>  '1 pending | 2 complete',
                        'jobsSectionButtonText_lg'  =>  '1 pending | 2 complete',

                        'calendarSectionButtonText_xs'  =>  '1 event | 2 notices',
                        'calendarSectionButtonText_sm'  =>  '1 event | 2 notices',
                        'calendarSectionButtonText_md'  =>  '1 event | 2 notices',
                        'calendarSectionButtonText_lg'  =>  '1 event | 2 notices',

                        'analyticsSectionButtonText_xs'  =>  '1 alert | 2 notes',
                        'analyticsSectionButtonText_sm'  =>  '1 alert | 2 notes',
                        'analyticsSectionButtonText_md'  =>  '1 alert | 2 notes',
                        'analyticsSectionButtonText_lg'  =>  '1 alert | 2 notes',

                        'reportsSectionButtonText_xs'  =>  '1 new | 2 pending',
                        'reportsSectionButtonText_sm'  =>  '1 new | 2 pending',
                        'reportsSectionButtonText_md'  =>  '1 new | 2 pending',
                        'reportsSectionButtonText_lg'  =>  '1 new | 2 pending',

                        'helpSectionButtonText_xs'  =>  '1 request | 2 tips',
                        'helpSectionButtonText_sm'  =>  '1 request | 2 tips',
                        'helpSectionButtonText_md'  =>  '1 request | 2 tips',
                        'helpSectionButtonText_lg'  =>  '1 request | 2 tips',


                        /**
                         * Custom Ekinect JSS & CSS Files
                         */
                        'turnOnFlotCharts' 						=> 	FALSE,
                        'ModuleDirectoryReference' 				=>	'superuser/',
                        'cloudLayoutJSPageName'					=>	'superUserHome',
                        'actionSpecificCSSFilesArray'			=>	array(),
                        'actionSpecificJSFilesTopArray'			=>	array(),
                        'actionSpecificJSFilesBottomArray'		=>	array(),


                        /**
                         * NOTIFICATION/Alerts Dropdown Variables
                         */
                        'ALERT_footerLink'  					=> 	'/superuser/alerts',
                        'ALERT_totalMessageCount'  				=> 	(string) $ALERT_listItemsCount > 0 ? $ALERT_listItemsCount : '0',
                        'ALERT_title'  							=> 	'' . $ALERT_listItemsCount . ' Notification' . ($ALERT_listItemsCount == 1 ? '' : 's'),
                        'ALERT_listItemsArray'  				=> 	$ALERT_listItemsArray,


                        /**
                         * INBOX Dropdown Variables
                         */
                        'INBOX_sidebarLink'  					=> 	'/superuser/inbox',
                        'INBOX_sidebarLink_all'  				=> 	'/superuser/inbox/all',
                        'INBOX_sidebarLink_new'  				=> 	'/superuser/inbox/new',
                        'INBOX_sidebarLink_favorites'  			=> 	'/superuser/inbox/favorites',
                        'INBOX_footerLink'  					=> 	'/superuser/inbox',
                        'INBOX_composeNewLink'  				=> 	'/superuser/inbox/compose-new-message',
                        'INBOX_totalMessageCount'  				=> 	(string) $INBOX_listItemsCount > 0 ? $INBOX_listItemsCount : '0',
                        'INBOX_title'  							=> 	'' . $INBOX_listItemsCount . ' Message' . ($INBOX_listItemsCount == 1 ? '' : 's'),
                        'INBOX_listItemsArray'  				=> 	$INBOX_listItemsArray,


                        /**
                         * TODO_ Dropdown Variables
                         */
                        'TODO_footerLink'  						=> 	'/superuser/tasks',
                        'TODO_listTotalNumber'  				=> 	(string) count($TODO_listItemsArray) > 0 ? count($TODO_listItemsArray) : '0',
                        'TODO_listItemsArray'  					=> 	$TODO_listItemsArray,


                        /**
                         * User Login Dropdown Variables
                         */
                        'employeeLoginDropDownDisplayName' 		=> 	$EmployeeDetailsObject->getEmployeeDetailsFirstName(),
                        'employeeFullName' 						=> 	$EmployeeDetailsObject->getEmployeeDetailsFullName(),
                        'employeeHomeLink' 						=> 	'/superuser/home',
                        'employeeUserMenuArray' 					=> 	$employeeUserMenuArray,


                        /**
                         * Picture & Icon urls
                         */
                        'employeeLargeProfilePicUrl' 				=> 	isset($employeePicUrlLarge[0])  ? $employeePicUrlLarge  : $defaultLargeProfilePicUrl,
                        'employeeMediumProfilePicUrl' 			=> 	isset($employeePicUrlMedium[0]) ? $employeePicUrlMedium : $defaultMediumProfilePicUrl,
                        'employeeSmallProfilePicUrl' 				=> 	isset($employeePicUrlSmall[0])  ? $employeePicUrlSmall  : $defaultSmallProfilePicUrl,
                        'employeeXSmallProfilePicUrl' 			=> 	isset($employeePicUrlXSmall[0]) ? $employeePicUrlXSmall : $defaultXSmallProfilePicUrl,
                    );

        return $this->changeArrayFormat($output, $outputFormat);
    }





    public function showChangePasswordWithOldPassword()
    {
        $this->addEmployeeSiteStatus("Employee has chosen to change password.", $this->employeeID);

        $FormMessages       =   '';
        $AttemptMessages    =   '';
        $customViewData     =   array
                                (
                                    'FormMessages'      =>  $FormMessages,
                                    'AttemptMessages'   =>  $AttemptMessages,
                                );
        $viewData           =   array_merge($this->layoutData, $customViewData);

        return $this->makeResponseView($this->viewRootFolder . 'change-password-with-old-password', $viewData);
    }

    public function postChangePasswordWithOldPassword()
    {
        $this->addEmployeeSiteStatus("Employee is submitting a password change.", $this->employeeID);

        $FormName           =   'ChangePasswordWithOldPasswordForm';
        $AttemptMessages    =   '';
        $FormMessages       =   '';
        $returnToRoute      =   array
                                (
                                    'name'  =>  FALSE,
                                    'data'  =>  FALSE,
                                );

        if(Request::isMethod('post'))
        {
            if($this->isFormClean($FormName, Input::all()))
            {
                $formFields     =   array
                                    (
                                        'current_password'          =>  Input::get('current_password'),
                                        'password'                  =>  Input::get('password'),
                                        'password_confirmation '    =>  Input::get('password_confirmation'),
                                    );
                $formRules      =   array
                                    (
                                        'current_password'          =>  array
                                                                        (
                                                                            'required',
                                                                            'between:10,256',
                                                                        ),
                                        'password'                  =>  array
                                                                        (
                                                                            'required',
                                                                            'between:10,256',
                                                                            'different:current_password'
                                                                        ),
                                        'password_confirmation '    =>  array
                                                                        (
                                                                            'same:password',
                                                                        ),
                                    );
                $formMessages   =   array
                                    (
                                        'current_password.required'     =>  "Please enter your current password.",
                                        'current_password.between'      =>  "Valid passwords are more than 10 digits.",

                                        'password.required'             =>  "Please enter your new password.",
                                        'password.between'              =>  "Passwords must be more than 10 digits.",
                                        'password.different'            =>  "Your New Password must be different from your Current Password.",

                                        'password_confirmation.same'    =>  "A password confirmation is required.",
                                    );

                $validator      =   Validator::make($formFields, $formRules, $formMessages);
                $passwordCheck  =   $this->checkPasswordStrength($formFields['password']);

                if ($validator->passes() && $passwordCheck['status'])
                {
                    $salts              =   $this->getEmployeeSaltFromID($this->employeeID);
                    $loginCredentials   =   $this->generateEmployeeLoginCredentials($this->employeePrimaryEmail, $formFields['current_password'], $salts['salt1'], $salts['salt2'], $salts['salt3']);

                    // create our user data for the authentication
                    $authData           =   array
                                            (
                                                'id' 	    =>  $this->employeeID,
                                                'password'  =>  $loginCredentials,
                                            );

                    if (Auth::attempt($authData, true))
                    {
                        $LoginCredentials       =   $this->generateLoginCredentials($this->employeePrimaryEmail, $formFields['password']);
                        $employeeFillableArray    =   array
                                                    (
                                                        'password'          =>  Hash::make($LoginCredentials[0]),
                                                        'salt1'             =>  $LoginCredentials[1],
                                                        'salt2'             =>  $LoginCredentials[2],
                                                        'salt3'             =>  $LoginCredentials[3],
                                                    );
                        $this->updateEmployee($this->employeeID, $employeeFillableArray);
                        $this->addEmployeeStatus("ChangedPassword.", $this->employeeID);
                        $this->addEmployeeStatus("ValidEmployee.", $this->employeeID);
                        $this->addEmployeeSiteStatus("Employee has changed their password.", $this->employeeID);

                        $successMessage[]   =   'Congratulations. You have successfully changed your password!';
                        Session::put('successFlashMessage', $successMessage);
                    }
                    else
                    {
                        $this->addAdminAlert();
                        Session::put('employeeLogoutMessage', 'We did not recognize your login credentials. Please login and retry.');
                        Log::info($FormName . " - invalid login credentials.");
                        $returnToRoute  =   $this->forceSuperUserEmployeeLogout();
                    }
                }
                else
                {
                    $FormErrors   =   $validator->messages()->toArray();
                    $FormMessages =   array();
                    foreach($FormErrors as $errors)
                    {
                        $FormMessages[]   =   $errors[0];
                    }

                    if(array_key_exists('errors', $passwordCheck))
                    {
                        foreach($passwordCheck['errors'] as $errors)
                        {
                            $FormMessages[]   =   $errors;
                        }
                    }

                    Log::info($FormName . " - form values did not validate.");
                }
            }
            else
            {
                $this->addAdminAlert();
                Session::put('employeeLogoutMessage', 'Unfortunately, there was an issue with your submission. Please login and retry.');
                Log::warning($FormName . " is not clean.");
                $returnToRoute  =   $this->forceSuperUserEmployeeLogout();
            }
        }
        else
        {
            $this->addAdminAlert();
            Session::put('employeeLogoutMessage', 'Unfortunately, there was an issue with your submission. Please login and retry.');
            Log::info($FormName . " - is not being correctly posted to.");
            $returnToRoute  =   $this->forceSuperUserEmployeeLogout();
        }



        if(FALSE != $returnToRoute['name'])
        {
            return Redirect::route($returnToRoute['name'],$returnToRoute['data']);
        }
        else
        {
            $customViewData   = array
                                (
                                    'AttemptMessages'      =>  $AttemptMessages,
                                    'FormMessages'         =>  $FormMessages,
                                );
            $viewData           =   array_merge($this->layoutData, $customViewData);

            return $this->makeResponseView($this->viewRootFolder . 'change-password-with-old-password', $viewData);
        }

    }
}