<?php
namespace Pulsestorm\HelloWorldMVVM\Controller\Hello;
use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\App\Action\Context;

class World extends \Magento\Framework\App\Action\Action
{
    protected $pageFactory;
    public function __construct(Context $context, PageFactory $pageFactory)
    {
        $this->pageFactory = $pageFactory;
        return parent::__construct($context);
    }

    public function execute()
    {        
       
        $page_object = $this->pageFactory->create();;
        return $page_object;
    }    
}

// class World 
// {
//     protected $request;
//     public function __construct(
//        \Magento\Framework\App\Request\http $request
        
//     ) {
//        $this->request = $request;
 
//     }
//     public function getFrontName()
//     {
//         return $this->request->getFrontName();//in Magento 2.*
//     }
// }