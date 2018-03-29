<?php

class ControllerClaim
{
    private $_claimsManager;
    private $_view;

    public function __construct($url)
    {
        require_once('views/viewAddClaim.php');
        $this->_claimsManager = new ClaimsManager();
        //$this->_claimsManager->addClaim();
    }

    /**
     * @return ClaimsManager
     */
    public function getClaimsManager()
    {
        return $this->_claimsManager;
    }
}

if (isset($_POST['submitClaim'])) {
    $claimData = new Claim($_POST);
    $_claimsManager = new ClaimsManager();
    $_claimsManager->addClaim($claimData);
}
