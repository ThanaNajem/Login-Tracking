<?php
/**
 *
 * Copyright © Thana', Inc. All rights reserved. 
 */
namespace CustomerLogin\Tracking\Controller\Account;

use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory; 

/**
 * Class LoginHistoryPagination to represent login history customer account page
 */
class LoginHistoryPagination extends \Magento\Framework\App\Action\Action//\Magento\Customer\Controller\AbstractAccount
{
    
    /**
     * @var PageFactory
     */
    protected $resultPageFactory;

    /**
     * @param Context $context
     * @param PageFactory $resultPageFactory
     * @param Session $session
     */
    public function __construct(
        Context $context,
        PageFactory $resultPageFactory
    ) 
    {
        $this->resultPageFactory = $resultPageFactory;
        parent::__construct($context, $resultPageFactory);
    }

    /**
     * Login history customer account page
     *
     * @return \Magento\Framework\View\Result\Page
     */
    public function execute()
    {
        $resultRedirect = $this->resultPageFactory->create(); 
        return $resultRedirect;
    }
}
