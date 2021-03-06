<?php

namespace ZfcAdmin\Controller;

use Zend\Mvc\Controller\AbstractActionController;

class AppController extends AbstractActionController{
	
   protected $countryTable,$stateTable,$cityTable,$religionTable,$gothraTable,$starsignTable,$zodiacsignTable
   ,$educationfieldTable,$educationlevelTable,$professionTable,$designationTable,$usertypeTable,$newsTable
   ,$newscategoryTable,$userinfoTable,$userTable,$eventsTable,$allcountryTable,$pagesTable,$usersRolesTable;
   
    

	public function getCountryTable()
    {
    	if (!$this->countryTable) {

            $sm = $this->getServiceLocator();

            $this->countryTable = $sm->get('ZfcAdmin\Model\CountryTable');
        }
        return $this->countryTable;
    }

    public function getStateTable()
    {
        if (!$this->stateTable) {

            $sm = $this->getServiceLocator();

            $this->stateTable = $sm->get('ZfcAdmin\Model\StateTable');
        }
        return $this->stateTable;
    }

    public function getCityTable()
    {
        if (!$this->cityTable) {

            $sm = $this->getServiceLocator();

            $this->cityTable = $sm->get('ZfcAdmin\Model\CityTable');
        }
        return $this->cityTable;
    }

    public function getReligionTable()
    {
        if (!$this->religionTable) {

            $sm = $this->getServiceLocator();

            $this->religionTable = $sm->get('ZfcAdmin\Model\ReligionTable');
        }
        return $this->religionTable;
    }

    public function getGothraTable()
    {
        if (!$this->gothraTable) {

            $sm = $this->getServiceLocator();

            $this->gothraTable = $sm->get('ZfcAdmin\Model\GothraTable');
        }
        return $this->gothraTable;
    }


    public function getStarsignTable()
    {
        if (!$this->starsignTable) {

            $sm = $this->getServiceLocator();

            $this->starsignTable = $sm->get('ZfcAdmin\Model\StarsignTable');
        }
        return $this->starsignTable;
    }



    public function getZodiacsignTable()
    {
        if (!$this->zodiacsignTable) {

            $sm = $this->getServiceLocator();

            $this->zodiacsignTable = $sm->get('ZfcAdmin\Model\ZodiacsignTable');
        }
        return $this->zodiacsignTable;
    }



    public function getEducationfieldTable()
    {
        if (!$this->educationfieldTable) {

            $sm = $this->getServiceLocator();

            $this->educationfieldTable = $sm->get('ZfcAdmin\Model\EducationfieldTable');
        }
        return $this->educationfieldTable;
    }


    public function getEducationlevelTable()
    {
        if (!$this->educationlevelTable) {

            $sm = $this->getServiceLocator();

            $this->educationlevelTable = $sm->get('ZfcAdmin\Model\EducationlevelTable');
        }
        return $this->educationlevelTable;
    }

    public function getProfessionTable()
    {
        if (!$this->professionTable) {

            $sm = $this->getServiceLocator();

            $this->professionTable = $sm->get('ZfcAdmin\Model\ProfessionTable');
        }
        return $this->professionTable;
    }


     public function getDesignationTable()
    {
        if (!$this->designationTable) {

            $sm = $this->getServiceLocator();

            $this->designationTable = $sm->get('ZfcAdmin\Model\DesignationTable');
        }
        return $this->designationTable;
    }


    public function getUsertypeTable()
    {
        if (!$this->usertypeTable) {

            $sm = $this->getServiceLocator();

            $this->usertypeTable = $sm->get('ZfcAdmin\Model\UsertypeTable');
        }
        return $this->usertypeTable;
    }


    public function getNewsTable()
    {
        if (!$this->newsTable) {

            $sm = $this->getServiceLocator();

            $this->newsTable = $sm->get('ZfcAdmin\Model\NewsTable');
        }
        return $this->newsTable;
    }


    public function getNewscategoryTable()
    {
        if (!$this->newscategoryTable) {

            $sm = $this->getServiceLocator();

            $this->newscategoryTable = $sm->get('ZfcAdmin\Model\NewscategoryTable');
        }
        return $this->newscategoryTable;
    }



    public function getUserinfoTable()
    {
        if (!$this->userinfoTable) {

            $sm = $this->getServiceLocator();

            $this->userinfoTable = $sm->get('ZfcAdmin\Model\UserinfoTable');
        }
        return $this->userinfoTable;
    }

     public function getUserTable()
    {
        if (!$this->userTable) {

            $sm = $this->getServiceLocator();

            $this->userTable = $sm->get('ZfcAdmin\Model\UserTable');
        }
        return $this->userTable;
    }


     public function getEventsTable()
    {
        if (!$this->eventsTable) {

            $sm = $this->getServiceLocator();

            $this->eventsTable = $sm->get('ZfcAdmin\Model\EventsTable');
        }
        return $this->eventsTable;
    }

     public function getAllCountryTable()
    {
        if (!$this->allcountryTable) {

            $sm = $this->getServiceLocator();

            $this->allcountryTable = $sm->get('ZfcAdmin\Model\AllCountryTable');
        }
        return $this->allcountryTable;
    }

      public function getPagesTable()
    {
        if (!$this->pagesTable) {

            $sm = $this->getServiceLocator();

            $this->pagesTable = $sm->get('ZfcAdmin\Model\PagesTable');
        }
        return $this->pagesTable;
    }


       public function getUsersRolesTable()
    {
        if (!$this->usersRolesTable) {

            $sm = $this->getServiceLocator();

            $this->usersRolesTable = $sm->get('ZfcAdmin\Model\UsersRolesTable');
        }
        return $this->usersRolesTable;
    }
	
	
}