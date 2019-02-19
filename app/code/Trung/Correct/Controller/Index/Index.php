<?php
namespace Trung\Correct\Controller\Index;


class Index extends \Magento\Framework\App\Action\Action
{
    protected $currentCustomer;
    protected $_session;
    protected $resultPageFactory;
    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Customer\Model\Session $session,
//        \Magento\Customer\Helper\Session\CurrentCustomer $currentCustomer,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory
    )
    {
        parent::__construct($context);
        $this->_session = $session;
//        $this->currentCustomer = $currentCustomer;
        $this->resultPageFactory = $resultPageFactory;
    }

    public function getData(){
        $a = $this->_session->getCustomerData()->getFirstName();

        return $a;
    }
    public function execute()
    {
//        var_dump($this->_session->getCustomerData());
//        echo '<hr>';
//        var_dump($this->_session->getCustomerDataObject());
        var_dump($this->getData());
        echo '<hr>';



//        var_dump($this->currentCustomer->getCustomer());

//        return $this->resultPageFactory->create();

    }

 }